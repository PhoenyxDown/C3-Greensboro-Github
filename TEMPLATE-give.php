<?php 
/**
 * Template Name: Give
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
				<div id="giving_form">
					<h3>Give Online</h3>
					<form name="giving" method="post" action="https://payments.verisign.com/payflowlink" onsubmit="return validateForm();">
				          <div class="spacer">
				          <input type="hidden" name="LOGIN" value="rockthetriad">
				          <input type="hidden" name="PARTNER" value="verisign">
				          <input type="hidden" name="TYPE" value="S"> 
				          <label for="AMOUNT">Amount</label>
				          <input type="text" name="AMOUNT" id="AMOUNT" class="text" /><br />
				            <input type="radio" name="COMMENT1" id="COMMENT1" class="radio" value="Tithe/Offering" checked="checked" />
				            <label for="COMMENT1">Tithe or Offering </label><br />
				            <input type="radio" name="COMMENT1" id="COMMENT2" class="radio" value="Rise_and_Build" />
				            <label for="COMMENT2"> Rise and Build </label><br />
				            <input type="radio" name="COMMENT1" id="COMMENT3" class="radio" value="Other" />
				            <label for="COMMENT3"> Other</label>
				            <input type="text" name="DESCRIPTION" id="DESCRIPTION" class="text" />
				          </div>
				          <br />
				        <p><input class="begin" type="submit" value="Begin" />
				           <a href="" class="privacy">Privacy & Refund Policy</a></p>
        			 </form> 
				</div>
				<?php the_content(); ?>
				
				<div class="clearboth"></div>
			</div>
			
		</div><!--end subpage_content!-->
		<div id="subpage_sidebar">
			<?php get_sidebar('default');?>
			
			<?php get_sidebar(); ?>

			<div id="sidebarshadow"></div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
<?php endwhile; ?>
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>