<?php
/**
 * Title: Footer
 * Slug: seed/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with multiple columns.
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|line"},":hover":{"color":{"text":"var:preset|color|base-alt"}}}},"spacing":{"padding":{"top":"var:preset|spacing|6-12","bottom":"var:preset|spacing|6-12"}}},"backgroundColor":"base-dark","textColor":"line","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-line-color has-base-dark-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--6-12);padding-bottom:var(--wp--preset--spacing--6-12)"><!-- wp:group {"metadata":{"name":"Container"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"Brand"},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}},"fontSize":"medium"} -->
            <h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:0">SEED 4.0</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">64/1 Wiang Tai, Pai, <br>Maehongson, Thailand 58130</p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="min-height:0px;margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"seed/copyright"}}},"fontSize":"small"} -->
                <p class="has-small-font-size">©(YEAR)</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
                <p class="has-small-font-size" style="margin-top:0;margin-bottom:0">All rights reserved.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}},"fontSize":"medium"} -->
            <h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:0">Header</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">Standard<br>Centered<br>Hero Banner<br>Icons<br>Top Bar</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}},"fontSize":"medium"} -->
            <h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:0">Footer</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">Dark Background<br>Light Background<br>1 Column<br>2 Columns<br>3 Columns</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}},"fontSize":"medium"} -->
            <h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:0">Content</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">Intro<br>About<br>Team<br>Testimonial<br>Query Loop</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}},"fontSize":"medium"} -->
            <h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:0">Connect with us</h2>
            <!-- /wp:heading -->
            <!-- wp:social-links {"iconColor":"base","iconColorValue":"#f5f5f7","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}}} -->
            <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook","rel":""} /-->
                <!-- wp:social-link {"url":"instagram.com/","service":"instagram"} /-->
                <!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
                <!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube","rel":""} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->