<?php
    global $wp_query;
    
	// ------------------- Theme Support ------------------- //
	add_theme_support( 'post-thumbnails' );

	// ------------------- Import LESS ------------------- //
	wp_enqueue_style( 'less-style', get_stylesheet_directory_uri() . '/css/style.less' );
	
	// ------------------- Menus ------------------- //
	function register_nav() {
	  register_nav_menus(
	    array(
	      'header_nav' => __( 'Nawigacja górna' ),
	      'footer_nav' => __( 'Nawigacja w stopce' )
	    )
	  );
	}
	add_action( 'init', 'register_nav' );
	
	
    function reg_tax() {
        register_taxonomy_for_object_type('category', 'page');
        add_post_type_support('page', 'category');
    }