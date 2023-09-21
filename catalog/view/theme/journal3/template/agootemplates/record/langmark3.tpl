<?php if ($j3->settings->get('catalogLanguageStatus')): ?>
<?php if (count($languages) > 1) { ?>
 <?php
 $current_language = null;
 foreach ($languages as $language) {
 if ($language['current']) {
 $current_language = $language;
 }
 }
 ?>

<style>
.language-currency .dropdown::after {
    content: "" !important;
}
</style>

<div id="language" class="language">
 <form id="form-language-mark">

<div class="dropdown drop-menu">
 <button type="button" class="dropdown-toggle" data-toggle="dropdown">
 <span class="language-flag-title">
 <span class="symbol"><img src="<?php echo $j3->imageToBase64('catalog/language/' . $current_language['code'] . '/' . $current_language['code'] . '.png'); ?>" width="16" height="11" alt="<?php echo $current_language['name']; ?>" title="<?php echo $current_language['name']; ?>"/></span>
 <span class="language-title"><?php echo $current_language['name']; ?></span>
 </span>
 </button>

<div class="dropdown-menu j-dropdown">
 <ul class="j-menu">
 <?php foreach ($languages as $language): ?>
 <li>
 <a href="<?php echo $language['url']; ?>" onclick="window.location = '<?php echo $language['url']; ?>'" class="language-select" data-name="<?php echo $language['code']; ?>">
 <span class="language-flag"><img src="<?php echo $j3->imageToBase64('catalog/language/' . $language['code'] . '/' . $language['code'] . '.png'); ?>" width="16" height="11" alt="<?php echo $language['name']; ?>" title="<?php echo $language['name']; ?>"/></span>
 <span class="language-title-dropdown"><?php echo $language['name']; ?></span>
 </a>
 </li>
 <?php endforeach; ?>
 </ul>
 </div>

 </div>

 </form>
 </div>

<?php } ?>
<?php endif; ?>
