<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="subpage" class="wrap">
		<div id="subpage_content">
			<div id="subpage_header">
				<div class="title_image">
					<?php if(in_category( '8' )) { //C3 LEADERSHIP
						echo '<img src="' . home_url() . '/wp-content/uploads/2013/03/header-leadership.jpg">';
						} else { //DEPARTMENTS
						echo '<img src="' . home_url() . '/wp-content/uploads/2013/03/header-dept-blog.jpg">';
						}  
						?> 
				</div><!--end title_image!-->
			</div><!--end subpage_header!-->
			<div class="the_content">
				
				<h3>More from <br />
					<?php the_author_meta ('user_firstname') ?> <?php the_author_meta ('user_lastname') ?>
				</h3>
				<?php $author_id=$post->post_author; ?>
				<?php
					$args=array(
					   'showposts' => 3,
					   'author' => $author_id,
					   'caller_get_posts'=>1
					);
					$posts=get_posts($args);
					if ($posts) {
					  $curuser = get_userdata($author_id);
					  $author_post_url=get_author_posts_url($curuser->ID, $curuser->nicename);
					  foreach($posts as $post) {
					    setup_postdata($post); ?>
					<li>
					   <a class="sidebar_article_title" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
					   <em class="recent_meta">
					   <?php the_time ('M j, Y \a\t g:ia') ?>
					   </em>
					</li>
										
					<?php
					  } // foreach($posts
					} // if ($posts
					?>
				<?php endwhile; wp_reset_query();?>

				
				
				
				
			</div>
			
		</div><!--end subpage_content!-->


		<div id="subpage_sidebar">
			<div id="subpage_center">
				<h3>Search</h3>
				<?php echo do_shortcode('[wpbsearch]'); ?>
			
			</div>
			<div id="subpage_center2">
				
			</div>
			
			<?php get_sidebar(); ?>
			
			<div id="sidebarshadow"></div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>