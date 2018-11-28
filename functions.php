<?php

function my_files() {

	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', NULL, '1.0', true);
	wp_enqueue_script('popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', NULL, '1.0', true);
	wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', NULL, '1.0', true);
	wp_enqueue_script('main-scripts', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
	

	wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9');
	wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css?family=Prata|Rochester');
	wp_enqueue_style('animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
	wp_enqueue_style('my_main_styles', get_stylesheet_uri());
}

function theme_features(){
	add_theme_support('title-tag');
}
add_action('wp_enqueue_scripts', 'my_files');

add_action('after_setup_theme', 'theme_features');
?>

