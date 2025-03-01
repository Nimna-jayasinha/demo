<?php

/**
 * Title: Brands Showcase Section
 * Slug: vinowine/brands-showcase
 * Categories: vinowine
 */
$vinowine_url = trailingslashit(get_template_directory_uri());
$vinowine_images = array(
    $vinowine_url . 'resource/images/brand_1.png',
    $vinowine_url . 'resource/images/brand_2.png',
    $vinowine_url . 'resource/images/brand_3.png',
    $vinowine_url . 'resource/images/brand_4.png',
    $vinowine_url . 'resource/images/brand_5.png',
    $vinowine_url . 'resource/images/brand_6.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","left":"40px","right":"40px","bottom":"34px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","className":"vinowine-brand-showcase vinowine-zoom-in","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group vinowine-brand-showcase vinowine-zoom-in has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:40px;padding-bottom:34px;padding-left:40px"><!-- wp:gallery {"columns":1,"imageCrop":false,"linkTo":"none","sizeSlug":"full","style":{"spacing":{"blockGap":{"left":"60px"}}},"className":"is-style-enable-grayscale-mode-on-image vinowine-brands normal"} -->
    <figure class="wp-block-gallery has-nested-images columns-1 is-style-enable-grayscale-mode-on-image vinowine-brands normal"><!-- wp:image {"id":3242,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($vinowine_images[0]) ?>" alt="" class="wp-image-3242" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":3247,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($vinowine_images[1]) ?>" alt="" class="wp-image-3247" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":3245,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($vinowine_images[2]) ?>" alt="" class="wp-image-3245" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":3244,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($vinowine_images[3]) ?>" alt="" class="wp-image-3244" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":3243,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($vinowine_images[4]) ?>" alt="" class="wp-image-3243" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":3634,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($vinowine_images[5]) ?>" alt="" class="wp-image-3634" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->