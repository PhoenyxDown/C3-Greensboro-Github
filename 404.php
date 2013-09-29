<?php get_header(); ?>
	<div id="subpage" class="wrap">
		<div id="subpage_content">
			<div id="subpage_header">
				<div class="title_image">
					<img src="<?php bloginfo('template_directory'); ?>/images/header-404.jpg" alt="<?php the_title (); ?>" title="<?php the_title (); ?>">
					<h1 class="page_title">404 - Page Not Found</h1>
				</div><!--end title_image!-->
			</div><!--end subpage_header!-->
			<div class="the_content">
				<?php the_content(); ?>
				<h2>Ooops!</h2>
				<p>Sorry, the page you're looking for doesn't exist.  Check your URL, and if you're positive it's supposed to be here, notify our <a href="https://c3greensboro.ccbchurch.com/w_form_response.php?form_id=16">web team</a>.</p>
				
				<p><a href="/">Return Home</a></p>
				<div class="related"></div>
				<div class="clearboth"></div>
			</div>
			
		</div><!--end subpage_content!-->
	
		<div id="subpage_sidebar">
			<?php get_sidebar('default'); ?>
		
			<div class="sidebar_ad_holder ad1">
				<div class="sidebar_ad">
					<?php if(function_exists( 'wp_bannerize' ))
						wp_bannerize( 'group=sidebar_top' ); ?>
				</div>
			</div>
			<div class="sidebar_ad_holder ad2">
				<div class="sidebar_ad">
					<?php if(function_exists( 'wp_bannerize' ))
						wp_bannerize( 'group=sidebar_bottom' ); ?>
				</div>
			</div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>