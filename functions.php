<?php

function load_stylesheets()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// CPT
function finalproject_post_type() {
	register_post_type('product', array(
		'supports' => array('title', 'editor'),
		'rewrite'=> array('slug','products'),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-products',
		'labels' => array(
			'name' => 'Products',
			'add_new_item' => 'Add New Product',
			'edit_item' => 'Edit Product',
			'all_items' => 'All Products',
			'singular_name' => 'Product'
		)
	) );
}

add_action('init','finalproject_post_type');
?>