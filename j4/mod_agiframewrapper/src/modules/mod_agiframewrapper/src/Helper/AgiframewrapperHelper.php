<?php
/**
 * @package     Joomla.Site
 * @subpackage  pkg_agiframewrapper
 *
 * @copyright   Copyright (C) 2022 Astrid Günther, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later;
 * @link        astrid-guenther.de
 */

namespace AG\Module\Agiframewrapper\Site\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Access\Access;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Date\Date;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Router\Route;
use Joomla\Component\Agsoms\Administrator\Extension\ContentComponent;
use Joomla\Component\Agosms\Site\Helper\RouteHelper;
use Joomla\String\StringHelper;
use Joomla\Component\Fields\Administrator\Helper\FieldsHelper;

/**
 * Helper for mod_agiframewrapper
 *
 * @since  4.0
 */
abstract class AgiframewrapperHelper
{
	/**
	 * Gets the parameters for the agiframewrapper
	 *
	 * @param   mixed  &$params  The parameters set in the administrator section
	 *
	 * @return  mixed  &params  The modified parameters
	 *
	 * @since   1.5
	 */
	public static function getParams(&$params)
	{
		$params->def('url', '');
		$params->def('scrolling', 'auto');
		$params->def('height', '200');
		$params->def('height_auto', 0);
		$params->def('width', '100%');
		$params->def('add', 1);
		$params->def('name', 'agiframewrapper');

		$url = $params->get('url');

		if ($params->get('add'))
		{
			// Adds 'http://' if none is set
			if (strpos($url, '/') === 0)
			{
				// Relative URL in component. use server http_host.
				$url = 'http://' . $_SERVER['HTTP_HOST'] . $url;
			}
			elseif (strpos($url, 'http') === false && strpos($url, 'https') === false)
			{
				$url = 'http://' . $url;
			}
		}

		// Auto height control
		if ($params->def('height_auto'))
		{
			$load = 'onload="iFrameHeight(this)"';
		}
		else
		{
			$load = '';
		}

		$params->set('load', $load);
		$params->set('url', $url);

		return $params;
	}
}
