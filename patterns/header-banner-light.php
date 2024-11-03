<?php
/**
 * Title: Header with Light Banner
 * Slug: seed/header-banner-light
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with a light hero banner.
 */
?>
<!-- wp:group {"metadata":{"name":"Header with Banner"},"style":{"position":{"type":""},"dimensions":{"minHeight":""},"color":{"gradient":"linear-gradient(164deg,rgb(255,254,254) 1%,rgb(240,246,247) 49%,rgb(234,234,235) 98%)"}},"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(164deg,rgb(255,254,254) 1%,rgb(240,246,247) 49%,rgb(234,234,235) 98%)"><!-- wp:group {"metadata":{"name":"Container"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":true,"className":"is-style-m-80","style":{"color":[]}} /-->
            <!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"className":"is-style-row-reverse","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","orientation":"horizontal"}} -->
        <div class="wp-block-group is-style-row-reverse"><!-- wp:navigation {"icon":"menu","className":"is-style-outline is-style-nav-outline","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
            <!-- wp:search {"label":"Search","showLabel":false,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"is-style-search-no-button"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"metadata":{"name":"Intro"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","wideSize":"600px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal"}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal">Start your site with Seed</h1>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8"}}} -->
        <p class="has-text-align-center" style="line-height:1.8">Seed 4 Free Block Theme is your go-to solution for effortlessly creating a professional website. With the power of WordPress and Site Editor, you can quickly build and customize your site without any coding skills.</p>
        <!-- /wp:paragraph -->
        <!-- wp:buttons {"className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons is-style-default" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
            <div class="wp-block-button is-style-fill" style="font-style:normal;font-weight:500"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)" target="_blank" rel="noreferrer noopener nofollow">Download Seed 4</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"metadata":{"name":"Banner"},"align":"wide","layout":{"type":"constrained","contentSize":"960px","wideSize":"960px"}} -->
    <div class="wp-block-group alignwide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px"}},"color":{"duotone":["#00234e","#ffffff"]}}} -->
        <figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/browser.webp" alt="" style="border-top-left-radius:12px;border-top-right-radius:12px" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->