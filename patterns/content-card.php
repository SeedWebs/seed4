<?php
/**
 * Title: Content Card
 * Slug: seed/content-card
 * Categories: Posts
 * Description: A card with a featured image, category, title, author, and date.
 */
?>
<!-- wp:group {"className":"is-style-overflow-hidden","style":{"shadow":"var:preset|shadow|shadow","border":{"radius":"5px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-alt"} -->
<div class="wp-block-group is-style-overflow-hidden has-base-alt-background-color has-background" style="border-radius:5px;min-height:100%;box-shadow:var(--wp--preset--shadow--shadow)"><!-- wp:post-featured-image {"isLink":true,"className":"is-style-ratio-1200-630"} /-->
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem","left":"1rem","top":"1rem","bottom":"1rem"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:post-terms {"term":"category","className":"is-style-term-outline","style":{"typography":{"fontSize":"0.75rem"}}} /-->
        <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|base-dark"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"fontSize":"large"} /-->
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group has-small-font-size"><!-- wp:post-author {"avatarSize":24,"showAvatar":false,"showBio":false} /-->
            <!-- wp:post-date {"format":"human-diff","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-alt"}}}},"textColor":"contrast-alt"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->