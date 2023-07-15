<?php


// my title

add_theme_support("title-tag");


// css file and js file load korar jonno fuction create korbo

function css_js_file_upload() {
    wp_enqueue_style('torikul_style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'5.0.2','all');
    wp_enqueue_style('custom', get_template_directory_uri().'/css/custom.css', array(),'1.0.1','all');


//    Jquery file load------------
    wp_enqueue_script('jquery');
    wp_enqueue_script('boot-js', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(),'v5.3.0','all');
    wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array(),'1.1.0','all');
}
add_action('wp_enqueue_scripts', 'css_js_file_upload');


// -------------- google fonts ------------
function torikul_google_fonts() {
    wp_enqueue_style('torikul_google_fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap', false);
}

add_action('wp_enqueue_scripts', 'torikul_google_fonts');



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

}
add_action('customize_register', 'theme_customize_img_register');
// ------------------ theme customize -----------------
//  --------------------- manue raegister----------
register_nav_menu('primary_manue', __('Main Manu', 'torikultheme'));