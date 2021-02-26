<?php

// This function loads all our JS and CSS files
function load_university_files() {
  // last 3 args for loading JS files = does this script depend on any others, version no, if it should run at the end of file?
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_styles', get_stylesheet_uri());
}

// add_action is a WP function - hook to use, function to run
add_action('wp_enqueue_scripts', 'load_university_files');

?>