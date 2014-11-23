<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="home" class="main span-19">
	<!--<h2>Coming soon</h2>-->
	

	<?php 
	 $pages = get_pages('meta_key=description'); 
	 foreach ($pages as $pagg) {
		echo '<div class="app span-19 last">';
		echo '<div class="prefix-2 span-17 last">';
        $icon = get_bloginfo('template_url').'/images/'.get_post_meta($pagg->ID, 'images', true).'/icon32x32.png';
		echo '<a href="'.get_page_link($pagg->ID).'"><h2><img src="'.$icon.'" />'.$pagg->post_title.'</h2></a>';
		echo '</div>';
		echo '<div class="prefix-2 span-5">';
		$img = get_bloginfo('template_url').'/images/'.get_post_meta($pagg->ID, 'images', true).'/small.png';
		echo '<a href="'.get_page_link($pagg->ID).'"><img src="'.$img.'" class="border" /></a>';
		echo '</div>';
		echo '<div class="span-10 last">';
		echo get_post_meta($pagg->ID, 'description', true).'<br />';
		echo '<span><a href="'.get_page_link($pagg->ID).'">Learn more...</a></span>';
		echo '</div>';
		echo '<div class="cat span-10 last">';
		echo '<a href="'.get_post_meta($pagg->ID, "catalog", true).'"><img src="'.get_bloginfo('template_url').'/style/img/appcatalog.png" /></a>';
		echo '</div>';
		echo '<div class="divider prefix-7 span-12 last">';
		echo '<img src="'.get_bloginfo('template_url').'/style/img/divider.png" />';
		echo '</div>';
		echo '</div>';
	 }
	?>

	<div id="more" class="span-19 last">
		<h3>And more webOS apps coming soon...</h3>
	</div>
	<div class="prefix-2 span-15 last">
		<div id="classic" class="span-15 last">
			<div class="span-11">
				<p>Are you looking for <strong>Gamer's Die Roller</strong>, <strong>Programmer's Calculator</strong> and other free software for your <strong>Treo</strong>&trade;, <strong>Centro</strong>&trade; or other Palm OS&reg; device?</p>
			</div>
			<div class="span-4 last">
				<p><a href="<?php echo get_bloginfo('url') ?>/palm-os-software/" class="button gray">Click here</a></p>
			</div>
		</div>
	</div>
</div>

<div id="side" class="span-5 last">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>