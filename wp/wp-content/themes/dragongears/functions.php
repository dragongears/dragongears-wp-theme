<?php
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Primary Sidebar',
		'id' => 'primary_sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Alternate Sidebar',
		'id' => 'alternate_sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 200, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
//	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}
?>