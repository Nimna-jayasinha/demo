<?php

/**
 * Title: 404 Header
 * Slug: vinowine/404-header
 * Categories: vinowine, header
 */
?>

<!-- wp:group {"align":"full","className":"no-margin-top header-media-inner-post","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"overlayColor":"footer-bg"} -->
		<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-footer-bg-background-color has-background-dim-100 has-background-dim"></span>
			<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
				<div class="wp-block-group"><!-- wp:group {"className":"alignwide"} -->
					<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"post-heading"} -->
						<h1 class="wp-block-heading has-text-align-center has-post-heading-font-size"><?php esc_html_e('404 Nothing Found', 'vinowine'); ?></h1>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"className":"has-text-align-center"} -->
						<p class="has-text-align-center"><?php esc_html_e('Oops! That page can\'t be found', 'vinowine'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
