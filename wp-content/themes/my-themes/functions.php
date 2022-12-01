<?php 
//title
include_once('inc/default.php');
//css js 
include_once('inc/css_js_load.php');



function my_image_customize($wp_customize){
    $wp_customize->add_section('my_logo_area' ,array(
        'title' => __('Header Area','bdweb'),
        'Description'=>'click here to update your logo'
    ));
    //setting
    $wp_customize->add_setting('my_logo',array(
        'default'=>get_bloginfo('template_directory').'/images/logo.png'
    ));
    //control
    $wp_customize->add_control(new wp_customize_image_control($wp_customize,'my_logo',array(
        'label'=>'logo upload',
        'section'=>'my_logo_area',
        'setting'=>'my_logo',
    )));

//footer start
    $wp_customize->add_section('my_footer_area' ,array(
        'title' => __('footer Area','sam'),
        'Description'=>'click here to update your footer'
    ));
    //setting
    $wp_customize->add_setting('my_footer',array(
        'default'>'Copy right 2022'
    ));
    //control
    $wp_customize->add_control ('my_footer',array(
        'label'=>'copyright text',
        'section'=>'my_footer_area',
        'setting'=>'my_footer',
    ));















}

add_action('customize_register','my_image_customize');

//manu register
register_nav_menu('main_menu','__bdweb');
register_nav_menu('secendary_menu','__bdweb');