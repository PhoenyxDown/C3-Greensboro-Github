<?php
/**
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script type="text/javascript">
	var mobile_domain ="m.c3greensboro.com";
	// Set to false to not redirect on iPad.
	var ipad = false;
	// Set to false to not redirect on other tablets (Android , BlackBerry, WebOS tablets).
	var other_tablets = false;
	document.write(unescape("%3Cscript src='"+location.protocol+"//s3.amazonaws.com/me.static/js/me.redirect.min.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="icon" href="<?php echo home_url(); ?>/favicon.ico">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="image_src" href="<?php echo get_template_directory_uri(); ?>/images/c3logo160.jpg" />
<meta name="viewport" content="initial-scale=.85,minimum-scale=.85,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
<script src="<?php //bloginfo('template_directory'); ?>/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/suckerfish_dropdown.js" type="text/javascript"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38871710-1']);
  _gaq.push(['_setDomainName', 'c3greensboro.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>
		<div id="social_top" class="wrap">
			<div class="icons_bg">
				<a href="http://www.facebook.com/C3Greensboro"><img src="<?php bloginfo('template_directory'); ?>/images/social-fb.png"></a>
				<a href="https://twitter.com/#!/C3greensboro"><img src="<?php bloginfo('template_directory'); ?>/images/social-twit.png"></a>
				<a href="http://vimeo.com/c3greensboro"><img src="<?php bloginfo('template_directory'); ?>/images/social-vimeo.png"></a>
				<a href="http://www.linkedin.com/company/c3-greensboro"><img src="<?php bloginfo('template_directory'); ?>/images/social-linked.png"></a>
				<a href="<?php echo home_url(); ?>/rss"><img src="<?php bloginfo('template_directory'); ?>/images/social-rss.png"></a>

			</div><!--/icons_bg!-->
			
			<a href="https://c3greensboro.ccbchurch.com/login.php" style="float:right; margin-right: -10px;"><img src="<?php bloginfo('template_directory'); ?>/images/social-c3life.png"></a>
			
		</div>
		
		<div id="headerbanner" class="wrap">	
		
			<a id="headerlogo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
				<?php bloginfo('name'); ?>
			</a>
			
			
			
			<div id="menu">
				<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>
			</div><!--headernav!-->
		</div><!--headerbanner!-->
		
		
		
		<div id="content" class="">