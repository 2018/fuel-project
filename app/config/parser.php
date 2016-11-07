<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(

	// ------------------------------------------------------------------------
	// Register extensions to their parsers, either classname or array config
	// ------------------------------------------------------------------------
	'extensions' => array(
		'smarty'   => array('class' => 'View_Smarty', 'extension' => 'tpl'),
	),

	// ------------------------------------------------------------------------
	// Individual class config by classname
	// ------------------------------------------------------------------------

	// SMARTY ( http://www.smarty.net/documentation )
	// ------------------------------------------------------------------------
	'View_Smarty' => array(
		'auto_encode' => true,
		'delimiters'  => array('left' => '{', 'right' => '}'),
		'environment' => array(
			'compile_dir'       => realpath(APPPATH.'../cache').DS.'templates_c'.DS,
			'config_dir'        => realpath(APPPATH.'../cache').DS.'configs'.DS,
			'cache_dir'         => realpath(APPPATH.'../cache').DS.'Smarty'.DS,
			'plugins_dir'       => array(APPPATH.'modules'.DS.'eshop'.DS.'smarty'.DS.'plugins'.DS),
			'caching'           => false,
			'cache_lifetime'    => 0,
			'force_compile'     => false,
			'compile_check'     => true,
			'debugging'         => false,
			'autoload_filters'  => array(),
			'default_modifiers' => array(),
		),
	),

);
