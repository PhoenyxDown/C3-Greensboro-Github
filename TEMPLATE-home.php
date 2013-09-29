<?php
/**
 * Template Name: Home
 */

get_header(); ?>

	<div id="mainblock" class="wrap">
		<?php echo do_shortcode('[ccslider id="1"]'); ?>
	</div>
	<div id="miniblocks" class="wrap">
		<li class="miniblockleft">
			<a href="<?php echo get_field('home_mini_blocks_block_1_url'); ?>">
				<img src="<?php echo get_field('home_mini_blocks_block_1'); ?>">
			</a>
		</li>
		
		<li class="miniblockcenter">
			<a href="<?php echo get_field('home_mini_blocks_block_2_url'); ?>">
				<img src="<?php echo get_field('home_mini_blocks_block_2'); ?>">
			</a>
		</li>
		
		<li class="miniblockright">
			<a href="<?php echo get_field('home_mini_blocks_block_3_url'); ?>">
				<img src="<?php echo get_field('home_mini_blocks_block_3'); ?>">
			</a>
		</li>
	</div>
	
	<div id="mainblockshadow" class="wrap"></div>

	<div id="miniblockshadow" class="wrap"></div>

<?php get_footer(); ?>