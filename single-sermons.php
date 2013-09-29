<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="subpage" class="wrap">
		<div id="subpage_content">
			<div id="subpage_header">
				<div class="title_image">
					<img src="<?php bloginfo('template_directory'); ?>/images/header-sermons.jpg" alt="<?php the_title (); ?>" title="<?php the_title (); ?>">
				</div><!--end title_image!-->
			</div><!--end subpage_header!-->
			<div class="the_content">
				<h1 class="sermon_title"><?php the_title (); ?><?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></h1>
				<iframe class="latest_sermon_vid" src="http://player.vimeo.com/video/<?php echo get_field('sermon_info_vimeo_id'); ?>?portrait=0&amp;color=477384&amp;autoplay=0" width="690" height="388" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				
				<?php the_content(); ?>
				
				<a href="/sermons/">&raquo; Back to sermon archives</a>
				
				<div class="clearboth"></div>
			</div>
			
		</div><!--end subpage_content!-->
	
		<div id="subpage_sidebar">
			<?php get_sidebar('default'); ?>
			
			<?php get_sidebar(); ?>

			<div id="sidebarshadow"></div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
<?php endwhile; ?>
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>