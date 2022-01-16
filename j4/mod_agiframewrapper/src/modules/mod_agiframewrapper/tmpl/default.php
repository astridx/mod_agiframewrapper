<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_agiframewrapper
 *
 * @copyright   Copyright (C) 2005 - 2018 Astrid Günther, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later;
 * @link        astrid-guenther.de
 */

defined('_JEXEC') or die;
//JHtml::_('script', 'mod_agiframewrapper/site.js', false, true);
/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseScript('com_wrapper.iframe', 'com_wrapper/iframe-height.min.js', [], ['defer' => true]);
$wa->registerAndUseScript('mod_agiframewrapper.site', 'mod_agiframewrapper/site.js');

$url2 = JURI::base() . "modules/mod_agiframewrapper/index.html";

?>

<a class="btn btn-primary" id="agdisable-<?php echo $module->id; ?>" 
   style="display:none;"
>
    <?php echo JText::_('MOD_WRAPPER_INHALT_DEAKTIVIEREN'); ?>
</a>
<a class="btn btn-primary" id="agenable-<?php echo $module->id; ?>"
   style="display:block;"
>
    <?php echo JText::_('MOD_WRAPPER_INHALT_AKTIVIEREN'); ?>
</a>
<iframe <?php echo $load; ?>
	id="blockrandom-<?php echo $id; ?>"
	name="<?php echo $target; ?>"
        data-modul_id='<?php echo $module->id; ?>'   
        data-url_active='<?php echo $url; ?>'   
        data-url_deactive='<?php echo $url2; ?>'   
	src="<?php echo $url2; ?>"
	width="<?php echo $width; ?>"
	height="<?php echo $height; ?>"
	scrolling="<?php echo $scroll; ?>"
	frameborder="<?php echo $frameborder; ?>"
	loading="<?php echo $lazyloading; ?>"
	title="<?php echo $ititle; ?>"
	class="agiframewrapper agiframewrapper<?php echo $moduleclass_sfx; ?>" >
	<?php echo JText::_('MOD_WRAPPER_NO_IFRAMES'); ?>
</iframe>
