<?php

function twss_template_01_10() {
  global $wpdb;
  $style_table = $wpdb->prefix . 'twss_6310_style';
  $icon_table = $wpdb->prefix . 'twss_6310_icons';
  $member_table = $wpdb->prefix . 'twss_6310_member';

  wp_enqueue_style('twss-6310-style', plugins_url('assets/css/style.css', __FILE__));
  wp_enqueue_style('twss-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));

  twss_link_css_js();

  include twss_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
    wp_enqueue_style('twss-style-01-10', plugins_url('assets/css/style-01-10.css', __FILE__));
    wp_enqueue_style('twss-style-skills', plugins_url('assets/css/skills.css', __FILE__));
    include twss_6310_plugin_url . 'settings/preview-01-10.php';
  } else if (!empty($_GET['styleid'])) {
    include_once(twss_6310_plugin_url . 'settings/helper/common-helper.php');
    twss_no_preview_available();
    twss_6310_color_picker_script();
    twss_6310_font_picker_script();
    $styleId = (int) ($_GET['styleid']);
    wp_enqueue_script('twss-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
    wp_enqueue_script('twss-admin-js', plugins_url('assets/js/twss-admin-script.js', __FILE__), array('jquery'));
    wp_enqueue_script('twss-twss-6310-owl-carousel', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'));

    wp_enqueue_style('twss-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
    wp_enqueue_style('twss-twss-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));

    $loading = plugin_dir_url(dirname(__FILE__)) . plugin_basename(dirname(__FILE__)) . '/assets/image/loading.gif';
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    include twss_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';
  }
}

function twss_template_11_20() {
  global $wpdb;
  $style_table = $wpdb->prefix . 'twss_6310_style';
  $icon_table = $wpdb->prefix . 'twss_6310_icons';
  $member_table = $wpdb->prefix . 'twss_6310_member';

  wp_enqueue_style('twss-6310-style', plugins_url('assets/css/style.css', __FILE__));
  wp_enqueue_style('twss-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
  twss_link_css_js();
  include twss_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
    wp_enqueue_style('twss-style-11-20', plugins_url('assets/css/style-11-20.css', __FILE__));
    include twss_6310_plugin_url . 'settings/preview-11-20.php';
  } else if (!empty($_GET['styleid'])) {
    include_once(twss_6310_plugin_url . 'settings/helper/common-helper.php');
    twss_no_preview_available();
    twss_6310_color_picker_script();
    twss_6310_font_picker_script();
    $styleId = (int) ($_GET['styleid']);
    wp_enqueue_script('twss-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
    wp_enqueue_script('twss-admin-js', plugins_url('assets/js/twss-admin-script.js', __FILE__), array('jquery'));
    wp_enqueue_script('twss-twss-6310-owl-carousel', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'));

    wp_enqueue_style('twss-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
    wp_enqueue_style('twss-twss-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));

    $loading = plugin_dir_url(dirname(__FILE__)) . plugin_basename(dirname(__FILE__)) . '/assets/image/loading.gif';
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    include twss_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';
  }
}

function twss_template_21_30() {
  global $wpdb;
  $style_table = $wpdb->prefix . 'twss_6310_style';
  $icon_table = $wpdb->prefix . 'twss_6310_icons';
  $member_table = $wpdb->prefix . 'twss_6310_member';

  wp_enqueue_style('twss-6310-style', plugins_url('assets/css/style.css', __FILE__));
  wp_enqueue_style('twss-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
  twss_link_css_js();

  include twss_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
    wp_enqueue_style('twss-style-21-30', plugins_url('assets/css/style-21-30.css', __FILE__));
    include twss_6310_plugin_url . 'settings/preview-21-30.php';
  } else if (!empty($_GET['styleid'])) {
    include_once(twss_6310_plugin_url . 'settings/helper/common-helper.php');
    twss_6310_color_picker_script();
    twss_6310_font_picker_script();
    $styleId = (int) ($_GET['styleid']);
    wp_enqueue_script('twss-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
    wp_enqueue_script('twss-admin-js', plugins_url('assets/js/twss-admin-script.js', __FILE__), array('jquery'));
    wp_enqueue_script('twss-twss-6310-owl-carousel', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'));

    wp_enqueue_style('twss-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
    wp_enqueue_style('twss-twss-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));

    $loading = plugin_dir_url(dirname(__FILE__)) . plugin_basename(dirname(__FILE__)) . '/assets/image/loading.gif';
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    include twss_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';
  }
}

function twss_team_6310_team_member() {
  global $wpdb;
  wp_enqueue_style('twss-6310-style', plugins_url('assets/css/style.css', __FILE__));
  wp_enqueue_style('twss-6310-style-progress', plugins_url('assets/css/range-slider.css', __FILE__));

  twss_link_css_js();

  wp_enqueue_script('twss-6310-progress', plugins_url('assets/js/range-slider.js', __FILE__), array('jquery'));
  wp_enqueue_script('twss-6310-progress-custom', plugins_url('assets/js/range-slider-custom.js', __FILE__), array('jquery'));
  include twss_6310_plugin_url . 'header.php';
  include_once(twss_6310_plugin_url . 'settings/helper/common-helper.php');
  include twss_6310_plugin_url . 'settings/team-member.php';
}

function twss_team_6310_category() {
  global $wpdb;  
  wp_enqueue_style('twss-6310-style', plugins_url('assets/css/style.css', __FILE__));

  twss_link_css_js();

  include twss_6310_plugin_url . 'header.php';
  include_once(twss_6310_plugin_url . 'settings/helper/common-helper.php');
  include twss_6310_plugin_url . 'settings/category.php';
}

function twss_team_6310_icon() {
  global $wpdb;  
  wp_enqueue_style('twss-6310-style', plugins_url('assets/css/style.css', __FILE__));

  twss_link_css_js();

  include twss_6310_plugin_url . 'header.php';
  include_once(twss_6310_plugin_url . 'settings/helper/common-helper.php');
  include twss_6310_plugin_url . 'settings/social-icon.php';
}

function twss_team_6310_lincense(){
  global $wpdb;  
  wp_enqueue_style('twss-6310-style', plugins_url('assets/css/style.css', __FILE__));
  twss_link_css_js();
  include twss_6310_plugin_url . 'header.php';
  include twss_6310_plugin_url . 'license.php';
}
