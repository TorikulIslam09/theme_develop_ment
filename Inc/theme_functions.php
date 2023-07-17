<?php

// ------------------ theme customize register -----------------
// --------------- logo control and register ------------
function theme_customize_img_register($wp_customize) {
    $wp_customize -> add_section('header_area', array(
        'title'       => __('header_area_logo', 'torikultheme'),
        'description' => 'If you interested to update your logo area, you can do it'
    ));
    $wp_customize -> add_setting('loego_area', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.jpg'
    ));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'loego_area', array(
        'label' => "upload your logo",
        'setting' => 'loego_area',
        'section' => 'header_area'
    ) ));


// --------------- manue positon chang ------------
$wp_customize -> add_section('menu_position_area', array(
    'title' => __('Menu chang option', 'torikultheme'),
    'description' => 'if you interested change to the menu position, you can do it'
));
$wp_customize -> add_setting('chang_positon', array(
    'default' => 'right_menu'
));
$wp_customize -> add_control('chang_positon', array(
    'label'   => "Chang your menu position",
    'setting' => 'chang_positon',
    'section' => 'menu_position_area',
    'type'    => 'radio',
    'choices' => array(
        'right_menu' => 'Right menu',
        'cente_menu' => 'Center menu',
        'left_menu' => 'Left menu',
    )
));
}

add_action('customize_register', 'theme_customize_img_register');
// ------------------ theme customize -----------------

// ------------------- footer setup ----------------
function footer_setup($wp_customize) {
    $wp_customize -> add_section('torikul_footer', array(
        'title' => __('Footer Area', 'torikultheme'),
        'description' => 'if you interested to update your footer'
    ));
    $wp_customize -> add_setting('torikul_fotter_setting', array(
        'defualt' => '$copy; $copyright @ 2023 || Torikul Islam Rupok'
    ));
    $wp_customize -> add_control('torikul_fotter_setting', array(
        'lebel' => 'Chang Your Footer text',
        'setting' => 'torikul_fotter_setting',
        'section' => 'torikul_footer',
    ));
}


add_action('customize_register', 'footer_setup');