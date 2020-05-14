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

    if ($_POST['style'] == 'template-21') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!4||##||3||##||0||##||1||##||rgba(235, 235, 235, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||2||##||rgba(222, 222, 222, 0.8)||##||20||##||26||##||rgb(5, 5, 5)||##||rgb(23, 87, 71)||##||bold||##||uppercase||##||Shanti||##||3||##||15||##||14||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||15||##||0||##||35||##||35||##||1||##||0||##||0||##||10||##||1||##||12||##||capitalize||##||rgb(38, 35, 56)||##||normal||##||Shanti||##||18||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(252, 252, 252)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-22') {
      $css = "id,item_per_row,template_border_width,template_border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,description_font_size,description_line_height,description_font_color,description_font_weight,description_text_transform,description_font_family,description_margin_top,description_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,contact_font_size,contact_line_height,contact_font_color,contact_icon_color,contact_font_weight,contact_text_transform,contact_font_family,contact_border_width,contact_border_color,contact_margin_top,contact_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!26||##||3||##||1||##||rgba(232, 232, 232, 0.8)||##||rgba(232, 232, 232, 0.8)||##||0||##||1||##||rgba(232, 232, 232, 0.8)||##||22||##||0||##||rgb(12, 41, 2)||##||rgb(8, 0, 0)||##||bold||##||capitalize||##||Shanti||##||20||##||5||##||14||##||20||##||rgb(8, 10, 7)||##||normal||##||none||##||Shanti||##||0||##||15||##||14||##||20||##||rgb(92, 92, 92)||##||rgb(18, 18, 18)||##||normal||##||capitalize||##||Shanti||##||15||##||10||##||35||##||35||##||1||##||0||##||14||##||20||##||rgb(57, 61, 61)||##||rgb(19, 61, 4)||##||bold||##||capitalize||##||Shanti||##||1||##||rgba(213, 203, 203, 0.8)||##||0||##||10||##||||##||||##||||##||rgb(62, 64, 64)||##||bold||##||Shanti||##||||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-23') {
      $css ="id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-24') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-25') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-26') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    }else if ($_POST['style'] == 'template-27') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-28') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-29') {
      $css = "id,item_per_row,image_radius,border_width,border_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!5||##||3||##||0||##||0||##||rgba(255, 5, 5, 0.8)||##||rgba(240, 240, 240, 0.5)||##||0||##||0||##||rgba(204, 16, 16, 0.8)||##||22||##||35||##||rgb(5, 5, 5)||##||rgb(17, 59, 48)||##||bold||##||uppercase||##||Shanti||##||0||##||0||##||13||##||20||##||rgb(17, 59, 48)||##||rgb(5, 5, 5)||##||bold||##||capitalize||##||Shanti||##||0||##||0||##||35||##||35||##||1||##||0||##||0||##||0||##||1||##||14||##||capitalize||##||rgb(38, 35, 56)||##||bold||##||Shanti||##||25||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    } else if ($_POST['style'] == 'template-30') {
      $css = "id,item_per_row,image_radius,border_width,border_color,box_shadow_width,box_shadow_blur,box_shadow_color,member_font_size,member_line_height,member_font_color,member_background_color,member_font_weight,member_text_transform,member_font_family,description_font_size,description_line_height,description_font_color,description_font_weight,description_text_transform,description_font_family,description_margin_top,description_margin_bottom,designation_font_size,designation_line_height,designation_font_color,designation_background_color,designation_font_weight,designation_text_transform,designation_font_family,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,contact_font_size,contact_line_height,contact_font_color,contact_icon_color,contact_font_weight,contact_text_transform,contact_font_family,contact_margin_top,contact_margin_bottom,skills_activation,skills_font_size,skills_text_transform,skills_font_color,skills_font_weight,skills_font_family,skills_line_height,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,slider_activation,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,custom_css,update_style_change!!##!!21||##||3||##||0||##||1||##||rgba(227, 227, 227, 0.8)||##||0||##||5||##||rgba(227, 227, 227, 0.8)||##||22||##||30||##||rgb(255, 255, 255)||##||rgb(61, 58, 54)||##||bold||##||capitalize||##||Shanti||##||14||##||18||##||rgb(62, 64, 64)||##||100||##||none||##||Shanti||##||10||##||10||##||13||##||30||##||rgb(255, 255, 255)||##||rgb(255, 153, 0)||##||bold||##||capitalize||##||Shanti||##||35||##||35||##||1||##||0||##||0||##||0||##||14||##||20||##||rgb(62, 64, 64)||##||rgb(20, 56, 3)||##||100||##||capitalize||##||||##||0||##||10||##||||##||||##||||##||rgb(62, 64, 64)||##||bold||##||Shanti||##||||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||||##||Save";
    }

    $wpdb->query($wpdb->prepare("INSERT INTO {$style_table} (name, style_name, css) VALUES ( %s, %s, %s)", array($name, $style_name, $css)));
    $redirect_id = $wpdb->insert_id;

    if ($redirect_id == 0) {
      $url = admin_url("admin.php?page=twss-team-with-skills-slider");
    } else if ($redirect_id != 0) {
      $url = admin_url("admin.php?page=twss-template-01-10&styleid=$redirect_id");
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
          template 21 start
        ****************************************** -->
        <?php shuffle($arr); ?>
        <div class="wrapper">
            <h2 style="text-align:center;color:green">Style - 11</h2>
            <div class="wrapper_row">
          
              <div class="wpmt-6310-style-11">
                <div class="wpmt-6310-style-11-content">
                  <div class="wpmt-6310-style-11-content-img">
                    <img src="img/3.png" alt="">
                  </div>          
                  <div class="wpmt-6310-style-11-content-group">
                    <div class="wpmt-6310-style-11-content-member">Davit Miller</div>
                    <div class="wpmt-6310-style-11-content-designation">Marketing Manager</div>
                    <div class="wpmt-6310-style-11-star">
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                    </div>
                  </div>      
                </div>
                <div class="wpmt-6310-style-11-description">
                  <i class="fas fa-quote-left"></i>
                  ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum.
                </div>
              </div>
              <div class="wpmt-6310-style-11">
                <div class="wpmt-6310-style-11-content">
                  <div class="wpmt-6310-style-11-content-img">
                    <img src="img/1.png" alt="">
                  </div>          
                  <div class="wpmt-6310-style-11-content-group">
                    <div class="wpmt-6310-style-11-content-member">Davit Miller</div>
                    <div class="wpmt-6310-style-11-content-designation">Marketing Manager</div>
                    <div class="wpmt-6310-style-11-star">
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                    </div>
                  </div>      
                </div>
                <div class="wpmt-6310-style-11-description">
                  <i class="fas fa-quote-left"></i>
                  ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum.
                </div>
              </div>
              <div class="wpmt-6310-style-11">
                <div class="wpmt-6310-style-11-content">
                  <div class="wpmt-6310-style-11-content-img">
                    <img src="img/2.png" alt="">
                  </div>          
                  <div class="wpmt-6310-style-11-content-group">
                    <div class="wpmt-6310-style-11-content-member">Davit Miller</div>
                    <div class="wpmt-6310-style-11-content-designation">Marketing Manager</div>
                    <div class="wpmt-6310-style-11-star">
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-heart"></i>
                    </div>
                  </div>      
                </div>
                <div class="wpmt-6310-style-11-description">
                  <i class="fas fa-quote-left"></i>
                  ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum.
                </div>
              </div>
            </div>        
          </div>
    <!-- ******************************************
      template 21 end
    ****************************************** -->
    <!-- ******************************************
      template 12 start
    ****************************************** -->
    
   
    <!-- ******************************************
      template 12 end
    ****************************************** -->

  <!-- ******************************************
    template 13 end
  ****************************************** -->

     

  <!-- ******************************************
    template 13 end
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
