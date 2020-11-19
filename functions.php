<?php

// require_once(__DIR__ . '/src/utilities/tpl-utils.php');

require_once(__DIR__ . '/src/register/add-sections.php');
require_once(__DIR__ . '/src/register/homepage/index-description.register.php');

use function register\add_sections;
use function register\homepage\index_description_register;

// Constants
define('ASSETS_PATH', get_template_directory_uri() . '/assets/');
define('TEMPLATES_PATH', get_template_directory() . '/templates/');

function add_external_files()
{
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
}

function mytheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}

add_action('wp_enqueue_scripts', 'add_external_files');
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

// TODO: MOVE IT TO TPL_UTILS
function __template(string $name)
{
	return load_template(TEMPLATES_PATH . $name . '.php');
}

function shop_customize_register($wp_customize)
{
	add_sections($wp_customize);

	index_description_register($wp_customize);
}


add_action('customize_register', 'shop_customize_register');
