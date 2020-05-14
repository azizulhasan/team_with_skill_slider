<?php

function tss_shortcode_extract_function($ids) {
    $ids = (int) $ids;
    global $wpdb;
    $styleTable = $wpdb->prefix . 'tss_team_showcase_style';
    $imageTable = $wpdb->prefix . 'tss_team_showcase_image_list';
    $linkTable = $wpdb->prefix . 'tss_team_showcase_link';
    $labelTable = $wpdb->prefix . 'tss_team_showcase_label';


    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $styleTable WHERE id = %d ", $ids), ARRAY_A);
    $allStyle = explode("|", $styledata['css']);
    $allSlider = explode("|", $styledata['slider']);
    $imagedata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $imageTable WHERE styleid = %d ORDER by id ASC ", $ids), ARRAY_A);

    if (file_exists(team_with_skills_and_slider_plugin_url . "public/output-{$styledata['style_name']}.php")) {
        wp_enqueue_style('twss-font-awesome-5-0-13', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');

        if (strpos($styledata['style_name'], 'style') !== false) {
            wp_enqueue_style("twss-google-font-{$ids}", "https://fonts.googleapis.com/css?family={$allStyle['17']}|{$allStyle['24']}");
        } else if (strpos($styledata['style_name'], 'square') !== false) {
            wp_enqueue_style("twss-google-font-{$ids}", "https://fonts.googleapis.com/css?family={$allStyle['12']}|{$allStyle['19']}");
        }
        include team_with_skills_and_slider_plugin_url . "public/output-{$styledata['style_name']}.php";
    }
}
