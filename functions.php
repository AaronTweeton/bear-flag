<?php

/**
 * Bear Flag Functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Bear_Flag
 * @since Bear Flag 1.0
 */

// Remove core patterns so user is directed to use theme patterns only.
add_action('after_setup_theme', 'bear_flag_setup');

// Prevent loading of remote block patterns. 
add_filter('should_load_remote_block_patterns', '__return_false');

// Disable Block Directory suggestions in the block editor.
remove_action('enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets');

if (!function_exists('bear_flag_setup')) :

    function bear_flag_setup()
    {
        // Enable support for post formats.
        add_theme_support(
            'post-formats',
            array(
                'aside',
                'gallery',
                'link',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        // Only allow theme-specific block patterns.
        remove_theme_support('core-block-patterns');
    }
endif;
