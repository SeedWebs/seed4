<?php
/**
 * Title: Header
 * Slug: seed/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with left logo and right menu.
 */
?>
<!-- wp:group {"metadata":{"name":"header"},"style":{"shadow":"var:preset|shadow|shadow","position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"base-alt","layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group has-base-alt-background-color has-background" style="padding-top:0;padding-bottom:0;box-shadow:var(--wp--preset--shadow--shadow)"><!-- wp:group {"metadata":{"name":"container"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignfull"><!-- wp:group {"metadata":{"name":"Brand"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"},"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:site-logo {"width":32,"shouldSyncIcon":true,"className":"is-style-m-80"} /-->
                <!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|base-dark"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"fontSize":"large"} /-->
                <!-- wp:group {"metadata":{"name":"Tag Line (Desktop)"},"className":"is-style-desktop-only","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-desktop-only" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:site-tagline {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-alt"}}},"spacing":{"padding":{"top":"5px"}}},"textColor":"contrast-alt","fontSize":"small"} /--></div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- wp:navigation {"icon":"menu","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->