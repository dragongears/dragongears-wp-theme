<?php get_header(); ?>

<div id="single" class="main span-19">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="prefix-1 span-17 postfix-1 post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>

			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

			<p>
				This entry was posted
				<?php /* This is commented, because it requires a little adjusting sometimes.
					You'll need to download this plugin, and follow the instructions:
					http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
					/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
				on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
				and is filed under <?php the_category(', ') ?>.
				You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Both Comments and Pings are open ?>
					You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

				<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Only Pings are Open ?>
					Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Comments are open, Pings are not ?>
					You can skip to the end and leave a response. Pinging is currently not allowed.

				<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Neither Comments, nor Pings are open ?>
					Both comments and pings are currently closed.

				<?php } edit_post_link('Edit this entry','','.'); ?>
			</p>
			</div>
		</div>

		<div>
			<?php comments_template(); ?>
		</div>

		<div class="prefix-1 span-17 postfix-1">
			<div class="alignleft"><?php previous_post_link('%link', '&laquo; Previous post', TRUE) ?></div>
			<div class="alignright"><?php next_post_link('%link', 'Next post &raquo;', TRUE) ?></div>
		</div>
	<?php endwhile; else: ?>

		<h2 id="sorry">Sorry, no posts matched your criteria.</h2>

<?php endif; ?>
</div>

<div id="side" class="span-5 last">
	<?php get_sidebar('alternate'); ?>
</div>

<?php get_footer(); ?>