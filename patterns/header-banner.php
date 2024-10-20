<?php
/**
 * Title: header-banner
 * Slug: seed/header-banner
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"style":{"position":{"type":""},"elements":{"link":{"color":{"text":"var:preset|color|base-alt"}}},"dimensions":{"minHeight":""},"color":{"gradient":"linear-gradient(135deg,rgb(2,52,86) 2%,rgb(0,60,120) 99%)"}},"textColor":"base-alt","layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group has-base-alt-color has-text-color has-background has-link-color" style="background:linear-gradient(135deg,rgb(2,52,86) 2%,rgb(0,60,120) 99%)"><!-- wp:group {"metadata":{"name":"Container"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":true,"className":"is-style-m-80","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} /-->
            <!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:navigation {"className":"is-style-outline"} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"metadata":{"name":"Intro"},"layout":{"type":"constrained","wideSize":"600px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:500">Start your site with Seed</h1>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">Seed 4.0 Block Theme is your go-to solution for effortlessly creating a professional website. With the power of WordPress and Site Editor, you can quickly build and customize your site without any coding skills.</p>
        <!-- /wp:paragraph -->
        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"gradient":"linear-gradient(180deg,rgb(49,167,236) 0%,rgb(29,147,216) 100%)"}}} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background wp-element-button" style="background:linear-gradient(180deg,rgb(49,167,236) 0%,rgb(29,147,216) 100%);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">Get start</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"metadata":{"name":"Banner"},"align":"wide","layout":{"type":"constrained","contentSize":"","wideSize":"960px"}} -->
    <div class="wp-block-group alignwide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide"} -->
        <figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/screen.webp" alt="" class="" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->