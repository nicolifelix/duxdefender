<?php

/**
 * Enqueue scripts and styles.
 */
function lab2b_tema_scripts() {
	wp_enqueue_style( 'lab2b_tema-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lab2b_tema-style', 'rtl', 'replace' );

	wp_enqueue_style( 'lab2b_tema-main', get_template_directory_uri() . '/assets/css/main.css',false,'1.1','all');

	wp_enqueue_script( 'lab2b_tema-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lab2b_tema-main-class', get_template_directory_uri() . '/assets/js/classes.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lab2b_tema-main-controller', get_template_directory_uri() . '/assets/js/controller.js', array(), _S_VERSION, true );




	wp_enqueue_script( 'lab2b_tema-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lab2b_tema-main-tema', get_template_directory_uri() . '/assets/js/teste.js', array(), _S_VERSION, true );

	// wp_enqueue_style( 'lab2b_tema-slick', get_template_directory_uri() . '/assets/slick/slick.css',false,'1.1','all');
	// wp_enqueue_style( 'lab2b_tema-slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css',false,'1.1','all');
	// wp_enqueue_script( 'lab2b_tema-script-slick', get_template_directory_uri() . '/assets/slick/slick.js', array(), _S_VERSION, true );




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lab2b_tema_scripts' );
