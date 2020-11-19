<?php

namespace register\homepage;

function index_description_register($wp_customize)
{
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
