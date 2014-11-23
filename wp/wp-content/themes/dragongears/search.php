<?php get_header(); ?>

<div id="search" class="main span-19">
	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<div class="prefix-1 span-18 last">

		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_time('l, F jS, Y') ?></p>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<ul>
			<li><?php next_post_link('&laquo; Older Entries') ?></li>
			<li><?php previous_post_link('Newer Entries &raquo;') ?></li>
		</ul>
	
		</div>

	<?php else : ?>

		<h2>No posts found. Try a different search?</h2>
		<div class="prefix-1 span-18 last">

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

		</div>

	<?php endif; ?>
</div>

<div id="side" class="span-5 last">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>