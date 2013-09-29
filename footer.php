<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 */
?>

	</div><!--content!-->
		<div id="footerbg">
				<div id="footerwrapper">
					<div id="footerwidgets">
				
						<div id="footer-column1">
							<h3>Contact</h3>
							<p>
								300 NC Hwy 68 South <br />
								Greensboro, NC 27409<br />
								<a href="<?php echo home_url(); ?>/contact/">map</a> | <a href="<?php echo home_url(); ?>/contact/">directions</a><br />
								p: 336.881.1400 <br />
								<a href="mailto:info@c3greensboro.com">info@c3greensboro.com</a>
							</p>
						</div>
						
						<div id="footer-column2">
							<h3>Latest Leadership Blogs</h3>
							<ul>
								<?php query_posts('showposts=3&cat=8'); ?>
									<?php while (have_posts()) : the_post(); ?>
									<li>
									   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
									   <em class="recent_meta">by <?php the_author_meta ('user_firstname') ?> <?php the_author_meta ('user_lastname') ?> on <?php the_time ('m/d/Y \a\t g:ia') ?></em>
									</li>
								<?php endwhile;?>
							</ul>
							<p class="sidebar_readmore"><a href="<?php echo home_url() ?>/leadership-blog/">read more...</a></p>
						</div>
						
						<div id="footer-column3">
							<?php
								if ( is_active_sidebar( 'third-footer-widget-area' ) ) :
								     dynamic_sidebar( 'third-footer-widget-area' );
								endif;
							?>
						</div>
					</div>
				</div>
				<div id="footercopyright" class="wrap">	
				<p>&copy;<?php the_time('Y') ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				
					<p class="credit">design by c3 studio</p>
				</p>
				<p class="footerlinks">
					<a href="<?php echo home_url( '/' ) ?>/sitemap.xml">sitemap</a>
					<a href="mailto:info@c3greensboro.com">contact</a>
					<a href="https://c3greensboro.ccbchurch.com/w_form_response.php?form_id=16">issues?</a>
				</p>
				
		</div>
		
		
				

	
		
		
	</div>	

<?php wp_footer(); ?>


</body>
</html>