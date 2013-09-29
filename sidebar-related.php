<p>Related Links: 
	<?php if (get_field('subpages_related_link_1')) {
		echo '<a href="' . get_field('subpages_related_link_1') . '">' . get_field('subpages_related_link_1_title') . '</a>';
	} ?>
	<?php if (get_field('subpages_related_link_2')) {
		echo ' | <a href="' . get_field('subpages_related_link_2') . '">' . get_field('subpages_related_link_2_title') . '</a>';
	} ?>
	<?php if (get_field('subpages_related_link_3')) {
		echo ' | <a href="' . get_field('subpages_related_link_3') . '">' . get_field('subpages_related_link_3_title') . '</a>';
	} ?>
</p>