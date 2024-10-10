<?php

/*
Plugin Name: add custom post type event
Description: add custom post type event
Author: Hao
Version: 1
*/

function university_post_types()
{
	register_taxonomy('category_event', 'book', [
		'labels' => 'Danh mục sự kiện',
	]);

	register_post_type('event', array(

		'show_in_rest' => true,

		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),

		'rewrite' => array('slug' => 'events'),

		'has_archive' => true,

		"taxonomies" => ['category_event'],

		'public' => true,

		'labels' => array(

			'name' => 'Events',

			'add_new' => 'Add New Event',

			'add_new_item' => 'Add New Event',

			'edit_item' => 'Edit Event',

			'all_items' => 'All Events',

			'singular_name' => 'Event'

		),

		'menu_icon' => 'dashicons-calendar'

	));

	register_post_type('program', array(

		'show_in_rest' => true,

		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),

		'rewrite' => array('slug' => 'Programs'),

		'has_archive' => true,

		"taxonomies" => ['category_event'],

		'public' => true,

		'labels' => array(

			'name' => 'Programs',

			'add_new' => 'Add New Program',

			'add_new_item' => 'Add New Program',

			'edit_item' => 'Edit Program',

			'all_items' => 'All Program',

			'singular_name' => 'Program'

		),

		'menu_icon' => 'dashicons-images-alt'

	));
}
add_action('init', 'university_post_types');
