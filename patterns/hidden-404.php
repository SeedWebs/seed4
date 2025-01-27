<?php
/**
 * Title: 404
 * Slug: seed4/hidden-404
 * Inserter: no
 */

?>
<!-- wp:group {"metadata":{"name":"Title"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"dark-base","textColor":"dark-contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-dark-contrast-color has-dark-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="wp-block-heading has-text-align-center">
        <?php echo esc_html_x('Page not found', '404 error message', 'seed4'); ?>
    </h1>
    <!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:paragraph -->
    <p><?php echo esc_html_x('The page you are looking for doesn\'t exist, or it has been moved. Please try searching using the form below.', '404 error message', 'seed4'); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
</div>
<!-- /wp:group -->