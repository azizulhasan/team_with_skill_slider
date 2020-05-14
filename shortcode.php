<?php

global $wpdb;
$style_table = $wpdb->prefix . 'twss_6310_style';
$icon_table = $wpdb->prefix . 'twss_6310_icons';
$member_table = $wpdb->prefix . 'twss_6310_member';

$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $ids), ARRAY_A);
$css = explode("!!##!!", $styledata['css']);
$key = explode(",", $css[0]);
$value = explode("||##||", $css[1]);

$cssData = array_combine($key, $value);

$members = $wpdb->get_results("SELECT * FROM $member_table WHERE id in ({$styledata['memberid']}) ORDER BY FIELD(id,{$styledata['memberid']})", ARRAY_A);

$template_order  = explode(",", $styledata['template_order']);


$loading = plugin_dir_url(dirname(__FILE__)) . plugin_basename(dirname(__FILE__)) . '/assets/image/loading.gif';

if (file_exists(twss_6310_plugin_url . "output/{$styledata['style_name']}.php")) {
   wp_enqueue_style('twss-font-awesome-5-0-13', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
   wp_enqueue_style("twss-googlesss-font-{$ids}", "https://fonts.googleapis.com/css?family={$cssData['member_font_family']}|{$cssData['designation_font_family']}|{$cssData['details_font_family']}|{$cssData['read_more_font_family']}|{$cssData['contact_font_family']}|{$cssData['skills_font_family']}|{$cssData['category_font_family']}");
   if ($cssData['twss_fun_template_slider']) {
       wp_enqueue_style('twss-twss-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));
       wp_enqueue_script('twss-twss-6310-owl-carousel-js', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'), TRUE);
   }

   echo "<div class='twss_main_template twss_main_template_{$ids}'>";
   include twss_6310_plugin_url . "output/{$styledata['style_name']}.php";
   echo "</div>";

   if($cssData['custom_css']){
      echo "<style type='text/css'>".twss_split_code($ids, $cssData['custom_css'])."</style>";
   }
}
