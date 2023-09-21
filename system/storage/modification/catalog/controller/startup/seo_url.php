<?php
class ControllerStartupSeoUrl extends Controller {
	public function index() {
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

		// Decode URL
		if (isset($this->request->get['_route_'])) {
			$parts = explode('/', $this->request->get['_route_']);

			// SEO URL Generator PRO . Begin
			$parts = array_filter($parts);
			
			$last_part = end($parts);
			// SEO URL Generator PRO . End

			// remove any empty arrays from trailing
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			foreach ($parts as $part) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($part) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");


                // Journal Theme Modification
                if ($part && !$query->num_rows) {
                    $sql = "
                        SELECT CONCAT('journal_blog_category_id=', category_id) as query FROM " . DB_PREFIX . "journal3_blog_category_description
                        WHERE keyword = '" . $this->db->escape($part) . "'
                        UNION
                        SELECT CONCAT('journal_blog_post_id=', post_id) as query FROM " . DB_PREFIX . "journal3_blog_post_description
                        WHERE keyword = '" . $this->db->escape($part) . "'
                    ";
                    $query = $this->db->query($sql);
                }

                if (!$query->num_rows) {
                    $this->load->model('journal3/blog');
                    $journal_blog_keywords = $this->model_journal3_blog->getBlogKeywords();

                    if($part && is_array($journal_blog_keywords) && (in_array($part, $journal_blog_keywords))) {
                        $this->request->get['route'] = 'journal3/blog';
                        continue;
                    }
                }
                // End Journal Theme Modification
            
				if ($query->num_rows) {
					$url = explode('=', $query->row['query']);


                // Journal Theme Modification
                if ($url[0] == 'journal_blog_post_id') {
                    $this->request->get['journal_blog_post_id'] = $url[1];
                }

                if ($url[0] == 'journal_blog_category_id') {
                    $this->request->get['journal_blog_category_id'] = $url[1];
                }
                // End Journal Theme Modification
            
					if ($url[0] == 'product_id') {
						$this->request->get['product_id'] = $url[1];
					}

					if ($url[0] == 'category_id') {
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					}

					if ($url[0] == 'manufacturer_id') {
						$this->request->get['manufacturer_id'] = $url[1];
					}

					if ($url[0] == 'information_id') {
						$this->request->get['information_id'] = $url[1];
					}

					if ($query->row['query'] && $url[0] != 'information_id' && $url[0] != 'manufacturer_id' && $url[0] != 'category_id' && $url[0] != 'product_id') {
						$this->request->get['route'] = $query->row['query'];
					}
				} else {


						// SEO URL Generator PRO . Begin
						
						// It is DIFFERENT with seopro.php modification (!)						
						$new_url = false;

						// Attention!
						// Sometimes users fill SEO URL with postfix ".html" instead of to turn on it in the SeoPro settings
						// For those cases $last_part not contain ".html" so it is impossible to find anything in redirects
						// That's why we need to check SEO URL if they contain postfix ".html"

						$parts2 = explode('/', trim(utf8_strtolower($this->request->get['_route_']), '/'));

						$last_part2 = str_replace('.html', '', end($parts2));

						$a_parts = $parts;

						if ($last_part != $last_part2) {
							array_push($a_parts, $last_part2);
						}

						// Проверяем все части УРЛа, а не только крайнюю справа!
						$in = '';

						$i = 0;
						foreach ($a_parts as $item) {
							$in .= ($i) ? ', ' : '';
							$in .= '\'' . $this->db->escape($item) . '\'';
							$i++;
						}

						$sql = "SELECT * FROM " . DB_PREFIX . "seo_url_generator_redirects WHERE seo_url_old IN ($in) AND store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY seo_url_id DESC";

						$query = $this->db->query($sql);

						$keys_with_redirects = array();
						$essence_to_keys = array();
						$language_of_old_url = array();
						$res = array();

						if ($query->rows) {
							foreach ($query->rows as $item) {
								$keys_with_redirects[] = mb_strtolower($item['seo_url_old']); // strtolower for SeoPro
								$essence_to_keys[mb_strtolower($item['seo_url_old'])] = $item['query']; // strtolower for SeoPro
								$language_of_old_url[mb_strtolower($item['seo_url_old'])] = $item['language_id'];
							}
						}

						if ($last_part != $last_part2) {
							$last_part = $last_part2;
						}

						// strtolower for SeoPro
						if (in_array(mb_strtolower($last_part), $keys_with_redirects)) {
							// Последний алиас есть в базе редиректов
							$res = explode('=', $essence_to_keys[$last_part]);
							
							$languages0 = $this->model_localisation_language->getLanguages();
							
							$languages = array();
							
							foreach ($languages0 as $code => $language) {
								$languages[$language['language_id']]['code'] = $language['code'];
							}

							if ($this->config->get('config_language_id') != $language_of_old_url[$last_part]) {
								$this->config->set('config_language_id', $language_of_old_url[$last_part]);
								$this->session->data['language'] = $languages[$language_of_old_url[$last_part]]['code'];
								setcookie('language', $this->session->data['language'], time() + 60 * 60 * 24 * 30, '/', $this->request->server['HTTP_HOST']);
							}
						} else {
							// There isn't $last_part in redirects, but there is parent essence
							// So we need to find out what type of essence is it
							$sql = "SELECT query, keyword FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($last_part) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY seo_url_id DESC LIMIT 1";

							$query = $this->db->query($sql);

							if ($query->row) {
								$res = explode('=', $query->row['query']);
							}
						}

						// Определяем сущность текущей страницы
						if ($res) {
							if ('product_id' == $res[0]) {
								$new_url = $this->url->link('product/product', 'product_id=' . $res[1]);
							}

							if ('category_id' == $res[0]) {
								$new_url = $this->url->link('product/category', 'path=' . $res[1]);
							}

							if ('manufacturer_id' == $res[0]) {
								$new_url = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $res[1]);
							}

							if ('information_id' == $res[0]) {
								$new_url = $this->url->link('information/information', 'information_id=' . $res[1]);
							}
						}

						if ($new_url) {

		        if (isset($this->request->get['route']) && $this->request->get['route'] == 'product/search') {
		        	$lm_redirect = 302;
		        } else {
		        	$lm_redirect = 301;
		        }

							$this->response->redirect($new_url, $lm_redirect);
							exit;
						}
						// SEO URL Generator PRO . End

					$this->request->get['route'] = 'error/not_found';

					break;
				}
			}


                // Journal Theme Modification
                if (isset($this->request->get['journal_blog_post_id'])) {
                    $this->request->get['route'] = 'journal3/blog/post';
                } else if (isset($this->request->get['journal_blog_category_id'])) {
                    $this->request->get['route'] = 'journal3/blog';
                }
                // End Journal Theme Modification
            
			if (!isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';
				} elseif (isset($this->request->get['path'])) {
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';
				}
			}
		}
	}

	public function rewrite($link) {

                // Journal Theme Modification
                if (defined('JOURNAL3_ACTIVE')) {
                    $this->load->model('journal3/blog');
                    $is_journal3_blog = false;
                }
                // End Journal Theme Modification
            
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = '';

		$data = array();

		parse_str($url_info['query'], $data);

		foreach ($data as $key => $value) {
			if (isset($data['route'])) {
				if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {
						$url .= '/' . $query->row['keyword'];

						unset($data[$key]);
					}

                // Journal Theme Modification
                } elseif ($key == 'journal_blog_post_id') {
                    $is_journal3_blog = true;
                    if ($journal_blog_keyword = $this->model_journal3_blog->rewritePost($value)) {
                        $url .= '/' . $journal_blog_keyword;
                        unset($data[$key]);
                    }
                } elseif ($key == 'journal_blog_category_id') {
                    $is_journal3_blog = true;
                    if ($journal_blog_keyword = $this->model_journal3_blog->rewriteCategory($value)) {
                        $url .= '/' . $journal_blog_keyword;
                        unset($data[$key]);
                    }
                } elseif (isset($data['route']) && $data['route'] == 'journal3/blog') {
                    if (!isset($data['journal_blog_post_id']) && !isset($data['journal_blog_category_id'])) {
                        $is_journal3_blog = true;
                    }
                // End Journal Theme Modification
            
				} elseif ($key == 'path') {
					$categories = explode('_', $value);

					foreach ($categories as $category) {
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int)$category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($query->num_rows && $query->row['keyword']) {
							$url .= '/' . $query->row['keyword'];
						} else {
							$url = '';

							break;
						}
					}

					unset($data[$key]);
				}
			}
		}


                // Journal Theme Modification
                if (defined('JOURNAL3_ACTIVE')) {
                    if ($is_journal3_blog && $this->model_journal3_blog->getBlogKeyword()) {
                        $url = '/' . $this->model_journal3_blog->getBlogKeyword() . $url;
                    }
                }
                // End Journal Theme Modification
            
		if ($url) {
			unset($data['route']);

			$query = '';

			if ($data) {
				foreach ($data as $key => $value) {
					$query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
				}

				if ($query) {
					$query = '?' . str_replace('&', '&amp;', trim($query, '&'));
				}
			}

			return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
		} else {
			return $link;
		}
	}
}
