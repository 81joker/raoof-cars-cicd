<?php
/**
 * acf-fields.php
 *
 * Registers all ACF field groups programmatically.
 * This keeps field definitions in version control instead of the database.
 *
 * Requires: Advanced Custom Fields PRO or ACF Free v5+
 */

defined( 'ABSPATH' ) || exit;

add_action( 'acf/init', 'raoof_register_acf_fields' );

function raoof_register_acf_fields(): void {

    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    /* ==========================================================================
     * 1. SITE SETTINGS — Options page fields
     * ========================================================================== */
    acf_add_local_field_group( [
        'key'      => 'group_site_settings',
        'title'    => 'Site Settings',
        'location' => [ [ [ 'param' => 'options_page', 'operator' => '==', 'value' => 'raoof-settings' ] ] ],
        'fields'   => [

            // --- Contact ---
            [ 'key' => 'field_phone',     'label' => 'Phone / WhatsApp Number', 'name' => 'site_phone',     'type' => 'text',  'default_value' => '+43 660 843 3874',        'instructions' => 'Include country code. Used in navbar, footer, booking form.' ],
            [ 'key' => 'field_whatsapp',  'label' => 'WhatsApp URL',            'name' => 'site_whatsapp',  'type' => 'url',   'default_value' => 'https://wa.me/436608433874' ],
            [ 'key' => 'field_email',     'label' => 'Email Address',           'name' => 'site_email',     'type' => 'email', 'default_value' => 'info@raoofcars.com' ],
            [ 'key' => 'field_address',   'label' => 'Office Address',          'name' => 'site_address',   'type' => 'textarea', 'rows' => 2, 'default_value' => "Pernerstorferstraße 22\n3100 St. Pölten, Austria" ],

            // --- Social ---
            [ 'key' => 'field_instagram', 'label' => 'Instagram URL',  'name' => 'social_instagram', 'type' => 'url' ],
            [ 'key' => 'field_snapchat',  'label' => 'Snapchat URL',   'name' => 'social_snapchat',  'type' => 'url' ],
            [ 'key' => 'field_tiktok',    'label' => 'TikTok URL',     'name' => 'social_tiktok',    'type' => 'url' ],
        ],
    ] );

    /* ==========================================================================
     * 2. HOMEPAGE HERO
     * ========================================================================== */
    acf_add_local_field_group( [
        'key'      => 'group_hero',
        'title'    => 'Hero Section',
        'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
        'fields'   => [
            [ 'key' => 'field_hero_eyebrow', 'label' => 'Eyebrow Text',       'name' => 'hero_eyebrow', 'type' => 'text',  'default_value' => 'LUXURY · CHAUFFEUR · EUROPE' ],
            [ 'key' => 'field_hero_title',   'label' => 'Headline',           'name' => 'hero_title',   'type' => 'textarea', 'rows' => 3 ],
            [ 'key' => 'field_hero_lead',    'label' => 'Sub-headline',       'name' => 'hero_lead',    'type' => 'textarea', 'rows' => 2 ],
            [ 'key' => 'field_hero_cta_1',   'label' => 'Primary CTA Label',  'name' => 'hero_cta_primary',   'type' => 'text', 'default_value' => 'Book Now' ],
            [ 'key' => 'field_hero_cta_2',   'label' => 'Secondary CTA Label','name' => 'hero_cta_secondary', 'type' => 'text', 'default_value' => 'View Fleet' ],
            [ 'key' => 'field_hero_video',   'label' => 'Background Video',   'name' => 'hero_video',   'type' => 'file',  'return_format' => 'url', 'mime_types' => 'mp4,webm', 'instructions' => 'Upload MP4 (max 30 MB recommended).' ],
        ],
    ] );

    /* ==========================================================================
     * 3. FEATURE CARDS — "What We Offer" section
     * ========================================================================== */
    acf_add_local_field_group( [
        'key'      => 'group_feature_cards',
        'title'    => 'Feature Cards Section',
        'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
        'fields'   => [
            [ 'key' => 'field_fc_eyebrow', 'label' => 'Section Eyebrow', 'name' => 'fc_eyebrow', 'type' => 'text', 'default_value' => 'Our Services' ],
            [ 'key' => 'field_fc_title',   'label' => 'Section Title',   'name' => 'fc_title',   'type' => 'text' ],
            [ 'key' => 'field_fc_lead',    'label' => 'Section Lead',    'name' => 'fc_lead',    'type' => 'textarea', 'rows' => 2 ],
            [
                'key'        => 'field_fc_cards',
                'label'      => 'Cards',
                'name'       => 'fc_cards',
                'type'       => 'repeater',
                'min'        => 1,
                'max'        => 6,
                'layout'     => 'block',
                'button_label' => 'Add Card',
                'sub_fields' => [
                    [ 'key' => 'field_fc_card_icon',  'label' => 'Icon Name (Lucide)', 'name' => 'icon',        'type' => 'text', 'instructions' => 'e.g. calendar-days, map, map-pinned' ],
                    [ 'key' => 'field_fc_card_title', 'label' => 'Title',              'name' => 'card_title',  'type' => 'text' ],
                    [ 'key' => 'field_fc_card_desc',  'label' => 'Description',        'name' => 'card_desc',   'type' => 'textarea', 'rows' => 3 ],
                ],
            ],
        ],
    ] );

    /* ==========================================================================
     * 4. USP SECTION
     * ========================================================================== */
    acf_add_local_field_group( [
        'key'      => 'group_usp',
        'title'    => 'USP Section',
        'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
        'fields'   => [
            [ 'key' => 'field_usp_eyebrow', 'label' => 'Eyebrow',    'name' => 'usp_eyebrow', 'type' => 'text', 'default_value' => 'Why Choose Us?' ],
            [ 'key' => 'field_usp_title',   'label' => 'Title',      'name' => 'usp_title',   'type' => 'text' ],
            [ 'key' => 'field_usp_image',   'label' => 'Background Image', 'name' => 'usp_image', 'type' => 'image', 'return_format' => 'url' ],
            [
                'key'        => 'field_usp_benefits',
                'label'      => 'Benefits',
                'name'       => 'usp_benefits',
                'type'       => 'repeater',
                'min'        => 1,
                'max'        => 10,
                'layout'     => 'table',
                'button_label' => 'Add Benefit',
                'sub_fields' => [
                    [ 'key' => 'field_usp_benefit_text', 'label' => 'Benefit', 'name' => 'benefit_text', 'type' => 'text' ],
                ],
            ],
        ],
    ] );

    /* ==========================================================================
     * 5. STATS SECTION
     * ========================================================================== */
    acf_add_local_field_group( [
        'key'      => 'group_stats',
        'title'    => 'Stats Section',
        'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
        'fields'   => [
            [
                'key'        => 'field_stats_items',
                'label'      => 'Stats',
                'name'       => 'stats_items',
                'type'       => 'repeater',
                'min'        => 1,
                'max'        => 6,
                'layout'     => 'table',
                'button_label' => 'Add Stat',
                'sub_fields' => [
                    [ 'key' => 'field_stat_number', 'label' => 'Number', 'name' => 'stat_number', 'type' => 'text', 'instructions' => 'e.g. 25+, 8, 24/7' ],
                    [ 'key' => 'field_stat_label',  'label' => 'Label',  'name' => 'stat_label',  'type' => 'text' ],
                ],
            ],
        ],
    ] );

    /* ==========================================================================
     * 6. FLEET CPT — per-vehicle fields
     * ========================================================================== */
    acf_add_local_field_group( [
        'key'      => 'group_fleet_vehicle',
        'title'    => 'Vehicle Details',
        'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'raoof_fleet' ] ] ],
        'fields'   => [
            [ 'key' => 'field_vehicle_badge', 'label' => 'Badge Text',   'name' => 'vehicle_badge',       'type' => 'text',   'instructions' => 'e.g. CHAUFFEUR SERVICE' ],
            [ 'key' => 'field_vehicle_img',   'label' => 'Card Image',   'name' => 'vehicle_card_image',  'type' => 'image',  'return_format' => 'url' ],
            [ 'key' => 'field_vehicle_cta',   'label' => 'CTA Label',    'name' => 'vehicle_cta_label',   'type' => 'text',   'default_value' => 'Book Now' ],
            [ 'key' => 'field_vehicle_order', 'label' => 'Display Order','name' => 'vehicle_order',       'type' => 'number', 'default_value' => 10 ],
        ],
    ] );
}
