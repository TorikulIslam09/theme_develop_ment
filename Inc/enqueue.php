<?php 


// css and js file call wp_ enqueue used 

function css_js_file_upload() {
    wp_enqueue_style('torikul_style', get_stylesheet_uri()); // default have wordpe
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'5.0.2','all'); // custom file use 
    wp_enqueue_style('custom', get_template_directory_uri().'/css/custom.css', array(),'1.0.1','all'); // custom file use


//    Jquery file load------------
    wp_enqueue_script('jquery');
    wp_enqueue_script('boot-js', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(),'v5.3.0','all');// custom file use
    wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array(),'1.1.0','all');// custom file use
}
add_action('wp_enqueue_scripts', 'css_js_file_upload');




// ----------------- google fonts ------------
function torikul_google_fonts() {
    wp_enqueue_style('torikul_google_fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap', false);
}
add_action('wp_enqueue_scripts', 'torikul_google_fonts');

