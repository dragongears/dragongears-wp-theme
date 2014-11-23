<?php get_header(); ?>

<div id="index" class="main span-19">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="prefix-1 span-17 suffix-1 last post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entryDate">
				   <span class="postMonth"><?php the_time('M') ?></span>
				   <span class="postDay"><?php the_time('d') ?></span>
				   <span class="postYear"><?php the_time('Y') ?></span>
				</div>

				<?php the_content('Read the rest of this entry &raquo;'); ?>

				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>
		
		<div class="prefix-1 span-17 suffix-1 last">
			<div class="alignleft"><?php previous_post_link('%link', '&laquo; Previous post', TRUE) ?></div>
			<div class="alignright"><?php next_post_link('%link', 'Next post &raquo;', TRUE) ?></div>
		</div>
		
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
</div>

<div id="side" class="span-5 last">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>