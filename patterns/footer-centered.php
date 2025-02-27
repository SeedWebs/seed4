<?php
/**
 * Title: Centered Footer
 * Slug: seed/footer-centered
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with centered logo.
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-alt"},":hover":{"color":{"text":"var:preset|color|contrast"}}}},"spacing":{"padding":{"top":"var:preset|spacing|2-4","bottom":"var:preset|spacing|2-4"}},"color":{"background":"#ececef"}},"textColor":"contrast-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-contrast-alt-color has-text-color has-background has-link-color" style="background-color:#ececef;padding-top:var(--wp--preset--spacing--2-4);padding-bottom:var(--wp--preset--spacing--2-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide has-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"seed/copyright"}}},"fontSize":"sm"} -->
        <p class="has-sm-font-size">© (YEAR)</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"sm"} -->
        <p class="has-sm-font-size" style="margin-top:0;margin-bottom:0">All rights reserved.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->