<?php

/**
 * Title: Utility Header
 * Description: The utility header puts a standard header at the very top of your site.
 * Slug: bear-flag/utility-header
 * Categories: banner, header
 * Keywords: utility, header, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:paragraph -->
    <p>Unofficial website of the State of ...</p>
    <!-- /wp:paragraph -->

    <!-- wp:navigation {"overlayMenu":"never"} -->
    <!-- wp:navigation-link {"label":"<?php esc_html_e('About us', 'bear-flag'); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e('Contacts', 'bear-flag'); ?>","url":"#"} /-->
    <!-- /wp:navigation -->
</div>
<!-- /wp:group -->