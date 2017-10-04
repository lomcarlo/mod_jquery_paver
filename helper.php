<?php
/**
 * Helper class for Paver module
 * 
 * @package    Joomla
 * @subpackage Modules
 * @link https://github.com/lomcarlo/mod_jquery_paver
 * @license        GNU/GPL, see LICENSE.php
 * mod_jquery_paver is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
defined('_JEXEC') or die;

class ModPaverHelper
{
    /**
     * Retrieves the Paver code
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getPaver(&$params)
    {
		$alt = ($param->('title')!='') ? $param->('title') : 'MOD_JQUERY_PAVER_DEFAULT_ALT';
		$html = '<div class="panorama">
					<img src="'.$params->get('imagePath').'" alt="'.$alt.'" title="'.$alt.'" />
				</div>';
		return $html;
    }
}
