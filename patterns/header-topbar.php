<?php
/**
 * Title: Header with Topbar
 * Slug: seed/header-topbar
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with topbar.
 */
?>
<!-- wp:group {"metadata":{"name":"Header with Topbar"},"style":{"shadow":"var:preset|shadow|shadow","position":{"type":""},"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"base-alt","layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group has-base-alt-background-color has-background" style="padding-top:0;padding-bottom:0;box-shadow:var(--wp--preset--shadow--shadow)"><!-- wp:group {"metadata":{"name":"Topbar"},"align":"full","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-contrast"},":hover":{"color":{"text":"var:preset|color|dark-contrast-alt"}}}}},"backgroundColor":"dark-base","textColor":"dark-contrast","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull is-style-default has-dark-contrast-color has-dark-base-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group is-style-default"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>Contact Us</strong></p>
                <!-- /wp:paragraph -->
                <!-- wp:group {"metadata":{"name":"Phone No. - Hide on Mobile"},"className":"is-style-desktop-only","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-desktop-only"><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">+66 (0) 2345-6789</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- wp:social-links {"iconColor":"dark-contrast","iconColorValue":"#EEEEEF","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
                <!-- wp:social-link {"url":"#","service":"x"} /-->
                <!-- wp:social-link {"url":"#","service":"youtube"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"metadata":{"name":"Container"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignfull"><!-- wp:group {"metadata":{"name":"Brand"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"},"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:site-logo {"width":32,"shouldSyncIcon":true,"className":"is-style-m-80"} /-->
                <!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"fontSize":"large"} /-->
                <!-- wp:group {"metadata":{"name":"Tag Line (Desktop)"},"className":"is-style-desktop-only","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-desktop-only" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:site-tagline {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-alt"}}},"spacing":{"padding":{"top":"5px"}}},"textColor":"contrast-alt","fontSize":"small"} /--></div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- wp:navigation {"icon":"menu","className":"is-style-nav-outline","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->