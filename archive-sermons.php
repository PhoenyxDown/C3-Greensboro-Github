<?php get_header(); ?>

	<div id="subpage" class="wrap">
		<div id="subpage_content">
			<div id="subpage_header">
				<div class="title_image">
					<img src="<?php bloginfo('template_directory'); ?>/images/header-sermons.jpg" alt="<?php the_title (); ?>" title="<?php the_title (); ?>">
					<h1 class="page_title">Sermons</h1>
				</div><!--end title_image!-->
			</div><!--end subpage_header!-->

			<div class="the_content">
			
				<?php query_posts('post_type=sermons&posts_per_page=1'); while (have_posts()) : the_post(); ?>
					<div class="latest_sermon">
						
						<iframe class="latest_sermon_vid" src="http://player.vimeo.com/video/<?php echo get_field('sermon_info_vimeo_id'); ?>?portrait=0&amp;color=477384&amp;autoplay=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<h2>Latest Sermon</h2>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><em><?php echo get_field('sermon_info_sermon_date'); ?></em></p>
						<h4>Speaker</h4>
						<p class="latest_speaker"><?php echo get_field('sermon_info_speaker_name'); ?></p>
						<?php if (get_field('sermon_info_notes')) {
						echo '<p class="sermon_media"><a href="' . get_field('sermon_info_notes') . '">Notes</a></p>';
						} ?>
						<p class="sermon_media"><a href="<?php the_permalink(); ?>">Watch</a> 
							<?php if (get_field('sermon_info_sermon_audio')) {
								echo ' | <a href="http://c3greensboro.com/audio/' . get_field('sermon_info_sermon_audio') . '">Listen</a>';
							} ?>
							| <a href="https://itunes.apple.com/us/podcast/c3-greensboro/id633614886?mt=2">Podcast</a>
						</p>
					</div> <!--end latest_sermon!-->
				<?php endwhile;?>
				<?php wp_reset_query(); ?>
				<div class="clearboth"></div>
				<div id="sermon_archives">
					<h2>Sermon Archives</h2>
					<table id="sermons">
						<colgroup>
							<col id="sermon_date" />
							<col id="sermon_speaker" />
							<col id="sermon_title" />
							<col id="sermon_media" />
						</colgroup>
						<!--<thead>
							<tr>
								<th scope="col">Date</th>
								<th scope="col">Title</th>
								<th scope="col">Speaker</th>
								<th scope="col">Media</th>
							</tr>
						</thead>!-->
						<tbody>
							<?php query_posts('post_type=sermons&posts_per_page=52'); while (have_posts()) : the_post(); ?>
								<tr>
									<td class="sermon_date"><?php echo get_field('sermon_info_sermon_date'); ?></td>
									<td class="sermon_speaker"><?php echo get_field('sermon_info_speaker_name'); ?></td>
									<td class="sermon_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
									<td class="sermon_media"><a href="<?php the_permalink(); ?>">Watch</a>
									<?php if (get_field('sermon_info_sermon_audio')) {
									echo ' | <a href="http://c3greensboro.com/audio/' . get_field('sermon_info_sermon_audio') . '">Listen</a>';
									} ?>
									</td>
								</tr>
							<?php endwhile;?>
							<?php wp_reset_query(); ?>
						</tbody>
					</table>
				</div> <!--end sermon_archives!-->
			</div>
			<div class="clearboth"></div>
			
		</div><!--end subpage_content!-->
	
		<div id="subpage_sidebar">
			<?php get_sidebar('default'); ?>
			
			<?php get_sidebar(); ?>

			<div id="sidebarshadow"></div>
		</div><!--end subpage_sidebar!-->
	</div><!--end subpage!-->
	
	<div id="mainblockshadow" class="wrap"></div>


<?php get_footer(); ?>