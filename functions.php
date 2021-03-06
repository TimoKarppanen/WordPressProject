<?php


add_action('wp_enqueue_scripts','university_files');

add_action('wp_enqueue_scripts','hellofromjs'); 

add_action('after_setup_theme', 'university_features');

  function university_files(){

    
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true );
    
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('university_main_styles',get_stylesheet_uri());
    

  
  }

  function hellofromjs(){

    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', NULL, 1.0, true);

  }



  function university_features(){

  }


 ?>
