<?php
/**
 * Sidebar Ads
 */
?>

			<div id="sidebar_ads">
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
			</div>