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
			<div id="subpage_center2">
				<h3>Recent posts from <?php the_title (); ?> </h3>
				<?php if(is_single('143')) { //C3 ACTS
				query_posts('showposts=3&cat=22');
				} elseif(is_single('144')) { //C3 Grounds
				query_posts('showposts=3&cat=21');
				} elseif(is_single('145')) { //C3 Kids
				query_posts('showposts=3&cat=9');
				} elseif(is_single('148')) { //C3 Studio
				query_posts('showposts=3&cat=23');
				} elseif(is_single('146')) { //Security
				query_posts('showposts=3&cat=24');
				} elseif(is_single('149')) { //Sound
				query_posts('showposts=3&cat=17');
				} elseif(is_single('151')) { //Greeters
				query_posts('showposts=3&cat=31');
				} elseif(is_single('152')) { //Video
				query_posts('showposts=3&cat=24');
				} elseif(is_single('154')) { //Welcome Center
				query_posts('showposts=3&cat=27');
				} elseif(is_single('155')) { //Worship
				query_posts('showposts=3&cat=18');
				} elseif(is_single('311')) { //Sparkle
				query_posts('showposts=3&cat=32');
				} elseif(is_single('313')) { //Facilities
				query_posts('showposts=3&cat=19');
				} elseif(is_single('147')) { //C3 Youth
				query_posts('showposts=3&cat=33');
				} elseif(is_single('392')) { //C3 in the Garden
				query_posts('showposts=3&cat=34');
				}  
				?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>					
						<li>
						   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
						   <em class="recent_meta">by <?php the_author_meta ('user_firstname') ?> <?php the_author_meta ('user_lastname') ?> on <?php the_time ('m/d/Y \a\t g:ia') ?></em>
						</li>
					
					<?php endwhile; wp_reset_query();?>
					
				<p class="sidebar_readmore"><a  href="<?php echo home_url(); ?>/department-blogs/" alt="Read More" title="Department Blogs">Read More...</a></p>	
			</div>
					
			<?php get_sidebar(); ?>

			<div id="sidebarshadow"></div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
<?php endwhile; wp_reset_query();?>
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>