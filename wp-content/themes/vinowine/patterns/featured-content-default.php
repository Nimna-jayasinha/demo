<?php

/**
 * Title: Featured Content Default
 * Slug: vinowine/featured-content-default
 * Categories: vinowine, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-feature-content-default","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-feature-content-default">
	<!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
	<div class="wp-block-group alignwide wp-block-group-content">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/resource/images/vinowine-featured-1.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size has-text-align-center"><?php esc_html_e('White Wines', 'vinowine'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p class="has-text-align-center"><?php esc_html_e('Light-Bodied Wines', 'vinowine'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/resource/images/vinowine-featured-2.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size has-text-align-center"><?php esc_html_e('Rose Wines', 'vinowine'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p class="has-text-align-center"><?php esc_html_e('Medium-Bodied Wines', 'vinowine'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/resource/images/vinowine-featured-3.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size has-text-align-center"><?php esc_html_e('Red Wines', 'vinowine'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p class="has-text-align-center"><?php esc_html_e('Full-Bodied Wines', 'vinowine'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
