<?php

// Constants
define('ASSETS_PATH', get_template_directory_uri() . '/assets/');
define('TEMPLATES_PATH', get_template_directory() . '/templates/');

function __template(string $name)
{
	return load_template(TEMPLATES_PATH . $name . '.php');
}

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

function shop_customize_register($wp_customize)
{
	$wp_customize->add_section('homepage', array(
		'title' => __('Strona główna', 'shop'),
		'description' => 'Strona główna sklepu',
		'priority' => 1
	));

	$wp_customize->add_setting('aside_title', array(
		'default' => 'Donec volutpat dui tellus, at consequat turpis consequat nec.',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('aside_title', array(
		'label' => __('Tytuł przerywnika', 'shop'),
		'section' => 'homepage',
		'priority' => 1
	));

	$wp_customize->add_setting('aside_subtitle', array(
		'default' => 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym.',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('aside_subtitle', array(
		'label' => __('Opis przerywnika', 'shop'),
		'section' => 'homepage',
		'priority' => 1
	));
}


add_action('customize_register', 'shop_customize_register');
