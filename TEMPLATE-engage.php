<?php 

/**
 * Template Name: Engage
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
				
				<?php if (is_page( 36 )) {
					query_posts('post_type=projects&orderby=title&order=ASC&posts_per_page=-1'); while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php
							// Must be inside a loop.
							;
							if ( has_post_thumbnail() ) {
								echo '<div class="dept_button">';
								the_post_thumbnail();
								echo '</div>';
							}
						
							else {
								echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/dept-button-placeholder.jpg" height="100px" width="200px" class="dept_button" />';
							}
							?>
						</a>
					<?php endwhile; wp_reset_query(); ?>
					<div class="clearboth"></div>

				<? } elseif (is_page ( 38 )) {?>
				<?php query_posts('post_type=departments&orderby=title&order=ASC&posts_per_page=-1'); while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php
							// Must be inside a loop.
							;
							if ( has_post_thumbnail() ) {
								echo '<div class="dept_button">';
								the_post_thumbnail();
								echo '</div>';
							}
						
							else {
								echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/dept-button-placeholder.jpg" height="100px" width="200px" class="dept_button" />';
							}
							?>
						</a>
					<?php endwhile; wp_reset_query(); ?>
					<div class="clearboth"></div>
				<? } ?>
				
				<div class="clearboth"></div>
			</div>
<?php endwhile; ?>
			
		</div><!--end subpage_content!-->
	
		<div id="subpage_sidebar">
			<div id="subnav">
				<?php wp_nav_menu( array('menu' => 'Engage' )); ?>
			</div>
			
			<div id="subpage_center2">
				<h3>Department Posts</h3>
				<?php query_posts('showposts=3&cat=-8'); ?>
					<?php while (have_posts()) : the_post(); ?>
					
					<li>
					   <a class="sidebar_article_title" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
					   <em class="recent_meta">by <?php the_author_meta ('user_firstname') ?> <?php the_author_meta ('user_lastname') ?> on <?php the_time ('m/d/Y \a\t g:ia') ?></em>
					</li>
				<?php endwhile;?>
				<p class="sidebar_readmore"><a  href="<?php echo home_url(); ?>/department-blogs/" alt="Read More" title="Department Blogs">Read More...</a></p>
			</div>
			
			<?php get_sidebar(); ?>
			
			<div id="sidebarshadow"></div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>