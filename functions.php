<?php
/**
 * Seed functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Seed
 * @since Seed 1.0
 */

// Enqueue Styles
if (!function_exists('seed_enqueue_styles')) :
    /**
     * Enqueues style.css on the front.
     *
     * @since Seed 1.0
     *
     * @return void
     */
    function seed_enqueue_styles()
    {
        wp_enqueue_style(
            'seed',
            get_parent_theme_file_uri('assets/css/seed.css'),
            [],
            wp_get_theme()->get('Version')
        );
    }
endif;
add_action('wp_enqueue_scripts', 'seed_enqueue_styles');

// Enqueues wp-editor.css in the editors.
if (!function_exists('seed_editor_style')) :
    /**
     * Enqueues wp-editor.css in the editors.
     *
     * @since Seed 1.0
     *
     * @return void
     */
    function seed_editor_style()
    {
        add_editor_style(get_parent_theme_file_uri('assets/css/wp-editor.css'));
    }
endif;
add_action('after_setup_theme', 'seed_editor_style');

// Registers block binding sources.
if (!function_exists('seed_register_block_bindings')) :
    /**
     * Registers the copyright block binding source.
     *
     * @since Seed 1.0
     *
     * @return void
     */
    function seed_register_block_bindings()
    {
        register_block_bindings_source(
            'seed/copyright',
            array(
                'label'              => _x('&copy; (YEAR)', 'Label for the copyright placeholder in the editor', 'seed'),
                'get_value_callback' => 'seed_copyright_binding',
            )
        );
    }
endif;
if (!function_exists('seed_copyright_binding')) :
    /**
     * Callback function for the copyright block binding source.
     *
     * @since Seed 1.0
     *
     * @return string Copyright text.
     */
    function seed_copyright_binding()
    {
        $copyright_text = sprintf(
            /* translators: 1: Copyright symbol or word, 2: Year */
            esc_html__('%1$s %2$s', 'seed'),
            '&copy;',
            wp_date('Y')
        );

        return $copyright_text;
    }
endif;
add_action('init', 'seed_register_block_bindings');

/* Block Style */
if (!function_exists('seed_block_styles')) :
    /**
     * Registers block styles for the responsive.
     *
     * @since Seed 1.0
     *
     * @return void
     */
    function seed_block_styles()
    {
        // Image styles
        $img_blocks = ['core/image', 'core/site-logo'];
        register_block_style(
            $img_blocks,
            [
            'name' => 'rounded-sm',
            'label' => 'Rounded Small',
            'is_default' => false,
            'inline_style' => '.is-style-rounded-sm img{border-radius: 5px}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'rounded-md',
            'label' => 'Rounded Medium',
            'is_default' => false,
            'inline_style' => '.is-style-rounded-md img{border-radius: 10px}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'rounded-lg',
            'label' => 'Rounded Large',
            'is_default' => false,
            'inline_style' => '.is-style-rounded-lg img{border-radius: 1rem}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'rounded-xl',
            'label' => 'Rounded XL',
            'is_default' => false,
            'inline_style' => '.is-style-rounded-xl img{border-radius: 1.5rem}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'm-60',
            'label' => 'Mobile: 60%',
            'is_default' => false,
            'inline_style' => '@media(max-width: 767px){.is-style-m-60 img{transform: scale(0.6)}}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'm-80',
            'label' => 'Mobile: 80%',
            'is_default' => false,
            'inline_style' => '@media(max-width: 767px){.is-style-m-80 img{transform: scale(0.8)}}',
            ]
        );

        // Nav Styles
        $nav_blocks = ['core/navigation'];
        register_block_style(
            $nav_blocks,
            [
            'name' => 'outline',
            'label' => 'Outline',
            'is_default' => false,
            'inline_style' => '.is-style-outline button{border: 1.5px solid;border-radius: 4px}',
            ]
        );

        // Responsive styles
        $blocks = ['core/group', 'core/image', 'core/site-logo', 'core/buttons', 'core/button', 'core/spacer'];
        register_block_style(
            $blocks,
            [
            'name' => 'mobile-only',
            'label' => 'Mobile Only',
            'is_default' => false,
            'inline_style' => '@media(min-width: 1024px){.is-style-mobile-only{display: none !important}}',
            ]
        );
        register_block_style(
            $blocks,
            [
            'name' => 'desktop-only',
            'label' => 'Desktop Only',
            'is_default' => false,
            'inline_style' => '@media(max-width: 1023px){.is-style-desktop-only{display: none !important}}',
            ]
        );
    }
endif;
add_action('init', 'seed_block_styles');
