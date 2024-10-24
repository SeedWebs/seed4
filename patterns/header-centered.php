<?php
/**
 * Title: Centered Header
 * Slug: seed/header-centered
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with centered logo.
 */
?>
<!-- wp:group {"metadata":{"name":"header"},"style":{"shadow":"var:preset|shadow|shadow","position":{"type":"sticky","top":"0px"}},"backgroundColor":"base-alt","layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group has-base-alt-background-color has-background" style="box-shadow:var(--wp--preset--shadow--shadow)"><!-- wp:group {"metadata":{"name":"Container"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:image {"lightbox":{"enabled":false},"width":"28px","sizeSlug":"full","linkDestination":"custom","metadata":{"name":"Phone Icon"}} -->
        <figure class="wp-block-image size-full is-resized"><a href="tel:+6612345678" target="_blank" rel=" noreferrer noopener"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ic-phone.webp" alt="Phone" style="width:28px" /></a></figure>
        <!-- /wp:image -->
        <!-- wp:group {"metadata":{"name":"Menu Left"},"className":"is-style-desktop-only","style":{"layout":{"selfStretch":"fixed","flexSize":"300px"},"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
        <div class="wp-block-group is-style-desktop-only"><!-- wp:paragraph -->
            <p>Product</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>Features</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>Pricing</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"metadata":{"name":"Logo"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:image {"lightbox":{"enabled":false},"width":"56px","sizeSlug":"full","linkDestination":"custom","className":"is-style-m-80"} -->
            <figure class="wp-block-image size-full is-resized is-style-m-80"><a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-center.webp" alt="Logo" style="width:56px" /></a></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"metadata":{"name":"Menu Right"},"className":"is-style-desktop-only","style":{"layout":{"selfStretch":"fixed","flexSize":"300px"},"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group is-style-desktop-only"><!-- wp:paragraph -->
            <p>Blog</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>About</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>Contact</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"metadata":{"name":"Mobile Menu"},"className":"is-style-mobile-only","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-mobile-only"><!-- wp:navigation {"overlayMenu":"always","icon":"menu","className":"is-style-outline"} /--></div>
        <!-- /wp:group -->
        <!-- wp:group {"metadata":{"name":"Map Icon (Desktop)"},"className":"is-style-desktop-only","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-desktop-only"><!-- wp:image {"lightbox":{"enabled":false},"width":"28px","sizeSlug":"full","linkDestination":"custom"} -->
            <figure class="wp-block-image size-full is-resized"><a href="#" target="_blank" rel=" noreferrer noopener"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ic-map.webp" alt="Map" style="width:28px" /></a></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->