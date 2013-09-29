<?php 

/**
 * Template Name: Leadership Blog
*/

get_header(); ?>

<?php if ( have_posts() ): ?>
	<div id="subpage" class="wrap">
		<div id="subpage_content">
			<div id="subpage_header">
				<div class="title_image">
					<img src="<?php echo get_field('subpages_banner_image'); ?>" alt="<?php the_title (); ?>" title="<?php the_title (); ?>">
					<h1 class="page_title"><?php the_title (); ?></h1>
				</div><!--end title_image!-->
			</div><!--end subpage_header!-->
			
			<div class="the_content">
				<?php query_posts('posts_per_page=8&cat=8'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article>
							<em class="archive_meta">by <?php the_author_meta ('user_firstname') ?> <?php the_author_meta ('user_lastname') ?> on <?php the_time ('M j, Y') ?> </em>
						   <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					</article>
					<?php endwhile; wp_reset_query(); ?>
					<?php else: ?>
					<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
					<?php endif; ?>
					
				<div class="clearboth"></div>
			</div>
			
		</div><!--end subpage_content!-->
		<div id="subpage_sidebar">
			<div id="subpage_center">
				<h3>Search</h3>
				<?php echo do_shortcode('[wpbsearch]'); ?>
			
			</div>
			<div id="subpage_center2">
				<?php
					if ( is_active_sidebar( 'primary-widget-area' ) ) :
					     dynamic_sidebar( 'primary-widget-area' );
					endif;
				?>
			</div>			
			<?php get_sidebar(); ?>

			<div id="sidebarshadow"></div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>