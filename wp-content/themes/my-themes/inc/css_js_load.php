
<?php
function all_css_js_link(){

wp_enqueue_style('style', get_stylesheet_uri());
wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'5.0.2','all');
//custom css link
wp_register_style('custom',get_template_directory_uri().'/css/custom.css',array(),'5.0.2','all');
wp_enqueue_style('custom');

wp_enqueue_style('bootstrap');
wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'5.0.2',true);
wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/proper.min.js',array(),'5.0.2',true);

}
add_action('wp_enqueue_scripts','all_css_js_link');