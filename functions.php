<?php

// Theme Support
function syzygy_theme_setup(){
	add_theme_support('post-thumbnails');

	// Nav menus
    register_nav_menus(array(
      'primary' => __('Primary Menu', 'syzygy')
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
		
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-slider' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
};

add_action('after_setup_theme','syzygy_theme_setup');

// Excerpt Length Control
function set_excerpt_length(){
	return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function syzygy_init_widgets($id){
	// need this for wherever you put the widgets
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}

add_action('widgets_init', 'syzygy_init_widgets');

// Customizer File
require get_template_directory(). '/inc/customizer.php';