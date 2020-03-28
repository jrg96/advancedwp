<?php

	// Setup for theme
	function adv_theme_support()
	{
		// Add featured-image support for admin-page
		add_theme_support('post-thumbnails');
	
		// Add menu options for admin-page
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
			'footer'  => __('Footer Menu')
		));
	}
	
	add_action('after_setup_theme', 'adv_theme_support');
	
	function adv_set_excerpt_length()
	{
		return 25;
	}

	add_filter('excerpt_length', 'adv_set_excerpt_length');