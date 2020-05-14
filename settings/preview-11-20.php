<?php
if (!defined('ABSPATH'))
  exit;
if (!current_user_can('edit_others_pages')) {
  wp_die(__('You do not have sufficient permissions to access this page.'));
}

if (!empty($_POST['submit']) && $_POST['submit'] == 'Save' && $_POST['style'] != '') {
  $nonce = $_REQUEST['_wpnonce'];
  if (!wp_verify_nonce($nonce, 'twss-nonce-field')) {
    die('You do not have sufficient permissions to access this page.');
  } else {
    $slider = "1||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|18|18|rgba(0, 0, 0, 0.94)|rgba(250, 0, 0, 0.8)|50|3";
    $name = sanitize_text_field($_POST['style_name']);
    $style_name = sanitize_text_field($_POST['style']);

    if ($_POST['style'] == 'template-11') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!4||##||3||##||0||##||1||##||rgba(235, 235, 235, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||2||##||rgba(222, 222, 222, 0.8)||##||20||##||26||##||rgb(5, 5, 5)||##||rgb(23, 87, 71)||##||bold||##||uppercase||##||Shanti||##||3||##||15||##||14||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||15||##||0||##||35||##||35||##||1||##||0||##||0||##||10||##||1||##||12||##||capitalize||##||rgb(38, 35, 56)||##||normal||##||Shanti||##||18||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(252, 252, 252)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";

      $temp_orders ="twss_fun_template_name,twss_fun_template_designation,twss_fun_template_skills,twss_fun_template_profile_details,twss_fun_template_social,twss_fun_template_contact";



    } else if ($_POST['style'] == 'template-12') {
      $css = "id,item_per_row,image_radius,border_width,border_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_text_align,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_align,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!51||##||3||##||0||##||3||##||rgba(0, 0, 0, 0.8)||##||rgba(0, 0, 0, 0.8)||##||rgba(0, 0, 0, 0.5)||##||0||##||2||##||rgba(222, 222, 222, 0.8)||##||||##||18||##||28||##||rgb(255, 255, 255)||##||rgb(245, 245, 245)||##||100||##||uppercase||##||center||##||Yeseva+One||##||3||##||5||##||1||##||14||##||20||##||rgb(255, 255, 255)||##||rgb(245, 245, 245)||##||100||##||capitalize||##||center||##||Yeseva+One||##||0||##||0||##||1||##||15||##||12||##||22||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||justify||##||Yeseva+One||##||||##||||##||1||##||30||##||30||##||2||##||6||##||0||##||10||##||1||##||13||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||12||##||22||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||Yeseva+One||##||||##||||##||1px||##||rgb(255, 255, 255)||##||1||##||12||##||18||##||capitalize||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||normal||##||Yeseva+One||##||8||##||25||##||2||##||rgb(255, 255, 255)||##||1||##||rgb(255, 255, 255)||##||rgb(0, 0, 0)||##||rgba(153, 153, 153, 1)||##||1||##||||##||||##||2||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(0, 0, 0)||##||2||##||rgba(0, 0, 0, 0.8)||##||rgba(189, 189, 189, 0.8)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||Yeseva+One||##||30||##||40||##||5||##||10||##||||##||Save";


      $temp_orders ="twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";


    } else if ($_POST['style'] == 'template-13') {
      $css ="id,item_per_row,image_radius,border_width,border_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_title_padding,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_padding,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!11||##||3||##||0||##||8||##||rgba(240, 205, 136, 0.8)||##||rgba(66, 12, 12, 0.8)||##||rgba(102, 2, 2, 0.5)||##||4||##||4||##||rgba(255, 255, 255, 0.8)||##||rgba(255, 255, 255, 0.8)||##||26||##||36||##||rgb(199, 187, 187)||##||rgb(230, 230, 230)||##||100||##||lowercase||##||||##||Bentham||##||1||##||1||##||1||##||12||##||22||##||rgb(232, 232, 232)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||||##||Vollkorn||##||3||##||3||##||1||##||14||##||15||##||20||##||rgb(255, 255, 255)||##||rgb(227, 227, 227)||##||100||##||capitalize||##||left||##||Allerta||##||||##||||##||1||##||35||##||35||##||1||##||3||##||1||##||1||##||1||##||||##||||##||||##||100||##||||##||||##||rgb(250, 250, 250)||##||rgb(171, 162, 162)||##||100||##||uppercase||##||left||##||||##||||##||||##||none||##||||##||||##||14||##||25||##||capitalize||##||rgb(222, 222, 222)||##||||##||bold||##||Shanti||##||8||##||25||##||2||##||rgb(232, 232, 232)||##||1||##||rgb(240, 240, 240)||##||rgb(204, 204, 204)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||0||##||2||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||2||##||rgba(255, 255, 255, 0.8)||##||rgba(66, 12, 12, 0.8)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||Yeseva+One||##||30||##||40||##||5||##||10||##||||##||Save";
      $temp_orders="twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-14') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-15') {
      $css = "id,item_per_row,image_radius,border_width,border_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_padding,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!46||##||3||##||0||##||1||##||rgba(0, 0, 0, 0.8)||##||rgba(122, 122, 122, 0.8)||##||rgba(0, 0, 0, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||||##||18||##||28||##||rgb(255, 255, 255)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Stardos+Stencil||##||0||##||0||##||1||##||13||##||20||##||rgb(255, 255, 255)||##||rgb(5, 5, 5)||##||100||##||capitalize||##||||##||Quattrocento||##||0||##||0||##||1||##||50||##||12||##||20||##||rgb(255, 255, 255)||##||rgb(252, 252, 252)||##||100||##||capitalize||##||justify||##||||##||15||##||-24||##||1||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||||##||rgb(255, 255, 255)||##||100||##||||##||||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||||##||||##||||##||none||##||||##||1||##||14||##||25||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||||##||||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||||##||||##||||##||||##||||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||||##||||##||||##||||##||||##||||##||Save";


      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";


    } else if ($_POST['style'] == 'template-16') {
      $css = "id,item_per_row,image_radius,box_background_color,box_middle_background_color,box_middle_hover_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!24||##||2||##||12||##||rgba(68, 158, 152, 0.8)||##||rgba(43, 43, 43, 0.8)||##||rgba(0, 239, 247, 0.8)||##||rgba(255, 0, 68, 0.5)||##||5||##||5||##||rgba(125, 125, 125, 0.8)||##||rgba(153, 153, 153, 0.8)||##||22||##||35||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||uppercase||##||Vollkorn||##||0||##||0||##||1||##||13||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||Shanti||##||1||##||25||##||13||##||||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||justify||##||||##||||##||||##||1||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||14||##||||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||||##||||##||||##||1px||##||rgb(255, 255, 255)||##||1||##||14||##||25||##||capitalize||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Yeseva+One||##||8||##||25||##||1||##||rgb(0, 0, 0)||##||1||##||rgb(240, 240, 240)||##||rgb(255, 255, 255)||##||rgba(53, 128, 204, 0.52)||##||1||##||||##||||##||2||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||||##||rgb(255, 255, 255)||##||2||##||rgba(120, 105, 105, 0.8)||##||rgba(148, 132, 132, 0.8)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||||##||15||##||40||##||8||##||8||##||||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";


    }else if ($_POST['style'] == 'template-17') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-18') {
      $css = "id,item_per_row,image_radius,border_width,border_color,box_background_color,box_img_border_width,box_img_background_color,box_img_hover_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_border_color,designation_border_hover_color,designation_border_after_color,designation_border_after_hover_color,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!29||##||3||##||0||##||2||##||rgba(0, 0, 0, 0.8)||##||rgba(143, 143, 143, 0.8)||##||4||##||rgba(21, 171, 230, 0.8)||##||rgba(245, 245, 245, 0.8)||##||rgba(14, 228, 235, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||||##||18||##||28||##||rgb(255, 255, 255)||##||rgb(17, 59, 48)||##||100||##||uppercase||##||Shanti||##||0||##||0||##||1||##||15||##||24||##||rgb(255, 255, 255)||##||rgb(112, 112, 112)||##||100||##||rgb(255, 255, 255)||##||rgb(255, 0, 0)||##||rgb(255, 0, 0)||##||rgb(255, 255, 255)||##||uppercase||##||Shanti||##||0||##||0||##||1||##||||##||||##||||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||||##||||##||||##||1||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||||##||rgb(255, 255, 255)||##||100||##||||##||||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||||##||||##||||##||none||##||rgb(255, 255, 255)||##||||##||14||##||25||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||||##||||##||2||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||2||##||rgba(156, 156, 156, 0.8)||##||rgba(0, 0, 0, 0.8)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||Yeseva+One||##||20||##||40||##||5||##||10||##||||##||Save";
      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";

    } else if ($_POST['style'] == 'template-19') {
      $css = "id,item_per_row,box_background_first_color,box_background_second_color,box_background_third_color,box_background_fourth_color,box_background_five_color,box_img_border_width,box_img_background_color,box_img_hover_background_color,box_background_first_hover_color,box_background_second_hover_color,box_background_third_hover_color,box_background_fourth_hover_color,box_background_five_hover_color,box_shadow_width,box_shadow_blur,box_shadow_color,hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!30||##||3||##||rgba(41, 217, 176, 0.8)||##||rgba(219, 85, 85, 0.8)||##||rgba(74, 86, 120, 0.8)||##||rgba(219, 59, 59, 0.8)||##||rgba(184, 88, 88, 0.8)||##||5||##||rgba(212, 212, 212, 0.8)||##||rgba(163, 163, 163, 0.8)||##||rgba(163, 59, 59, 0.8)||##||rgba(0, 0, 0, 0.8)||##||rgba(18, 3, 3, 0.8)||##||rgba(194, 75, 75, 0.8)||##||rgba(99, 78, 78, 0.8)||##||0||##||0||##||rgba(117, 54, 54, 0.8)||##||rgba(201, 58, 58, 0.8)||##||22||##||38||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||uppercase||##||Quattrocento||##||0||##||0||##||1||##||20||##||38||##||rgb(255, 255, 255)||##||rgb(227, 227, 227)||##||100||##||lowercase||##||Quattrocento||##||-4||##||8||##||1||##||16||##||13||##||24||##||rgb(255, 255, 255)||##||rgb(219, 219, 219)||##||100||##||capitalize||##||center||##||Buda:300||##||0||##||0||##||1||##||25||##||25||##||2||##||4||##||0||##||0||##||1||##||39||##||rgb(255, 255, 255)||##||100||##||14||##||24||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||uppercase||##||left||##||||##||0||##||0||##||none||##||rgb(255, 255, 255)||##||1||##||14||##||25||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||||##||||##||0||##||1000||##||false||##||fas fa-chevron-circle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||12||##||rgba(237, 17, 17, 0.8)||##||rgba(143, 143, 143, 0.8)||##||false||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||Buda:300||##||30||##||40||##||10||##||7||##||||##||Save";
      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";
    } else if ($_POST['style'] == 'template-20') {
      $css = "id,item_per_row,box_background_first_color,box_background_second_color,box_background_third_color,box_background_fourth_color,box_background_five_color,box_background_six_color,box_background_first_hover_color,box_background_second_hover_color,box_background_third_hover_color,box_background_fourth_hover_color,box_background_five_hover_color,box_background_six_hover_color,box_shadow_width,box_shadow_blur,box_shadow_color,hover_box_shadow_color,member_font_size,member_line_height,member_background_color,member_background_hover_color,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!42||##||3||##||rgba(44, 49, 176, 0.8)||##||rgba(117, 100, 100, 0.8)||##||rgba(3, 13, 4, 0.8)||##||rgba(112, 75, 75, 0.8)||##||rgba(28, 4, 4, 0.8)||##||rgba(245, 37, 37, 0.8)||##||rgba(133, 70, 70, 0.8)||##||rgba(43, 20, 20, 0.8)||##||rgba(153, 80, 80, 0.8)||##||rgba(161, 42, 42, 0.8)||##||rgba(189, 89, 89, 0.8)||##||rgba(214, 47, 47, 0.8)||##||||##||||##||rgba(255, 255, 255, 0.8)||##||rgba(255, 255, 255, 0.8)||##||18||##||32||##||rgb(59, 6, 6)||##||rgb(176, 74, 74)||##||rgb(189, 89, 89)||##||rgb(189, 45, 45)||##||bold||##||capitalize||##||Shanti||##||||##||||##||1||##||19||##||62||##||rgb(255, 255, 255)||##||||##||bold||##||capitalize||##||Shanti||##||22||##||25||##||1||##||||##||||##||||##||||##||||##||100||##||capitalize||##||center||##||||##||||##||||##||1||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||||##||||##||100||##||14||##||20||##||rgb(62, 64, 64)||##||||##||100||##||capitalize||##||center||##||||##||0||##||10||##||none||##||||##||1||##||||##||||##||||##||rgb(62, 64, 64)||##||bold||##||Shanti||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||||##||||##||2||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(240, 226, 226)||##||2||##||rgba(191, 70, 70, 0.8)||##||rgba(176, 67, 67, 0.8)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||||##||30||##||30||##||1||##||10||##||||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";
      
    }else if ($_POST['style'] == 'template-21') {
      $css = "id,item_per_row,box_background_first_color,box_background_second_color,box_background_third_color,box_background_fourth_color,box_background_five_color,box_background_six_color,box_background_first_hover_color,box_background_second_hover_color,box_background_third_hover_color,box_background_fourth_hover_color,box_background_five_hover_color,box_background_six_hover_color,member_font_size,member_line_height,member_background_color,member_background_hover_color,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!43||##||3||##||rgba(99, 85, 196, 0.8)||##||rgba(86, 87, 44, 0.8)||##||rgba(40, 107, 35, 0.8)||##||rgba(148, 89, 89, 0.8)||##||rgba(59, 59, 120, 0.8)||##||rgba(10, 69, 8, 0.8)||##||rgba(30, 235, 47, 0.8)||##||rgba(48, 34, 34, 0.8)||##||rgba(125, 51, 51, 0.8)||##||rgba(39, 161, 39, 0.8)||##||rgba(139, 242, 22, 0.8)||##||rgba(23, 15, 1, 0.8)||##||20||##||30||##||rgb(20, 16, 10)||##||rgb(74, 19, 19)||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||uppercase||##||Bigshot+One||##||-46||##||-50||##||1||##||13||##||30||##||rgb(82, 82, 82)||##||rgb(255, 255, 255)||##||bold||##||capitalize||##||Shanti||##||||##||||##||1||##||30||##||14||##||22||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||Crimson+Text||##||0||##||0||##||1||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||||##||rgb(189, 107, 107)||##||100||##||14||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||||##||0||##||10||##||none||##||||##||1||##||||##||||##||||##||rgb(62, 64, 64)||##||bold||##||Shanti||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||-5||##||-5||##||2||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||2||##||rgba(0, 17, 255, 0.8)||##||rgba(0, 0, 0, 0.8)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||Cardo||##||-20||##||40||##||5||##||10||##||||##||Save";
      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";
    }else if ($_POST['style'] == 'template-22') {
      $css = "id,item_per_row,box_background_first_color,box_background_second_color,box_background_third_color,box_background_fourth_color,box_background_five_color,box_background_six_color,box_background_first_hover_color,box_background_second_hover_color,box_background_third_hover_color,box_background_fourth_hover_color,box_background_five_hover_color,box_background_six_hover_color,box_shadow_width,box_shadow_blur,box_shadow_color,hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!44||##||3||##||rgba(33, 99, 20, 0.8)||##||rgba(227, 45, 45, 0.8)||##||rgba(209, 134, 134, 0.8)||##||rgba(115, 45, 45, 0.8)||##||rgba(204, 114, 41, 0.8)||##||rgba(89, 60, 70, 0.8)||##||rgba(217, 32, 32, 0.8)||##||rgba(56, 12, 12, 0.8)||##||rgba(156, 232, 33, 0.8)||##||rgba(127, 69, 214, 0.8)||##||rgba(64, 15, 26, 0.8)||##||rgba(201, 44, 133, 0.8)||##||||##||||##||rgba(255, 255, 255, 0.8)||##||rgba(214, 214, 214, 0.8)||##||20||##||30||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||uppercase||##||Allerta||##||25||##||-16||##||1||##||13||##||23||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||Varela||##||0||##||-25||##||1||##||20||##||13||##||||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allan||##||||##||||##||1||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||||##||rgb(255, 255, 255)||##||100||##||14||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||||##||1||##||10||##||none||##||rgb(255, 255, 255)||##||1||##||||##||||##||||##||rgb(62, 64, 64)||##||bold||##||Shanti||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||||##||||##||2||##||20000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||2||##||rgba(255, 255, 255, 0.8)||##||rgba(0, 0, 0, 0.8)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||Cardo||##||30||##||40||##||5||##||10||##||||##||Save";
      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";
    }else if ($_POST['style'] == 'template-23') {
      $css = "id,item_per_row,box_background_first_color,box_background_second_color,box_background_third_color,box_background_fourth_color,box_background_five_color,box_background_six_color,box_background_first_hover_color,box_background_second_hover_color,box_background_third_hover_color,box_background_fourth_hover_color,box_background_five_hover_color,box_background_six_hover_color,box_shadow_width,box_shadow_blur,box_shadow_color,hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_weight,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_border_width,category_border_color,category_background_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,update_style_change!!##!!45||##||3||##||rgba(214, 55, 153, 0.8)||##||rgba(186, 35, 35, 0.8)||##||rgba(184, 44, 119, 0.8)||##||rgba(24, 189, 38, 0.8)||##||rgba(201, 125, 38, 0.8)||##||rgba(44, 44, 219, 0.8)||##||rgba(68, 235, 17, 0.8)||##||rgba(227, 50, 197, 0.8)||##||rgba(33, 112, 138, 0.8)||##||rgba(45, 66, 204, 0.8)||##||rgba(206, 217, 48, 0.8)||##||rgba(235, 29, 29, 0.64)||##||0||##||5||##||rgba(227, 227, 227, 0.8)||##||||##||22||##||30||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||uppercase||##||Radley||##||5||##||-22||##||1||##||12||##||25||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||uppercase||##||Radley||##||||##||||##||1||##||30||##||14||##||||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||Cardo||##||0||##||0||##||1||##||35||##||35||##||1||##||0||##||-10||##||0||##||1||##||||##||rgb(255, 255, 255)||##||100||##||14||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||center||##||Allerta||##||0||##||10||##||1px||##||rgb(255, 255, 255)||##||1||##||||##||||##||||##||rgb(62, 64, 64)||##||bold||##||Shanti||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||||##||||##||2||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||2||##||rgba(0, 252, 46, 0.8)||##||rgba(18, 18, 18, 0.8)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||100||##||||##||20||##||40||##||5||##||10||##||||##||Save";
      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";
    }

    $members = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY name ASC', ARRAY_A);
    $membersId = "";
    foreach ($members as $member) {
       if ($membersId) {
          $membersId .= ",";
       }
       $membersId .= $member['id'];
    }

    $wpdb->query($wpdb->prepare("INSERT INTO {$style_table} (name, style_name, css, template_order, memberid) VALUES ( %s, %s, %s, %s, %s)", array($name, $style_name, $css, $temp_orders, $membersId)));
    $redirect_id = $wpdb->insert_id;

    if ($redirect_id == 0) {
      $url = admin_url("admin.php?page=twss-team-with-skills-slider");
    } else if ($redirect_id != 0) {
      $url = admin_url("admin.php?page=twss-template-11-20&styleid=$redirect_id");
    }
    echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
    exit;
  }
}

//Load Image
$arr = array(
  plugin_dir_url(dirname(__FILE__)) . 'assets/image/1.jpg' . "||||" . plugin_dir_url(dirname(__FILE__)) . 'assets/image/1_hover.jpg',

  plugin_dir_url(dirname(__FILE__)) . 'assets/image/2.jpg' . "||||" . plugin_dir_url(dirname(__FILE__)) . 'assets/image/2_hover.jpg',

  plugin_dir_url(dirname(__FILE__)) . 'assets/image/3.jpg' . "||||" . plugin_dir_url(dirname(__FILE__)) . 'assets/image/3_hover.jpg',

  plugin_dir_url(dirname(__FILE__)) . 'assets/image/4.jpg' . "||||" . plugin_dir_url(dirname(__FILE__)) . 'assets/image/4_hover.jpg',

  plugin_dir_url(dirname(__FILE__)) . 'assets/image/5.jpg' . "||||" . plugin_dir_url(dirname(__FILE__)) . 'assets/image/5_hover.jpg',

  plugin_dir_url(dirname(__FILE__)) . 'assets/image/6.jpg' . "||||" . plugin_dir_url(dirname(__FILE__)) . 'assets/image/6_hover.jpg',
);

$icons = array(
  '<li><a href="https://www.linkedin.com" class="open_in_new_tab_class twss-social-link-linkedin" title="Linkedin" target="_blank" id=""><i class="fab fa-linkedin-in"></i></a></li>',
  '<li><a href="https://www.facebook.com" class="open_in_new_tab_class twss-social-link-facebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>',
  '<li><a href="https://www.youtube.com" class="open_in_new_tab_class twss-social-link-youtube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>',
  '<li><a href="https://www.twitter.com" class="open_in_new_tab_class twss-social-link-twitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>',
  '<li><a href="https://www.google.com" class="open_in_new_tab_class twss-social-link-google" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>',
  '<li><a href="https://www.pinterest.com" class="open_in_new_tab_class twss-social-link-pinterest" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>',
  '<li><a href="https://www.whatsapp.com" class="open_in_new_tab_class twss-social-link-whatsapp" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>');
  ?>
  <div class="twss-6310">
    <h1>Select Template</h1>

<!-- ******************************************
template 11 start
****************************************** -->
<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_11">
        <div class="twss_6310_team_style_11_img_border">
          <div class="twss_6310_team_style_11_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
           <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
        </div>
        <div class="twss_6310_team_style_11_caption">
          <div class="twss_6310_team_style_11_title">William</div>
          <div class="twss_6310_team_style_11_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "11") ?>
        </div>
      </div>
    </div>
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_11">
        <div class="twss_6310_team_style_11_img_border">
          <div class="twss_6310_team_style_11_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
        </div>
        <div class="twss_6310_team_style_11_caption">
          <div class="twss_6310_team_style_11_title">William</div>
          <div class="twss_6310_team_style_11_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "11") ?>
        </div>

      </div>

    </div>
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_11">
        <div class="twss_6310_team_style_11_img_border">
          <div class="twss_6310_team_style_11_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
        </div>
        <div class="twss_6310_team_style_11_caption">
          <div class="twss_6310_team_style_11_title">William</div>
          <div class="twss_6310_team_style_11_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "11") ?>
        </div>

      </div>

    </div>
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_11">
        <div class="twss_6310_team_style_11_img_border">
          <div class="twss_6310_team_style_11_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
        </div>
        <div class="twss_6310_team_style_11_caption">
          <div class="twss_6310_team_style_11_title">William</div>
          <div class="twss_6310_team_style_11_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "11") ?>
        </div>

      </div>

    </div>
  </div>
  <div class="twss-6310-template-list">
    Template 11
    <button type="button" class="twss-btn-success twss_choosen_style"  id="template-11">Create Team</button>
  </div>
  <br class="twss-6310-clear" />
</div>
<!-- ******************************************
template 11 end
****************************************** -->
<!-- ******************************************
template 12 start
****************************************** -->
<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_12">
        <div class="twss_6310_team_style_12_img">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          <div class="twss_6310_team_style_12_team_social_icon">
            <ul class="twss_6310_team_style_12_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="twss_6310_team_style_12_caption">
          <div class="twss_6310_team_style_12_title">Williamson</div>
          <div class="twss_6310_team_style_12_designation">web developer</div>
        </div>
        <div class="twss_6310_team_style_12_description">
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.
        </div>
        <ul class="twss_6310_team_style_12_contact">
          <li><i class="fas fa-envelope"></i> email@example.com</li>
          <li><i class="fas fa-link"></i> http://www.example.com</li>
          <li><i class="fas fa-phone-square"></i> +1 12345678</li>
        </ul>
      </div>
    </div>
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_12">
        <div class="twss_6310_team_style_12_img">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          <div class="twss_6310_team_style_12_team_social_icon">
            <ul class="twss_6310_team_style_12_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="twss_6310_team_style_12_caption">
          <div class="twss_6310_team_style_12_title">Williamson</div>
          <div class="twss_6310_team_style_12_designation">web developer</div>
          <div class="twss_6310_team_style_12_description">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.
          </div>
          <ul class="twss_6310_team_style_12_contact">
            <li><i class="fas fa-envelope"></i> email@example.com</li>
            <li><i class="fas fa-link"></i> http://www.example.com</li>
            <li><i class="fas fa-phone-square"></i> +1 12345678</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_12">
        <div class="twss_6310_team_style_12_img">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          <div class="twss_6310_team_style_12_team_social_icon">
            <ul class="twss_6310_team_style_12_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="twss_6310_team_style_12_caption">
          <div class="twss_6310_team_style_12_title">Williamson</div>
          <div class="twss_6310_team_style_12_designation">web developer</div>
          <div class="twss_6310_team_style_12_description">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.
          </div>
          <ul class="twss_6310_team_style_12_contact">
            <li><i class="fas fa-envelope"></i> email@example.com</li>
            <li><i class="fas fa-link"></i> http://www.example.com</li>
            <li><i class="fas fa-phone-square"></i> +1 12345678</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_12">
        <div class="twss_6310_team_style_12_img">
          <?php $temp = explode("||||", $arr[3]);  ?>
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          <div class="twss_6310_team_style_12_team_social_icon">
            <ul class="twss_6310_team_style_12_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="twss_6310_team_style_12_caption">
          <div class="twss_6310_team_style_12_title">Williamson</div>
          <div class="twss_6310_team_style_12_designation">web developer</div>
        </div>
        <div class="twss_6310_team_style_12_description">
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.
        </div>
        <ul class="twss_6310_team_style_12_contact">
          <li><i class="fas fa-envelope"></i> email@example.com</li>
          <li><i class="fas fa-link"></i> http://www.example.com</li>
          <li><i class="fas fa-phone-square"></i> +1 12345678</li>
        </ul>
      </div>
    </div>

  </div>

  <div class="twss-6310-template-list">
    Template 12
    <button type="button" class="twss-btn-success twss_choosen_style"  id="template-12">Create Team</button>
  </div>
  <br class="twss-6310-clear" />
</div>
<!-- ******************************************
template 12 end
****************************************** -->

<!-- ******************************************
template 13 end
****************************************** -->

<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_13">
        <div class="twss_6310_team_style_13_img">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
        </div>
        <div class="twss_6310_team_style_13_caption">
          <div class="twss_6310_team_style_13_title">William</div>
          <div class="twss_6310_team_style_13_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "13") ?>
        </div>
      </div>
    </div>

    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_13">
        <div class="twss_6310_team_style_13_img">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          
        </div>
        <div class="twss_6310_team_style_13_caption">
          <div class="twss_6310_team_style_13_title">William</div>
          <div class="twss_6310_team_style_13_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "13") ?>
        </div>
      </div>
    </div>
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_13">
        <div class="twss_6310_team_style_13_img">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          
        </div>
        <div class="twss_6310_team_style_13_caption">
          <div class="twss_6310_team_style_13_title">William</div>
          <div class="twss_6310_team_style_13_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "13") ?>
        </div>
      </div>
    </div>

    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_13">
        <div class="twss_6310_team_style_13_img">
          <?php $temp = explode("||||", $arr[3]);  ?>
          <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          
        </div>

        <div class="twss_6310_team_style_13_caption">
          <div class="twss_6310_team_style_13_title">William</div>
          <div class="twss_6310_team_style_13_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "13") ?>
        </div>
      </div>

    </div>
  </div>
  <div class="twss-6310-template-list">
    Template 13
    <button type="button" class="twss-btn-success twss_choosen_style"  id="template-13">Create Team</button>
  </div>
  <br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 13 end
****************************************** -->


<!-- ******************************************
template 14 end
****************************************** -->

<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
    <div class="twss-6310-col-2">
      <div class="twss_6310_team_style_14">
        <div class="twss-6310-col-left">
        <div class="twss_6310_team_style_14_img">
          <?php $temp = explode("||||", $arr[0]);  ?>
          <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          
        </div>
      </div>
      <div class="twss-6310-col-right">
        <div class="twss_6310_team_style_14_caption">
          <div class="twss_6310_team_style_14_title">William</div>
          <div class="twss_6310_team_style_14_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "14") ?>
        </div>
      </div>
      </div>
    </div>
    <div class="twss-6310-col-2">
      <div class="twss_6310_team_style_14">
        <div class="twss-6310-col-left">
        <div class="twss_6310_team_style_14_img">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          
        </div>
      </div>
      <div class="twss-6310-col-right">
        <div class="twss_6310_team_style_14_caption">
          <div class="twss_6310_team_style_14_title">William</div>
          <div class="twss_6310_team_style_14_designation">Web Desginer</div>
          <?php echo twss_6310_contacts_skills_social($icons, "14") ?>
        </div>
      </div>
      </div>
    </div>
  </div>
  <div class="twss-6310-template-list">
    Template 14
    <button type="button" class="twss-btn-success twss_choosen_style"  id="template-14">Create Team</button>
  </div>
  <br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 14 end
****************************************** -->



<!-- ******************************************
template 15 start
****************************************** -->
<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_15">
        <div class="twss_6310_team_style_15_details">
          ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
        <div class="twss_6310_team_style_15_caption">
          <div class="twss_6310_team_style_15_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_15_content_group">            
            <div class="twss_6310_team_style_15_title">Davit Miller</div>
            <div class="twss_6310_team_style_15_designation">CEO, Skyline</div>
          </div>
        </div>
        <div class="twss_6310_team_style_15_team_social_icon">
          <ul class="twss_6310_team_style_15_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
        </div> 
      </div>
    </div>

    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_15">
        <div class="twss_6310_team_style_15_details">
          ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
        <div class="twss_6310_team_style_15_caption">
          <div class="twss_6310_team_style_15_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
           <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_15_content_group">            
            <div class="twss_6310_team_style_15_title">Davit Miller</div>
            <div class="twss_6310_team_style_15_designation">CEO, Skyline</div>
          </div>
        </div>
        <div class="twss_6310_team_style_15_team_social_icon">
          <ul class="twss_6310_team_style_15_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
        </div> 
      </div>
    </div>
    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_15">
        <div class="twss_6310_team_style_15_details">
          ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
        <div class="twss_6310_team_style_15_caption">
          <div class="twss_6310_team_style_15_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_15_content_group">            
            <div class="twss_6310_team_style_15_title">Davit Miller</div>
            <div class="twss_6310_team_style_15_designation">CEO, Skyline</div>
          </div>
        </div>
        <div class="twss_6310_team_style_15_team_social_icon">
          <ul class="twss_6310_team_style_15_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
        </div> 
      </div>
    </div>
  </div>
  <div class="twss-6310-template-list">
    Template 15
    <button type="button" class="twss-btn-success twss_choosen_style"  id="template-15">Create Team</button>
  </div>
  <br class="twss-6310-clear" />
</div>


 <!-- ******************************************
  template 15 end
  ****************************************** -->


<!-- ******************************************
template 15 end
****************************************** -->



<!-- ******************************************
template 16 start
****************************************** -->

<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">

    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_16">
        <div class="twss_6310_team_style_16-content">
          <div class="twss_6310_team_style_16_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>          
          <div class="twss_6310_team_style_16-content-group">
            <div class="twss_6310_team_style_16-content-member">Davit Miller</div>
            <div class="twss_6310_team_style_16-content-designation">Marketing Manager</div>
          </div>      
        </div>
        <div class="twss_6310_team_style_16_caption">
          <div class="twss_6310_team_style_16_details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id accusamus provident, neque inventore nisi ad nemo dicta autem molestiae fuga!</div>
          <?php echo twss_6310_contacts_skills_social($icons, '16') ?>
        </div>
      </div>
    </div>


    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_16">
        <div class="twss_6310_team_style_16-content">
          <div class="twss_6310_team_style_16_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>          
          <div class="twss_6310_team_style_16-content-group">
            <div class="twss_6310_team_style_16-content-member">Davit Miller</div>
            <div class="twss_6310_team_style_16-content-designation">Marketing Manager</div>
            
          </div>      
        </div>
        <div class="twss_6310_team_style_16_caption">
          <div class="twss_6310_team_style_16_details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id accusamus provident, neque inventore nisi ad nemo dicta autem molestiae fuga!</div>
          <?php echo twss_6310_contacts_skills_social($icons, '16') ?>
        </div>
      </div>
    </div>


    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_16">
        <div class="twss_6310_team_style_16-content">
          <div class="twss_6310_team_style_16_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>          
          <div class="twss_6310_team_style_16-content-group">
            <div class="twss_6310_team_style_16-content-member">Davit Miller</div>
            <div class="twss_6310_team_style_16-content-designation">Marketing Manager</div>
            
          </div>      
        </div>
        <div class="twss_6310_team_style_16_caption">
          <div class="twss_6310_team_style_16_details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id accusamus provident, neque inventore nisi ad nemo dicta autem molestiae fuga!</div>
          <?php echo twss_6310_contacts_skills_social($icons, '16') ?>
        </div>
      </div>
    </div>
  </div>
  <div class="twss-6310-template-list">
    Template 16
    <button type="button" class="twss-btn-success twss_choosen_style"  id="template-16">Create Team</button>
  </div>
  <br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 16 end
****************************************** -->



<!-- ******************************************
template 17 start
****************************************** -->

<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">

    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_17">
        <svg version="1.1" id="wavey-top-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
          <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
            <stop  offset="0" />
            <stop  offset="1" />
          </linearGradient>
          <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
        </svg>
        <div class="twss_6310_team_style_17_top">
          <div class="twss_6310_team_style_17_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>          
          <div class="twss_6310_team_style_17_content_group">
            <div class="twss_6310_team_style_17_title">Davit Miller</div>
            <div class="twss_6310_team_style_17_designation">Marketing Manager</div>
          </div>      
        </div>
        <div class="twss_6310_team_style_17_caption">
          <div class="twss_6310_team_style_17_details">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolore, porro minima tempore, ipsam impedit rem veniam molestias aspernatur et.
          </div>
          <?php echo twss_6310_contacts_skills_social($icons, '17') ?>
        </div>
      </div>
    </div>
    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_17">
        <svg version="1.1" id="wavey-top-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
          <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
            <stop  offset="0" />
            <stop  offset="1" />
          </linearGradient>
          <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
        </svg>
        <div class="twss_6310_team_style_17_top">
          <div class="twss_6310_team_style_17_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>          
          <div class="twss_6310_team_style_17_content_group">
            <div class="twss_6310_team_style_17_title">Davit Miller</div>
            <div class="twss_6310_team_style_17_designation">Marketing Manager</div>
          </div>      
        </div>
        <div class="twss_6310_team_style_17_caption">
          <div class="twss_6310_team_style_17_details">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolore, porro minima tempore, ipsam impedit rem veniam molestias aspernatur et.
          </div>
          <?php echo twss_6310_contacts_skills_social($icons, '17') ?>
        </div>
      </div>
    </div>
    <div class="twss-6310-col-3">
      <div class="twss_6310_team_style_17">
        <svg version="1.1" id="wavey-top-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
          <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
            <stop  offset="0" />
            <stop  offset="1" />
          </linearGradient>
          <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
        </svg>
        <div class="twss_6310_team_style_17_top">
          <div class="twss_6310_team_style_17_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>          
          <div class="twss_6310_team_style_17_content_group">
            <div class="twss_6310_team_style_17_title">Davit Miller</div>
            <div class="twss_6310_team_style_17_designation">Marketing Manager</div>
          </div>      
        </div>
        <div class="twss_6310_team_style_17_caption">
          <div class="twss_6310_team_style_17_details">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolore, porro minima tempore, ipsam impedit rem veniam molestias aspernatur et.
          </div>
          <?php echo twss_6310_contacts_skills_social($icons, '17') ?>
        </div>
      </div>
    </div>

  </div>
  <div class="twss-6310-template-list">
    Template 17
    <button type="button" class="twss-btn-success twss_choosen_style"  id="template-17">Create Team</button>
  </div>
  <br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 17 end
****************************************** -->
    <!-- ******************************************
    template 18 start
    ****************************************** -->

  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_18">
          <div class="twss_6310_team_style_18_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>

          <div class="twss_6310_team_style_18_caption">
           <div class="twss_6310_team_style_18_title">JHON</div>
           <div class="twss_6310_team_style_18_border"></div>
           <div class="twss_6310_team_style_18_designation">Web Desginer</div>
           <?php echo twss_6310_contacts_skills_social($icons, '18') ?>
       </div>
     </div>
   </div>
     <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_18">
        <div class="twss_6310_team_style_18_img">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[0] ?>" alt="Team Showcase">
        </div>

        <div class="twss_6310_team_style_18_caption">
         <div class="twss_6310_team_style_18_title">JHON</div>
         <div class="twss_6310_team_style_18_border"></div>
         <div class="twss_6310_team_style_18_designation">Web Desginer</div>
         <?php echo twss_6310_contacts_skills_social($icons, '18') ?>
     </div>
   </div>
 </div>
 <div class="twss-6310-col-4">
  <div class="twss_6310_team_style_18">
    <div class="twss_6310_team_style_18_img">
      <?php $temp = explode("||||", $arr[2]);  ?>
      <img src="<?php echo $temp[0] ?>" alt="Team Showcase">
    </div>
    <div class="twss_6310_team_style_18_caption">
      <div class="twss_6310_team_style_18_title">JHON</div>
      <div class="twss_6310_team_style_18_border"></div>
      <div class="twss_6310_team_style_18_designation">Web Desginer</div>
      <?php echo twss_6310_contacts_skills_social($icons, '18') ?>
   </div>
 </div>
</div>
<div class="twss-6310-col-4">
 <div class="twss_6310_team_style_18">
   <div class="twss_6310_team_style_18_img">
     <?php $temp = explode("||||", $arr[2]);  ?>
     <img src="<?php echo $temp[0] ?>" alt="Team Showcase">
   </div>
   <div class="twss_6310_team_style_18_caption">
     <div class="twss_6310_team_style_18_title">JHON</div>
     <div class="twss_6310_team_style_18_border"></div>
     <div class="twss_6310_team_style_18_designation">Web Desginer</div>
     <?php echo twss_6310_contacts_skills_social($icons, '18') ?>
  </div>
</div>
</div>
</div>
<div class="twss-6310-template-list">
Template 18
<button type="button" class="twss-btn-success twss_choosen_style"  id="template-18">Create Team</button>
</div>
<br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 18 end
****************************************** -->


      <!-- ******************************************
      template 2519 start
      ****************************************** -->

  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
     <div class="twss_6310_team_style_19_background">
      <div class="twss-6310-col-4">

        <div class="twss_6310_team_style_19">
         <div class="twss_6310_team_style_19_title">JHON</div>
         <div class="twss_6310_team_style_19_img">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
        </div>
        <div class="twss_6310_team_style_19_designation">Web Desginer</div>
        <div class="twss_6310_team_style_19_caption">
          <?php echo twss_6310_contacts_skills_social($icons, '19') ?>
       </div>
     </div>
   </div>

   <div class="twss-6310-col-4">
     <div class="twss_6310_team_style_19">
      <div class="twss_6310_team_style_19_title">JHON</div>
      <div class="twss_6310_team_style_19_img">
       <?php $temp = explode("||||", $arr[2]);  ?>
       <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
     </div>
        <div class="twss_6310_team_style_19_designation">Web Desginer</div>
        <div class="twss_6310_team_style_19_caption">
           <?php echo twss_6310_contacts_skills_social($icons, '19') ?>
        </div>
      </div>
    </div>

    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_19">
       <div class="twss_6310_team_style_19_title">JHON</div>
       <div class="twss_6310_team_style_19_img">
        <?php $temp = explode("||||", $arr[3]);  ?>
        <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
      </div>
      <div class="twss_6310_team_style_19_designation">Web Desginer</div>
      <div class="twss_6310_team_style_19_caption">
       <?php echo twss_6310_contacts_skills_social($icons, '19') ?>
     </div>
   </div>
 </div>
    <div class="twss-6310-col-4">
     <div class="twss_6310_team_style_19">
      <div class="twss_6310_team_style_19_title">JHON</div>
      <div class="twss_6310_team_style_19_img">
       <?php $temp = explode("||||", $arr[0]);  ?>
       <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
       <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
     </div>
     <div class="twss_6310_team_style_19_designation">Web Desginer</div>
     <div class="twss_6310_team_style_19_caption">
       <?php echo twss_6310_contacts_skills_social($icons, '19') ?>
    </div>
    </div>
    </div>
  </div>
</div>
<div class="twss-6310-template-list">
  Template 19
  <button type="button" class="twss-btn-success twss_choosen_style"  id="template-19">Create Team</button>
</div>
<br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 19 end
****************************************** -->


<!-- ******************************************
template 20 start
****************************************** -->

<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
   <div class="twss_6310_team_style_20_background">
    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_20">
        <div class="twss_6310_team_style_20_title">JHON DOE</div>
        <div id="pointer"></div>
        <div class="twss_6310_team_style_20_img">
          <?php $temp = explode("||||", $arr[1]);  ?>
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          <div class="twss_6310_team_style_20_designation">Web Desginer</div>
        </div>
        <div class="twss_6310_team_style_20_caption">
          <?php echo twss_6310_contacts_skills_social($icons, '20') ?>
      </div>
    </div>
  </div>


  <div class="twss-6310-col-4">
    <div class="twss_6310_team_style_20">
      <div class="twss_6310_team_style_20_title">JHON DOE</div>
      <div id="pointer"></div>
      <div class="twss_6310_team_style_20_img">
        <?php $temp = explode("||||", $arr[0]);  ?>
        <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
        <div class="twss_6310_team_style_20_designation">Web Desginer</div>
      </div>
      <div class="twss_6310_team_style_20_caption">
        <?php echo twss_6310_contacts_skills_social($icons, '20') ?>
    </div>
  </div>
</div>
<div class="twss-6310-col-4">
  <div class="twss_6310_team_style_20">
    <div class="twss_6310_team_style_20_title">JHON DOE</div>
    <div id="pointer"></div>
    <div class="twss_6310_team_style_20_img">
      <?php $temp = explode("||||", $arr[3]);  ?>
      <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
      <div class="twss_6310_team_style_20_designation">Web Desginer</div>
    </div>
    <div class="twss_6310_team_style_20_caption">
      <?php echo twss_6310_contacts_skills_social($icons, '20') ?>
  </div>
</div>
</div>


    <div class="twss-6310-col-4">
      <div class="twss_6310_team_style_20">
        <div class="twss_6310_team_style_20_title">JHON DOE</div>
        <div id="pointer"></div>
        <div class="twss_6310_team_style_20_img">
          <?php $temp = explode("||||", $arr[2]);  ?>
          <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          <div class="twss_6310_team_style_20_designation">Web Desginer</div>
        </div>
        <div class="twss_6310_team_style_20_caption">
          <?php echo twss_6310_contacts_skills_social($icons, '20') ?>
      </div>
    </div>
  </div>

</div>
</div>
<div class="twss-6310-template-list">
  Template 20
  <button type="button" class="twss-btn-success twss_choosen_style"  id="template-20">Create Team</button>
</div>
<br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 20 end
****************************************** -->
<!-- ******************************************
template 21 start
****************************************** -->

<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
   <div class="twss_6310_team_style_21_background">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_21">
          <div class="twss_6310_team_style_21_img">
              <div class="hexa">
                <div class="hex1">
                  <div class="hex2">
                    <?php $temp = explode("||||", $arr[2]);  ?>
                    <img src="<?php echo $temp[1] ?>" class="twss_front_image" alt="Team with Skills and Slider" width="320" height="320">
                    <img src="<?php echo $temp[0] ?>" width="320" height="320" class="twss_hover_image" alt="Team Showcase">
                  </div>
                </div>
              </div>
          </div>
          <div class="twss_6310_team_style_21_caption">
            <div class="twss_6310_team_style_21_title">JHON DOE</div>
            <div class="twss_6310_team_style_21_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '21') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_21">
          <div class="twss_6310_team_style_21_img">
            <?php $temp = explode("||||", $arr[1]);?>
              <div class="hexa">
                <div class="hex1">
                  <div class="hex2">
                    <img src="<?php echo $temp[1] ?>"  width="320" height="320" class="twss_front_image" alt="Team with Skills and Slider">
                    <img src="<?php echo $temp[0] ?>"  width="320" height="320" class="twss_hover_image" alt="Team Showcase">
                  </div>
                </div>
              </div>
          </div>
          <div class="twss_6310_team_style_21_caption">
            <div class="twss_6310_team_style_21_title">JHON DOE</div>
            <div class="twss_6310_team_style_21_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '21') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_21">
          <div class="twss_6310_team_style_21_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
              <div class="hexa">
                <div class="hex1">
                  <div class="hex2">
                    <img src="<?php echo $temp[1] ?>"  width="320" height="320" class=" twss_front_image" alt="Team with Skills and Slider">
                    <img src="<?php echo $temp[0] ?>"  width="320" height="320" class=" twss_hover_image" alt="Team Showcase">
                  </div>
                </div>
              </div>
          </div>
          <div class="twss_6310_team_style_21_caption">
            <div class="twss_6310_team_style_21_title">JHON DOE</div>
            <div class="twss_6310_team_style_21_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '21') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_21">
          <div class="twss_6310_team_style_21_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
              <div class="hexa">
                <div class="hex1">
                  <div class="hex2">
                    <img src="<?php echo $temp[1] ?>"  width="320" height="320" class=" twss_front_image" alt="Team with Skills and Slider">
                    <img src="<?php echo $temp[0] ?>"  width="320" height="320" class=" twss_hover_image" alt="Team Showcase">
                  </div>
                </div>
              </div>
          </div>
          <div class="twss_6310_team_style_21_caption">
            <div class="twss_6310_team_style_21_title">JHON DOE</div>
            <div class="twss_6310_team_style_21_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '21') ?>
        </div>
      </div>
    </div>
</div>
</div>
<div class="twss-6310-template-list">
  Template 21
  <button type="button" class="twss-btn-success twss_choosen_style"  id="template-21">Create Team</button>
</div>
<br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 21 end
****************************************** -->
<!-- ******************************************
template 22 start
****************************************** -->

<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
   <div class="twss_6310_team_style_22_background">

      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_22">
          <div class="twss_6310_team_style_22_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_22_caption">
            <div class="twss_6310_team_style_22_title">JHON DOE</div>
            <div class="twss_6310_team_style_22_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '22') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_22">
          <div class="twss_6310_team_style_22_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_22_caption">
            <div class="twss_6310_team_style_22_title">JHON DOE</div>
            <div class="twss_6310_team_style_22_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '22') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_22">
          <div class="twss_6310_team_style_22_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_22_caption">
            <div class="twss_6310_team_style_22_title">JHON DOE</div>
            <div class="twss_6310_team_style_22_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '22') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_22">
          <div class="twss_6310_team_style_22_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_22_caption">
            <div class="twss_6310_team_style_22_title">JHON DOE</div>
            <div class="twss_6310_team_style_22_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '22') ?>
        </div>
      </div>
    </div>
     
</div>
</div>
<div class="twss-6310-template-list">
  Template 22
  <button type="button" class="twss-btn-success twss_choosen_style"  id="template-22">Create Team</button>
</div>
<br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 22 end
****************************************** -->

<!-- ******************************************
template 23 start
****************************************** -->

<?php shuffle($arr); ?>
<div class="twss-6310-row twss-6310_team-style-boxed">
  <div class="twss-padding-15">
   <div class="twss_6310_team_style_23_background">

      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_23">
          <div class="twss_6310_team_style_23_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
             <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_23_caption">
            <div class="twss_6310_team_style_23_title">JHON DOE</div>
            <div class="twss_6310_team_style_23_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '23') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_23">
          <div class="twss_6310_team_style_23_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_23_caption">
            <div class="twss_6310_team_style_23_title">JHON DOE</div>
            <div class="twss_6310_team_style_23_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '23') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_23">
          <div class="twss_6310_team_style_23_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_23_caption">
            <div class="twss_6310_team_style_23_title">JHON DOE</div>
            <div class="twss_6310_team_style_23_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '23') ?>
        </div>
      </div>
    </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_23">
          <div class="twss_6310_team_style_23_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
             <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
          </div>
          <div class="twss_6310_team_style_23_caption">
            <div class="twss_6310_team_style_23_title">JHON DOE</div>
            <div class="twss_6310_team_style_23_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, '23') ?>
        </div>
      </div>
    </div>
</div>
</div>
<div class="twss-6310-template-list">
  Template 23
  <button type="button" class="twss-btn-success twss_choosen_style"  id="template-23">Create Team</button>
</div>
<br class="twss-6310-clear" />
</div>

<!-- ******************************************
template 23 end
****************************************** -->

    <div id="twss-6310-modal-add" class="twss-6310-modal" style="display: none">
      <div class="twss-6310-modal-content twss-6310-modal-sm">
        <form action="" method="post">
          <div class="twss-6310-modal-header">
            Create Team
            <div class="twss-6310-close">&times;</div>
          </div>
          <div class="twss-6310-modal-body-form">
            <?php wp_nonce_field("twss-nonce-field") ?>
            <input type="hidden" name="style" id="twss-style-hidden" />
            <table border="0" width="100%" cellpadding="10" cellspacing="0">
              <tr>
                <td width="90"><label class="twss-form-label" for="icon_name">Team Name:</label></td>
                <td><input type="text" required="" name="style_name" id="style_name" value="" class="twss-form-input" placeholder="Team Name" style="width: 265px" /></td>
              </tr>
            </table>
          </div>
          <div class="twss-6310-modal-form-footer">
            <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
            <input type="submit" name="submit" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Save"/>
          </div>
        </form>
        <br class="twss-6310-clear" />
      </div>
    </div>

    <script>
      var $ = jQuery;
      $(document).ready(function () {
        $("body").on("click", ".twss_choosen_style", function () {
          $("#twss-6310-modal-add").fadeIn(500);
          $("#twss-style-hidden").val($(this).attr("id"));
          jQuery("body").css({
            "overflow": "hidden"
          });
          return false;
        });

        $("body").on("click", ".twss-6310-close, .twss-btn-danger", function () {
          $("#twss-6310-modal-add").fadeOut(500);
          jQuery("body").css({
            "overflow": "initial"
          });
        });
        $(window).click(function (event) {
          if (event.target == document.getElementById('twss-6310-modal-add')) {
            $("#twss-6310-modal-add").fadeOut(500);
            jQuery("body").css({
              "overflow": "initial"
            });
          }
        });
      });
    </script>
