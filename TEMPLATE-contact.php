<?php 

/**
 * Template Name: Contact
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="subpage" class="wrap">
		<div id="subpage_content">
			<div id="subpage_header">
				<div class="title_image">
					<img src="<?php echo get_field('subpages_banner_image'); ?>" alt="<?php the_title (); ?>" title="<?php the_title (); ?>">
					<h1 class="page_title"><?php the_title (); ?></h1>
				</div><!--end title_image!-->
			</div><!--end subpage_header!-->
			<div class="the_content">
				<?php the_content(); ?>
				
				<div class="clearboth"></div>
			</div>
			
		</div><!--end subpage_content!-->
<?php endwhile; ?>
	
		<div id="subpage_sidebar">
			<div id="subnav">
				<?php wp_nav_menu( array('menu' => 'Contact' )); ?>
			</div>
			
			<?php get_sidebar('recentposts'); ?>
				
			<?php get_sidebar(); ?>
			
			<div id="sidebarshadow"></div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>