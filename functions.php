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
		
		// Add support for post formats
		add_theme_support('post-formats', array(
			'aside',
			'gallery',
			'link'
		));
	}
	
	add_action('after_setup_theme', 'adv_theme_support');
	
	function adv_set_excerpt_length()
	{
		return 25;
	}

	add_filter('excerpt_length', 'adv_set_excerpt_length');
	
	
	/*
	 * HELPER FUNCTIONS
	 */
	function get_top_parent()
	{
		global $post;
		if ($post->post_parent)
		{
			$ancestors = get_post_ancestors($post->ID);
			return $ancestors[0];
		}
		
		return $post->ID;
	}
	
	function page_how_many_children()
	{
		global $post;
		
		$pages = get_pages('child_of=' . $post->ID);
		return count($pages);
	}