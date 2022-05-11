<?php

function smart_setup(){
add_theme_support('post-thumbnails');
register_nav_menus(array(
                  'primary' => __('Primary Menu')
));
}
add_action('after_setup_theme' , 'smart_setup');

function smart_files(){
wp_enqueue_style('google_font' ,  '//fonts.googleapis.com/css?family=Montserrat:400,700');
wp_enqueue_style('smart_style' , get_stylesheet_uri(), NULL , microtime());
}
add_action('wp_enqueue_scripts' , 'smart_files');

function set_excerpt_length(){
return 80;
}
add_filter('excerpt_length' , 'set_excerpt_length');

function init_widgets(){
              register_sidebar(array(
              'name'  => 'Sidebar',
              'id'         => 'sidebar',
              'before_widget' => '<div class="main-sidebar">',
              'after_widget'    =>  '</div>',
              'before_title'      =>  '<h4>',
              'after_title'         =>  '</h4>'
            ));
}

add_action('widgets_init' , init_widgets);
