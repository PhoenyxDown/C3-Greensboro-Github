<?php
/**
 * Sidebar Posts
 */
?>
<div id="subpage_center2">
	<h3>Recent Posts</h3>
	<?php query_posts('showposts=2'); ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<li>
		   <a class="sidebar_article_title" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
		   <em class="recent_meta">by <?php the_author_meta ('user_firstname') ?> <?php the_author_meta ('user_lastname') ?> on <?php the_time ('m/d/Y \a\t g:ia') ?></em>
		</li>
	<?php endwhile;?>
</div>