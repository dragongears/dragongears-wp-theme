<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('|', true, 'right');
			echo bloginfo('name');
			}
			?>
		</title>

	  <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	    <?php }?>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/css/ie.css" media="screen" />
<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/css/style.css" media="screen" />

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/css/ie6.css" media="screen" />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/style/js/DD_belatedPNG_0.0.8a-min.js"></script>
		<script>
			DD_belatedPNG.fix('.png_fix, img, li');
		</script>
<![endif]-->


		<?php wp_head(); ?>

	</head>

	<body>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-16768302-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
	<div class="container showgrid">
    <div id="head" class="span-24 last">
			<div id="breadcrumbs" class="span-24 last">
				<?php wp_page_menu('show_home=1&exclude=4,668&depth=1&menu_class=span-24 last'); ?>
<!--					--><?php //wp_list_pages('title_li=&exclude=20&depth=1'); ?>
			</div>
			<div id="banner" class="span-18">
				<h1>
					<a class="png_fix" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
					<img src="<?php echo get_bloginfo('template_url') ?>/style/img/gears_anim_48_faster.gif" alt="" />
				</h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
			<div id="hdrsearch" class="span-6 last">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
		</div>
    <div id="content" class="span-24 last">

