<?php

/**
 * Title: Accordion
 * Description: An accordion pattern using the details block.
 * Slug: bear-flag/accordion
 * Categories: featured
 * Keywords: accordion, details, toggle
 */
?>

<!-- wp:accordion {"iconPosition":"left"} -->
<div role="group" class="wp-block-accordion"><!-- wp:accordion-item -->
    <div class="wp-block-accordion-item"><!-- wp:accordion-heading {"iconPosition":"left"} -->
        <h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span><span class="wp-block-accordion-heading__toggle-title">Add a short, descriptive heading for your topic</span></button></h3>
        <!-- /wp:accordion-heading -->

        <!-- wp:accordion-panel -->
        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
            <p>Once open, the content within the accordion should describe the topic in more detail. It should not repeat the heading.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>This part of the accordion is a great place to link to other resources. Remember, important information and calls to action should live outside of the accordion.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:accordion-panel -->
    </div>
    <!-- /wp:accordion-item -->

    <!-- wp:accordion-item -->
    <div class="wp-block-accordion-item"><!-- wp:accordion-heading {"iconPosition":"left"} -->
        <h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span><span class="wp-block-accordion-heading__toggle-title">If your heading must be longer, the accordion will wrap to multiple lines within the container like this</span></button></h3>
        <!-- /wp:accordion-heading -->

        <!-- wp:accordion-panel -->
        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
            <p>Once open, the content within the accordion should describe the topic in more detail. It should not repeat the heading.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>This part of the accordion is a great place to link to other resources. Remember, important information and calls to action should live outside of the accordion.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:accordion-panel -->
    </div>
    <!-- /wp:accordion-item -->

    <!-- wp:accordion-item -->
    <div class="wp-block-accordion-item"><!-- wp:accordion-heading {"iconPosition":"left"} -->
        <h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span><span class="wp-block-accordion-heading__toggle-title">This heading tells users what's inside the accordion</span></button></h3>
        <!-- /wp:accordion-heading -->

        <!-- wp:accordion-panel -->
        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
            <p>Once open, the content within the accordion should describe the topic in more detail. It should not repeat the heading.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>This part of the accordion is a great place to link to other resources. Remember, important information and calls to action should live outside of the accordion.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:accordion-panel -->
    </div>
    <!-- /wp:accordion-item -->
</div>
<!-- /wp:accordion -->