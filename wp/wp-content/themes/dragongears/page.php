<?php get_header(); ?>

<div id="pages" class="main span-19">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="prefix-1 span-17 suffix-1 post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<div>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
	</div>
	<?php endwhile; endif; ?>
	<div class="prefix-1 span-17 suffix-1">
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
</div>
<div id="side" class="span-5 last">
	<?php get_sidebar('alternate'); ?>
</div>

<?php get_footer(); ?>