<?php

function blog_files(){
    wp_enqueue_style('blog_styles', get_stylesheet_uri());
    
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
  
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('our-main-styles-vendor', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('our-late-styles', get_theme_file_uri('/build/style-late.css'));
    wp_localize_script('main-university-js', 'universityData', array(
      'root_url' => get_site_url(),
      'nonce' => wp_create_nonce('wp_rest')
    ));
}


function university_features(){
  add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'blog_files');
add_action('after_setup_theme','university_features');

//get down with this theme as soon as posible
// function university_files() {
//   }

?>

