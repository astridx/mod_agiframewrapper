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

use Joomla\CMS\Helper\ModuleHelper;
use AG\Module\Agiframewrapper\Site\Helper\AgiframewrapperHelper;

$params = AgiframewrapperHelper::getParams($params);

$load = $params->get('load');
$url = htmlspecialchars($params->get('url'), ENT_COMPAT, 'UTF-8');
$target = htmlspecialchars($params->get('target'), ENT_COMPAT, 'UTF-8');
$width = htmlspecialchars($params->get('width'), ENT_COMPAT, 'UTF-8');
$height = htmlspecialchars($params->get('height'), ENT_COMPAT, 'UTF-8');
$scroll = htmlspecialchars($params->get('scrolling'), ENT_COMPAT, 'UTF-8');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
$frameborder = htmlspecialchars($params->get('frameborder'), ENT_COMPAT, 'UTF-8');
$ititle = $module->title;
$id = $module->id;
$lazyloading = $params->get('lazyloading', 'lazy');

require ModuleHelper::getLayoutPath('mod_agiframewrapper', $params->get('layout', 'default'));
