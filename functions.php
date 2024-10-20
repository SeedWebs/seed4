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
            'inline_style' => '.is-style-rounded-sm img{border-radius: 5px}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'rounded-md',
            'label' => 'Rounded Medium',
            'inline_style' => '.is-style-rounded-md img{border-radius: 10px}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'rounded-lg',
            'label' => 'Rounded Large',
            'inline_style' => '.is-style-rounded-lg img{border-radius: 1rem}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'rounded-xl',
            'label' => 'Rounded XL',
            'inline_style' => '.is-style-rounded-xl img{border-radius: 1.5rem}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'm-60',
            'label' => 'Mobile: 60%',
            'inline_style' => '@media(max-width: 767px){.is-style-m-60 img{transform: scale(0.6)}}',
            ]
        );
        register_block_style(
            $img_blocks,
            [
            'name' => 'm-80',
            'label' => 'Mobile: 80%',
            'inline_style' => '@media(max-width: 767px){.is-style-m-80 img{transform: scale(0.8)}}',
            ]
        );

        // Nav Styles
        $nav_blocks = ['core/navigation'];
        register_block_style(
            $nav_blocks,
            [
            'name' => 'nav-outline',
            'label' => 'Outline',
            'inline_style' => '.is-style-nav-outline button{border: 1.5px solid;border-radius: 4px}',
            ]
        );

        // Responsive styles
        $blocks = ['core/group', 'core/image', 'core/site-logo', 'core/buttons', 'core/button', 'core/spacer'];
        register_block_style(
            $blocks,
            [
            'name' => 'mobile-only',
            'label' => 'Mobile Only',
            'inline_style' => '@media(min-width: 1024px){.is-style-mobile-only{display: none !important}}',
            ]
        );
        register_block_style(
            $blocks,
            [
            'name' => 'desktop-only',
            'label' => 'Desktop Only',
            'inline_style' => '@media(max-width: 1023px){.is-style-desktop-only{display: none !important}}',
            ]
        );

        // Overflow Hidden
        $blocks = ['core/group'];
        register_block_style(
            $blocks,
            [
            'name' => 'overflow-hidden',
            'label' => 'No Overflow',
            'inline_style' => '.is-style-overflow-hidden{overflow: hidden}',
            ]
        );

        // Aspect Ratio
        $blocks = ['core/post-featured-image'];
        register_block_style(
            $blocks,
            [
            'name' => 'ratio-1200-630',
            'label' => 'Ratio 120:63',
            'inline_style' => '.is-style-ratio-1200-630 img{aspect-ratio: 120 / 63;object-fit: cover}',
            ]
        );
        register_block_style(
            $blocks,
            [
            'name' => 'ratio-3-2',
            'label' => 'Ratio 3:2',
            'inline_style' => '.is-style-ratio-3-2 img{aspect-ratio: 3 / 2;object-fit: cover}',
            ]
        );
        register_block_style(
            $blocks,
            [
            'name' => 'ratio-4-3',
            'label' => 'Ratio 4:3',
            'inline_style' => '.is-style-ratio-4-3 img{aspect-ratio: 4 / 3;object-fit: cover}',
            ]
        );
        register_block_style(
            $blocks,
            [
            'name' => 'ratio-1-1',
            'label' => 'Ratio 1:1',
            'inline_style' => '.is-style-ratio-1-1 img{aspect-ratio: 1 / 1;object-fit: cover}',
            ]
        );
        register_block_style(
            $blocks,
            [
            'name' => 'ratio-4-5',
            'label' => 'Ratio 4:5',
            'inline_style' => '.is-style-ratio-4-5 img{aspect-ratio: 4 / 5;object-fit: cover}',
            ]
        );

        // Category Link
        register_block_style(
            'core/post-terms',
            [
            'name'         => 'term-outline',
            'label'        => 'Outline',
            'inline_style' => '
              .is-style-term-outline a,
              .is-style-term-outline span:not([class], [data-rich-text-placeholder]) {
                display: inline-block;
                border: 1px solid;
                padding: 0.2em 0.6em;
                border-radius: 4px;
                text-decoration: none;
                margin-right: 0.75em;
              }
              .is-style-term-outline .wp-block-post-terms__separator {
                display: none;
              }',
            ]
        );
    }
endif;
add_action('init', 'seed_block_styles');
