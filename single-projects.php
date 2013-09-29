<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="subpage" class="wrap">
		<div id="subpage_content">
			<div id="subpage_header">
				<div class="title_image">
					<img src="<?php echo get_field('dept_banner_image'); ?>" alt="<?php the_title (); ?>" title="<?php the_title (); ?>">
					<h1 class="page_title"><?php the_title (); ?></h1>
				</div><!--end title_image!-->
			</div><!--end subpage_header!-->
			<div class="the_content">
				<?php the_content(); ?>
				<div class="related">
					<?php get_sidebar('related'); ?>
				</div>
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