<?php

namespace register;

function add_sections($wp_customize)
{
    $wp_customize->add_section('homepage', array(
        'title' => __('Strona główna', 'shop'),
        'description' => 'Strona główna sklepu',
        'priority' => 1
    ));
}
