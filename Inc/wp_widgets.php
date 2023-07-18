<?php 
// --------------------  widgets register -------------
function sidebar_register_widgets() {
    register_sidebar(array(
        'name' => 'Widgets Area',
        'id' => 'sidbar-1',
        'Label' => __('widget create', 'torikultheme'),
        'before_widgets' => '<div class="sidbar_child">',
        'after_widgets' => '</div>',
        'before_titile' => '<h2 class="title-widgets">',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Footer  one',
        'id' => 'footer-1',
        'Label' => __('widget create', 'torikultheme'),
        'before_widgets' => '<div class="sidbar_child">',
        'after_widgets' => '</div>',
        'before_titile' => '<h2 class="title-widgets">',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Footer two',
        'id' => 'footer-2',
        'Label' => __('widget create', 'torikultheme'),
        'before_widgets' => '<div class="sidbar_child">',
        'after_widgets' => '</div>',
        'before_titile' => '<h2 class="title-widgets">',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Footer three',
        'id' => 'footer-3',
        'Label' => __('widget create', 'torikultheme'),
        'before_widgets' => '<div class="sidbar_child">',
        'after_widgets' => '</div>',
        'before_titile' => '<h2 class="title-widgets">',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init', 'sidebar_register_widgets');
