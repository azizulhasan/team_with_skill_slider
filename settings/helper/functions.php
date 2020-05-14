<?php
if (!function_exists('twss_6310_special_character_remove')) {
   function twss_6310_special_character_remove($data){
      $data = str_replace("\\", "", $data);
      return $data;
   }
}
if (!function_exists('twss_6310_extract_data')) {
   function twss_6310_extract_data($data)
   {
      $array_key = "";
      $array_value = "";
      $i = 0;

      foreach ($data as $key => $value) {
         if ($i >= 2) {
            if ($array_value) {
               $array_key .= ",";
               $array_value .= "||##||";
            }
            $array_key .= $key;
            if ($key == "custom_css") {
               $array_value .= $value;
            } else {
               $array_value .= sanitize_text_field($value);
            }
         }
         $i++;
      }
      return $array_key . "!!##!!" . $array_value;
   }
}


if (!function_exists('twss_6310_load_category')) {
   function twss_6310_load_category($id)
   {

      global $wpdb;
      $category_table = $wpdb->prefix . "twss_6310_category";
      $category = $wpdb->get_results("SELECT * FROM $category_table order by serial asc", ARRAY_A);
      $html = "<div class='twss_6310_category'>
    <div class='twss_6310_category_list twss_6310_category_list-{$id} twss_6310_category_list_active' twss-data-filter='all'>All</div>";
      foreach ($category as $value) {
         $html .= "<div class='twss_6310_category_list twss_6310_category_list-{$id}' twss-data-filter='{$value['c_name']}'>{$value['name']}</div>";
      }
      $html .= "</div>";
      return $html;
   }
}


if (!function_exists('twss_6310_skills_result')) {
   function twss_6310_skills_result($skills, $id, $cssData, $output = "")
   {
?>
      <div class="twss_6310_member_skills_wrapper_<?php echo $output; ?>">
         <?php
         $skills = explode("####||||####", $skills);
         $skl = 1;
         foreach ($skills as $skills) {
            $skills = explode("||||", $skills);
         ?>
            <div class="twss_6310_skills_label_<?php echo $output; ?>"><?php echo $skills[0] ?></div>
            <div class="twss_6310_skills_prog_<?php echo $output; ?>">
               <div class="twss_6310_fill_<?php echo $output; ?> fill-<?php echo $id . "-{$skl}-$output" ?>" data-progress-animation="<?php echo $skills[1] ?>%" data-appear-animation-delay="400" style="width: <?php echo $skills[1] ?>%;"></div>
            </div>
            <style>
               .fill-<?php echo $id . "-{$skl}-$output" ?> {
                  animation: mymove-<?php echo $id . "-{$skl}-$output" ?> 3s linear <?php echo ($cssData['progress_bar_animation']) ? 'infinite' : ''; ?>;
               }

               @keyframes mymove-<?php echo $id . "-{$skl}-$output" ?> {
                  0% {
                     background-position: 0 0;
                  }

                  100% {
                     background-position: 60px 0;
                  }
               }
            </style>
         <?php
            $skl++;
         }
         ?>
      </div>
   <?php
   }
}

if (!function_exists('twss_6310_contacts_skills_social')) {
   function twss_6310_contacts_skills_social($icons, $id, $social = true)
   {
      $html = "<ul class='twss_6310_team_style_contact'>
    <li><i class='fas fa-envelope'></i> email@example.com</li>
    <li><i class='fas fa-link'></i> http://www.example.com</li>
    <li><i class='fas fa-phone-square'></i> +1 12345678</li>
  </ul>";

      $html .= '<div class="twss_6310_member_skills_wrapper_">
      <div class="twss_6310_skills_label_">CSS</div>
<div class="twss_6310_skills_prog_">
  <div class="twss_6310_fill_ fill--1-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
</div>

      <div class="twss_6310_skills_label_">HTML</div>
<div class="twss_6310_skills_prog_">
  <div class="twss_6310_fill_ fill--2-" data-progress-animation="90%" data-appear-animation-delay="400" style="width: 90%;"></div>
</div>

      <div class="twss_6310_skills_label_">JavaScript</div>
<div class="twss_6310_skills_prog_">
  <div class="twss_6310_fill_ fill--3-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
</div>

  </div>';
  if ($social) {
      $html .= "<ul class='twss_6310_team_style_{$id}_social'>";

      shuffle($icons);
      for ($i = 0; $i < 4; $i++) {
          $html .=  $icons[$i];
      }
      $html .=  "</ul>";
  }
      return $html;
   }
}
if (!function_exists('twss_6310_skills_script')) {
    function twss_6310_skills_script($cssData, $id)
    {
      ?>
      <script>
         jQuery("body").on("click", ".activate-skills", function() {
      var val = parseInt(jQuery(this).val());
      jQuery(".activate-skills").removeClass("active");
      jQuery(this).addClass("active");
      jQuery("#skills_activation").val(val);
      if (val == 0) {
        jQuery(".twss_6310_member_skills_wrapper_<?php echo $id?>").hide();
      } else {
        jQuery(".twss_6310_member_skills_wrapper_<?php echo $id?>").show();
      }
    });
    jQuery("body").on("change", "#skills_font_size", function() {
      jQuery("<style type='text/css'>.twss_6310_skills_label_<?php echo $id ?>{ font-size:" + jQuery(this).val() + "px !important;} </style>").appendTo(".twss-preview-box");
    });

    jQuery("body").on("change", "#skills_text_transform", function() {
      jQuery("<style type='text/css'>.twss_6310_skills_label_<?php echo $id ?> { text-transform:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("body").on("change", "#skills_font_color", function() {
      jQuery("<style type='text/css'>.twss_6310_skills_label_<?php echo $id ?> { color:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("body").on("change", "#skills_font_hover_color", function() {
       var value = jQuery(this).val();
      jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $id; ?>:hover .twss_6310_skills_label_<?php echo $id ?>{ color:"+value+";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("body").on("change", "#skills_font_weight", function() {
      jQuery("<style type='text/css'>.twss_6310_skills_label_<?php echo $id ?> { font-weight:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("body").on("change", "#skills_font_family", function() {
      var value = jQuery(this).val().replace(/\+/g, ' ');
      value = value.split(':');
      jQuery("<style type='text/css'>.twss_6310_skills_label_<?php echo $id ?> { font-family:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("body").on("change", "#skills_line_height", function() {
      jQuery("<style type='text/css'>.twss_6310_skills_label_<?php echo $id ?> { line-height:" + jQuery(this).val() + "px;} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("body").on("change", "#progress_bar_height", function() {
      jQuery("<style type='text/css'>.twss_6310_skills_prog_<?php echo $id ?> { height:" + jQuery(this).val() + "px;} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("body").on("change", "#progress_bar_border_radius", function() {
      var value = jQuery(this).val() + "px";
      jQuery("<style type='text/css'>.twss_6310_skills_prog_<?php echo $id ?> { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("#progress_bar_border_size").on("change", function() {
      var value = jQuery(this).val() + "px";
      jQuery("<style type='text/css'>.twss_6310_skills_prog_<?php echo $id ?> { border-width:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("#progress_bar_border_color").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.twss_6310_skills_prog_<?php echo $id ?>  { border-color:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });

    jQuery("#progress_bar_background_color").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.twss_6310_skills_prog_<?php echo $id ?>  { background-color:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    
    jQuery("#twss_progress_bar_margin_top").on("change", function() {
      var value = jQuery(this).val() + "px";
      console.log(value)
      jQuery("<style type='text/css'>.twss_6310_member_skills_wrapper_<?php echo $id ?> { margin-top:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    jQuery("#twss_progress_bar_margin_bottom").on("change", function() {
      var value = jQuery(this).val() + "px";
      console.log(value)
      jQuery("<style type='text/css'>.twss_6310_member_skills_wrapper_<?php echo $id ?>{ margin-bottom:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });


    jQuery("#progress_bar_type, #progress_bar_color, #progress_bar_alternate_color, #progress_bar_animation").on("change", function() {
      var pbt = parseInt(jQuery("#progress_bar_type").val());
      var pb_color = jQuery("#progress_bar_color").val();
      var pb_alt_color = jQuery("#progress_bar_alternate_color").val();
      var pb_animation = parseInt(jQuery("#progress_bar_animation").val());

      if(pbt){
        jQuery(".striped_show").show();
        //
        if(pb_animation){
          jQuery("<style type='text/css'>.twss_6310_fill_<?php echo $id ?>  { animation-iteration-count: infinite !important;} </style>").appendTo(".twss_6310_tabs_panel_preview");
        }
        else{
          jQuery("<style type='text/css'>.twss_6310_fill_<?php echo $id ?>  { animation-iteration-count: 0 !important;} </style>").appendTo(".twss_6310_tabs_panel_preview");
        }

        //Set Progress Bar Color
        jQuery("<style type='text/css'>.twss_6310_fill_<?php echo $id ?>  { background-color:" + pb_color + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");

        //Set Progress Bar Alternate Color
        pb_alt_color = "linear-gradient(135deg, " + pb_alt_color + " 25%, transparent 25%, transparent 50%, " + pb_alt_color + " 50%, " + pb_alt_color + " 75%, transparent 75%, transparent)";
        jQuery("<style type='text/css'>.twss_6310_fill_<?php echo $id ?>  { background-image:" + pb_alt_color + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");

      }
      else{
        jQuery(".striped_show").hide();
        //Stop Progress Animation
        jQuery("<style type='text/css'>.twss_6310_fill_<?php echo $id ?>  { animation-iteration-count: 0 !important;} </style>").appendTo(".twss_6310_tabs_panel_preview");

        //Set Progress Bar Color
        jQuery("<style type='text/css'>.twss_6310_fill_<?php echo $id ?>  { background-color:" + pb_color + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");

        //Set Progress Bar and Alternate Color are same
        pb_color = "linear-gradient(135deg, " + pb_color + " 25%, transparent 25%, transparent 50%, " + pb_color + " 50%, " + pb_color + " 75%, transparent 75%, transparent)";
        jQuery("<style type='text/css'>.twss_6310_fill_<?php echo $id ?>  { background-image:" + pb_color + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
      }
    });
      </script>
      <?php
    }
}


   if (!function_exists('twss_6310_skills_css')) {
   function twss_6310_skills_css($cssData, $id = '', $output = '')
   {
   ?>
      <style>
         .twss_6310_member_skills_wrapper_<?php echo $id; ?> {
            margin: 0;
            width: 100%;
            float: left;
            display: <?php echo $cssData['twss_fun_template_skills'] ? 'block' : 'none'; ?>;
            margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px;
            margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px;
         }

         .twss_6310_skills_label_<?php echo $id; ?> {
            font-size: <?php echo $cssData['skills_font_size'] ?>px;
            text-transform: <?php echo $cssData['skills_text_transform'] ?>;
            color: <?php echo $cssData['skills_font_color'] ?>;
            font-weight: <?php echo $cssData['skills_font_weight'] ?>;
            font-family: '<?php echo str_replace("+", " ", $cssData['skills_font_family']); ?>';
            line-height: <?php echo $cssData['skills_line_height'] ?>px;
            margin-bottom: 2px;
            text-align: left;
            display: block;
         }

         .twss_6310_team_style_<?php echo $id; ?>:hover .twss_6310_skills_label_<?php echo $id; ?> {
            color: <?php echo $cssData['skills_font_hover_color'] ?>;
         }

         .twss_6310_skills_prog_<?php echo $id; ?> {
            overflow: hidden;
            height: <?php echo $cssData['progress_bar_height'] ?>px;
            margin-bottom: 6px;
            border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
            -webkit-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
            -moz-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
            -o-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
            border: <?php echo $cssData['progress_bar_border_size'] ?>px solid <?php echo $cssData['progress_bar_border_color'] ?>;
            background-color: <?php echo $cssData['progress_bar_background_color'] ?>;
            box-shadow: none;
            -o-box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-sizing: content-box;
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
         }

         .twss_6310_fill_<?php echo $id; ?> {
            background-color: <?php echo $cssData['progress_bar_color'] ?>;
            height: 100%;
            background-size: 20px 20px;
            <?php
            if ($cssData['progress_bar_type']) {
            ?>background-image: linear-gradient(135deg, <?php echo $cssData['progress_bar_alternate_color'] ?> 25%, transparent 25%,
                  transparent 50%, <?php echo $cssData['progress_bar_alternate_color'] ?> 50%, <?php echo $cssData['progress_bar_alternate_color'] ?> 75%,
                  transparent 75%, transparent);
            <?php
            }
            ?>
         }
      </style>
   <?php
   }
}

if (!function_exists('twss_split_code')) {
   function twss_split_code($ids, $data)
   {
      $css = "";
      $data1 = explode("}", $data);
      if ($data1) {
         foreach ($data1 as $step1) {
            if ($step1 &&  strlen($step1) > 2) {
               $data2 = explode("{", $step1);
               if ($data2) {
                  $data3 = explode(",", $data2[0]);
                  $r = "";
                  foreach ($data3 as $value) {
                     if ($r) {
                        $r .= ", ";
                     }
                     $r .= ".twss_main_template_{$ids} $value";
                  }
                  $css .= $r . "{" . $data2[1] . "}";
               }
            }
         }
      }
      return $css;
   }
}

if (!function_exists('twss_my_word_count')) {
   function twss_my_word_count($file, $count)
   {
      $t = $data = strip_tags($file);
      $str = "";
      for ($i = 0; $i < strlen($data); $i++) {
         if (substr($t, 0, 1) == " ") {
            $str .= " ";
            $t = substr($t, 1);
            $count--;
            if ($count == 0) {
               break;
            }
         } else {
            $str .= substr($t, 0, 1);
            $t = substr($t, 1);
         }
      }
      $str = str_replace("\'", "'", $str);
      $str = str_replace("\'", "'", $str);
      $str = str_replace("\'", "'", $str);
      return $str;
   }
}


if (!function_exists('twss_6310_team_member_details')) {
   function twss_6310_team_member_details()
   {
      global $wpdb;
      $ids = (int) sanitize_text_field($_GET['ids']);
      $data['styledata'] = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}twss_6310_member WHERE id = %d ", $ids), ARRAY_A);

      $data['styledata']['profile_details'] = str_replace("\'", "'", $data['styledata']['profile_details']);
      $data['styledata']['profile_details'] = str_replace('\"', '"', $data['styledata']['profile_details']);


      if ($data['styledata']['iconids']) {
         $icons = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}twss_6310_icons WHERE id in ({$data['styledata']['iconids']})", ""), ARRAY_A);
         if ($icons) {
            $iconUrl = explode("||||", $data['styledata']['iconurl']);
            $iconIds = explode(",", $data['styledata']['iconids']);
            $html = "";
            $iconStyles = "";
            foreach ($icons as $li) {
               $index = array_search($li['id'], $iconIds);
               $html .= "<a href='{$iconUrl[$index]}' class='twss-popup-link' title='{$li['name']}' target='_blank' id='twss-social-link-{$ids}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a>";
               $iconStyles .= "<style>#twss-social-link-{$ids}-{$li['id']}{border: 1px solid {$li['bgcolor']}; background-color: {$li['bgcolor']}; color:{$li['color']};} #twss-social-link-{$ids}-{$li['id']}:hover{background-color: {$li['color']}; color:{$li['bgcolor']};} </style>";
            }
            $data['link'] = $html . $iconStyles;
         } else {
            $data['link'] = "";
         }
      } else {
         $data['link'] = "";
      }
      echo json_encode($data);
      wp_die();
   }
}

if (!function_exists('twss_6310_team_member_info')) {
   function twss_6310_team_member_info()
   {
      global $wpdb;
      $ids = (int) sanitize_text_field($_GET['ids']);
      $data['styledata'] = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}twss_6310_member WHERE id = %d ", $ids), ARRAY_A);

      $data['styledata']['profile_details'] = str_replace("\'", "'", $data['styledata']['profile_details']);
      $data['styledata']['profile_details'] = str_replace('\"', '"', $data['styledata']['profile_details']);


      if ($data['styledata']['iconids']) {
         $icons = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}twss_6310_icons WHERE id in ({$data['styledata']['iconids']})", ""), ARRAY_A);
         if ($icons) {
            $iconUrl = explode("||||", $data['styledata']['iconurl']);
            $iconIds = explode(",", $data['styledata']['iconids']);
            $html = "";
            $iconStyles = "";
            foreach ($icons as $li) {
               $index = array_search($li['id'], $iconIds);
               $html .= "<a href='{$iconUrl[$index]}' class='twss-popup-link' title='{$li['name']}' target='_blank' id='twss-social-link-{$ids}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a>";
               $iconStyles .= "<style>#twss-social-link-{$ids}-{$li['id']}{border: 1px solid {$li['bgcolor']}; background-color: {$li['bgcolor']}; color:{$li['color']};} #twss-social-link-{$ids}-{$li['id']}:hover{background-color: {$li['color']}; color:{$li['bgcolor']};} </style>";
            }
            $data['link'] = $html . $iconStyles;
         } else {
            $data['link'] = "";
         }
      } else {
         $data['link'] = "";
      }
      echo json_encode($data);
      wp_die();
   }
}

if (!function_exists('twss_link_css_js')) {
   function twss_link_css_js()
   {
      wp_enqueue_style('twss-font-awesome-5-0-13', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
      wp_enqueue_style('twss-codemirror-style', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/codemirror.min.css');
      wp_enqueue_style('twss-color-style', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/2.3.4/jquery.minicolors.min.css');
      wp_enqueue_style('twss-jquery-ui-css', "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css");
      wp_enqueue_script('twss-jquery-ui-js', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'));
      wp_enqueue_script('twss-color-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/2.3.4/jquery.minicolors.min.js', array('jquery'));
      wp_enqueue_script('twss-codemirror-js', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/codemirror.min.js', array('jquery'));
   }
}

// Output Functions

if (!function_exists("twss_fun_template_name")) {
   function twss_fun_template_name($value, $id, $template_id = 0)
   {
      $id = $template_id ? $template_id : $id;
      echo "<div class='twss_6310_team_style_{$id}_title'>{$value}</div>";
   }
}

if (!function_exists("twss_fun_template_designation")) {
   function twss_fun_template_designation($value, $id, $template_id = 0)
   {
      $id = $template_id ? $template_id : $id;
      echo "<div class='twss_6310_team_style_{$id}_designation'>{$value}</div>";
   }
}

if (!function_exists("twss_fun_template_profile_details")) {
   function twss_fun_template_profile_details($value, $cssData, $id, $template_id = 0)
   {
      $id = $template_id ? $template_id : $id;
      if ($value['profile_details_type'] == 2) {
         echo "<div class='twss_6310_team_style_{$id}_profile_details'>" .
            TWSS_My_WordCount($value['profile_details'], $cssData['details_summary_words'])
            . "</div>";
      }
   }
}



if (!function_exists('twss_fun_template_read_more')) {
   function twss_fun_template_read_more($cssData, $ids, $cls = "", $attr = "")
   {
      if ($cssData) {
         echo  "<div class='twss_6310_team_style_{$ids}_read_more{$cls}'{$attr}>
        <div id='twss_6310_team_style_{$ids}_text'>{$cssData['read_more_text']}</div>
      </div>";
      }
   }
}

if (!function_exists('twss_fun_template_read_more_style')) {
   function twss_fun_template_read_more_style($cssData, $ids, $cls = "", $attr = "")
   {
   ?>
      <style>
         .twss_6310_team_style_<?php echo $ids; ?>_read_more {
            display: <?php echo ($cssData['twss_fun_template_read_more']) ? 'block' : 'none'; ?>;
            padding: 0;
            margin: 8px auto;
            float: left;
            width: 100%;
         }

         .twss_6310_team_style_<?php echo $ids; ?>_read_more div {
            background: <?php echo $cssData['read_more_backbround_color'] ?>;
            font-size: <?php echo $cssData['read_more_font_size'] ?>px;
            text-decoration: none !important;
            color: <?php echo $cssData['read_more_font_color'] ?>;
            height: <?php echo ($cssData['read_more_height'] + ($cssData['read_more_border_width'] * 2)) ?>px;
            line-height: <?php echo $cssData['read_more_height'] ?>px;
            letter-spacing: 0.06em;
            font-family: <?php echo $cssData['read_more_font_family'] ?>;
            font-weight: <?php echo $cssData['read_more_font_weight'] ?>;
            transition: background 200ms;
            border-radius: <?php echo $cssData['read_more_border_radius'] ?>px;
            list-style: none;
            text-transform: <?php echo $cssData['read_more_text_transform']; ?>;
            cursor: pointer;
            width: <?php echo $cssData['read_more_width']; ?>;
            text-align: center;
            border: <?php echo $cssData['read_more_border_width'] ?> solid <?php echo $cssData['read_more_border_color'] ?>;
            margin-top: <?php echo $cssData['read_more_margin_top'] ?>px !important;
            margin-bottom: <?php echo $cssData['read_more_margin_bottom'] ?>px !important;
            <?php
            if ($cssData['read_more_text_align'] == 'center') {
               echo "margin: 0 auto;";
            } elseif ($cssData['read_more_text_align'] == 'right') {
               echo "margin-left: auto;";
            } elseif ($cssData['read_more_text_align'] == 'left') {
               echo "margin-right: auto;";
            } ?>
         }

         .twss_6310_team_style_<?php echo $ids; ?>_read_more:hover div {
            background-color: <?php echo $cssData['read_more_backbround_hover_color'] ?> !important;
            color: <?php echo $cssData['read_more_font_hover_color'] ?>;
         }
      </style>
   <?php
   }
}

if (!function_exists('twss_fun_template_read_more_script')) {
   function twss_fun_template_read_more_script($cssData, $ids, $cls = "", $attr = "")
   {
   ?>
      <script>
         jQuery("body").on("click", ".readRore_activation", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".readRore_activation").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#readmore_activation").val(val);
            if (val == 0) {
               jQuery(".read_more_act_field, .twss_6310_team_style_<?php echo $ids; ?>_read_more").hide();
            } else {
               jQuery(".read_more_act_field, .twss_6310_team_style_<?php echo $ids; ?>_read_more").show();
            }
         });

         function preventNumberInput(e) {
            var keyCode = (e.keyCode ? e.keyCode : e.which);
            if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107) {
               e.preventDefault();
               alert("Please Enter Only A-Z or a-z .")
            }
         }

        

         jQuery("#twss_read_more_text").on("input", function() {
            var value = jQuery(this).val();
            preventNumberInput(value)
            
            $(".twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div").text(value);
         });

         jQuery("#twss_read_more_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div  { height:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });
         jQuery("#twss_read_more_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div  {line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_read_more_width").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div  { width:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_read_more_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_read_more_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });


         jQuery("#twss_read_more_border_color , #twss_read_more_border_width").on("change", function() {
            var border_color = jQuery("#twss_read_more_border_color").val();
            var border_width = jQuery("#twss_read_more_border_width").val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { border:" + border_width + " solid " + border_color + ";} </style>").appendTo(".twss-6310-preview");
         });


         jQuery("#twss_read_more_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?>:hover #twss_6310_team_style_<?php echo $ids; ?>_text  { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_read_more_border_radius").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div{ border-radius:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });


         jQuery("#twss_read_more_backbround_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_read_more_backbround_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_read_more div { background:" + value + " !important;} </style>").appendTo(".twss-6310-preview");
         });


         jQuery("#twss_read_more_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_read_more_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_jquery_read_more_font_family").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_read_more_margin_top").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { margin-top:" + value + "px !important;} </style>").appendTo(".twss-6310-preview");
         });


         jQuery("#twss_read_more_margin_bottom").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div { margin-bottom:" + value + "px !important;} </style>").appendTo(".twss-6310-preview");
         });

         jQuery("#twss_read_more_text_align").on("change", function() {
            var value = jQuery(this).val();
            if (value == 'left') {
               jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div {margin: 0 auto 0 0 !important;} </style>").appendTo(".twss-6310-preview");
            } else if (value == 'center') {
               jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div {margin: 0 auto !important;} </style>").appendTo(".twss-6310-preview");
            } else if (value == 'right') {
               jQuery("<style type='text/css'>.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more div {margin: 0 0 0 auto !important;} </style>").appendTo(".twss-6310-preview");
            }
         });
      </script>
<?php
   }
}


if (!function_exists('TWSS_My_WordCount')) {
   function TWSS_My_WordCount($file, $count)
   {
      $t = $data = strip_tags($file);
      $str = "";
      for ($i = 0; $i < strlen($data); $i++) {
         if (substr($t, 0, 1) == " ") {
            $str .= " ";
            $t = substr($t, 1);
            $count--;
            if ($count == 0) {
               break;
            }
         } else {
            $str .= substr($t, 0, 1);
            $t = substr($t, 1);
         }
      }
      $str = str_replace("\'", "'", $str);
      $str = str_replace("\'", "'", $str);
      $str = str_replace("\'", "'", $str);
      return $str;
   }
}


if (!function_exists("twss_fun_template_social")) {
   function twss_fun_template_social($value, $cssData, $icon_table, $id, $template_id)
   {
      global $wpdb;
      $icons = $wpdb->get_results("SELECT * FROM $icon_table WHERE id in ({$value['iconids']})", ARRAY_A);
      $id = $template_id ? $template_id : $id;

      if ($icons) {
         $iconUrl = explode("||||", $value['iconurl']);
         $iconIds = explode(",", $value['iconids']);
         $iconStyles = "";
         $c = 0;
         foreach ($icons as $li) {
            $index = array_search($li['id'], $iconIds);
            if ($c == 0) {
               echo "<div class='twss_6310_team_style_{$id}_social'>";
            }
            $c++;
            echo "<div><a href='{$iconUrl[$index]}' class='open_in_new_tab_class' title='{$li['name']}' target='_blank' id='twss-social-link-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></div>";
            $iconStyles .= "<style>#twss-social-link-{$value['id']}-{$li['id']}{border: {$cssData['social_border_width']}px solid {$li['bgcolor']}; background-color: {$li['bgcolor']}; color:{$li['color']};} #twss-social-link-{$value['id']}-{$li['id']}:hover{color: {$li['bgcolor']}; background-color:{$li['color']};} </style>";
            if ($c == 4) {
               break;
            }
         }
      }
      if ($c > 0) {
         echo "</div>";
         echo $iconStyles;
      }
   }
}


if (!function_exists('twss_fun_template_contact')) {
   function twss_fun_template_contact($contacts, $cssData, $id, $template_id = 0)
   {
      $id = $template_id ? $template_id : $id;
      if ($contacts) {
         echo "<div class='twss_6310_team_style_{$id}_contact'>";
         $contacts = explode("####||||####", $contacts);
         foreach ($contacts as $contact) {
            $contact = explode("||||", $contact);
            echo "<div><span>" . str_replace("\\", "", $contact[0]) . "</span> {$contact[1]}</div>";
         }
         echo "</div>";
      }
   }
}




if (!function_exists('twss_fun_template_skills')) {
   function twss_fun_template_skills($skills, $id = "", $cssData, $output = "")
   {
?>
      <div class="twss_6310_member_skills_wrapper_<?php echo $id; ?>">
         <?php
         $skills = explode("####||||####", $skills);
         $skl = 1;
         foreach ($skills as $skill) {
            $skill = explode("||||", $skill);
         ?>
            <div class="twss_6310_skills_label_<?php echo $id; ?>"><?php echo $skill[0] ?></div>
            <div class="twss_6310_skills_prog_<?php echo $id; ?>">
               <div class="twss_6310_fill_<?php echo $id; ?> fill-<?php echo $id . "-{$skl}-$output" ?>" data-progress-animation="<?php echo $skill[1] ?>%" data-appear-animation-delay="400" style="width: <?php echo $skill[1] ?>%;"></div>
            </div>
            <style>
               .fill-<?php echo $id . "-{$skl}-$output" ?> {
                  animation: mymove-<?php echo $id . "-{$skl}-$output" ?> 3s linear <?php echo ($cssData['progress_bar_animation']) ? 'infinite' : ''; ?>;
               }

               @keyframes mymove-<?php echo $id . "-{$skl}-$output" ?> {
                  0% {
                     background-position: 0 0;
                  }

                  100% {
                     background-position: 60px 0;
                  }
               }
            </style>
         <?php
            $skl++;
         }
         ?>
      </div>
<?php
   }
}

if(!function_exists('check_license')){
   function check_license($key){
      global $wpdb;

      $api_params = array(
         'edd_action' => 'activate_license',
         'license' => $key,
         'item_name' => urlencode('Image Hover Effects Ultimate'),
         'url' => home_url()
      );
      $url = "https://license.wpmart.org/";
      $response = wp_remote_post($url, array("body"=>$api_params));
      $license_data = json_decode(wp_remote_retrieve_body($response));  
   
      if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {
         if (is_wp_error($response)) {
            $message = $response->get_error_message();
         } else {
               $message = __('An error occurred, please try again.');
         }
      }
      else{
         if (false === $license_data->success) {
            switch ($license_data->error) {
               case 'invalid_key' :
                  $message = __('Your have enter invalid license key.');
                  break;

               case 'site_inactive' :

                  $message = __('Your license is not active for this URL.');
                  break;

               default :

                  $message = __('An error occurred, please try again.');
                  break;
            }
         }
      }

      if (!empty($message)) {
         echo $message;
         return;
      }
      
      // If the function it's not available, require it.
      if ( ! function_exists( 'download_url' ) ) {
         require_once ABSPATH . 'wp-admin/includes/file.php';
         require_once(ABSPATH . 'wp-includes/pluggable.php');
      }

      // Now you can use it!
      $file_url = $license_data->download_url;
      $tmp_file = download_url( $file_url );

      // Sets file final destination.
      $filepath = ABSPATH . 'wp-content/plugins';

      // Copies the file to the final destination and deletes temporary file.
      copy( $tmp_file, $filepath . "/{$license_data->file_name}" );
      @unlink( $tmp_file );

      // WP_Filesystem();
      // $unzipfile = unzip_file( $filepath."/{$license_data->file_name}", $filepath);
      
      // if ( is_wp_error( $unzipfile ) ) {
      //       echo 'There was an error unzipping the file.'; 
      // } else {
      //    echo "Your license activated successfully.";
      //    unlink($filepath."/{$license_data->file_name}");
      // }
   }
}

if (!function_exists('twss_team_with_skills_and_slider_install')) {
   function twss_team_with_skills_and_slider_install()
   {
      global $wpdb;
      global $twss_team_skills_slider_version;

      $style_table = $wpdb->prefix . 'twss_6310_style';
      $icon_table = $wpdb->prefix . 'twss_6310_icons';
      $member_table = $wpdb->prefix . 'twss_6310_member';
      $category_table = $wpdb->prefix . 'twss_6310_category';

      $charset_collate = $wpdb->get_charset_collate();

      $sql1 = "CREATE TABLE IF NOT EXISTS $style_table (
        id int UNSIGNED NOT NULL AUTO_INCREMENT,
        name varchar(100) DEFAULT NULL,
        style_name varchar(100) DEFAULT NULL,
        css text DEFAULT NULL,
        memberid text DEFAULT NULL,
        grid_order text DEFAULT NULL,
        template_order text DEFAULT NULL,
        PRIMARY KEY  (id)
      ) $charset_collate;";

      $sql2 = "CREATE TABLE IF NOT EXISTS $icon_table (
        id int UNSIGNED NOT NULL AUTO_INCREMENT,
        name varchar(100) DEFAULT NULL,
        class_name varchar(100) DEFAULT NULL,
        color varchar(100) DEFAULT NULL,
        bgcolor varchar(100) DEFAULT NULL,
        PRIMARY KEY  (id)
      ) $charset_collate;";

      $sql3 = "CREATE TABLE IF NOT EXISTS $member_table (
        id int UNSIGNED NOT NULL AUTO_INCREMENT,
        name varchar(100) DEFAULT NULL,
        designation varchar(100) DEFAULT NULL,
        profile_details_type tinyint(4) NOT NULL DEFAULT '0',
        profile_url text DEFAULT NULL,
        open_new_tab tinyint(4) NOT NULL DEFAULT '0',
        profile_details text DEFAULT NULL,
        effect varchar(100) DEFAULT NULL,
        image text DEFAULT NULL,
        image_hover text DEFAULT NULL,
        iconids text DEFAULT NULL,
        iconurl text DEFAULT NULL,
        skills text DEFAULT NULL,
        contacts text DEFAULT NULL,
        category text DEFAULT NULL,
        PRIMARY KEY(id)
      ) $charset_collate;";

      $sql4 = "CREATE TABLE IF NOT EXISTS $category_table (
         id int UNSIGNED NOT NULL AUTO_INCREMENT,
         name varchar(100) DEFAULT NULL,
         c_name varchar(100) DEFAULT NULL,
         serial varchar(100) DEFAULT NULL,
         PRIMARY KEY  (id),
         unique(c_name)
      ) $charset_collate;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      $iconData = $wpdb->query("select id from $icon_table LIMIT 1");
      dbDelta($sql1);
      dbDelta($sql2);
      dbDelta($sql3);
      dbDelta($sql4);

      if (!($iconData !== FALSE)) {
         $wpdb->query("INSERT INTO {$icon_table} (name, class_name, color, bgcolor) VALUES
      ('Linkedin', 'fab fa-linkedin-in', '#ffffff', 'rgba(0, 119, 181, 1)'),
      ('Twitter', 'fab fa-twitter', '#ffffff', 'rgba(85, 172, 238, 1)'),
      ('Facebook', 'fab fa-facebook-f', '#ffffff', 'rgba(59, 89, 153, 1)'),
      ('Skype', 'fab fa-skype', '#ffffff', 'rgba(0, 175, 240, 1)'),
      ('Dropbox', 'fab fa-dropbox', '#ffffff', 'rgba(0, 126, 229, 1)'),
      ('Wordpress', 'fab fa-wordpress', '#ffffff', 'rgba(33, 117, 155, 1)'),
      ('vimeo', 'fab fa-vimeo-v', '#ffffff', 'rgba(26, 183, 234, 1)'),
      ('Slideshare', 'fab fa-slideshare', '#ffffff', 'rgba(0, 119, 181, 1)'),
      ('Vk', 'fab fa-vk', '#ffffff', 'rgba(76, 117, 163, 1)'),
      ('Tumblr', 'fab fa-tumblr', '#ffffff', 'rgba(52, 70, 93, 1)'),
      ('Yahoo', 'fab fa-yahoo', '#ffffff', 'rgba(65, 0, 147, 1)'),
      ('Pinterest', 'fab fa-pinterest-p', '#ffffff', 'rgba(189, 8, 28, 1)'),
      ('Youtube', 'fab fa-youtube', '#ffffff', 'rgba(205, 32, 31, 1)'),
      ('Stumbleupon', 'fab fa-stumbleupon', '#ffffff', 'rgba(235, 73, 36, 1)'),
      ('Reddit', 'fab fa-reddit-alien', '#ffffff', 'rgba(255, 87, 0, 1)'),
      ('Quora', 'fab fa-quora', '#ffffff', 'rgba(185, 43, 39, 1)'),
      ('Yelp', 'fab fa-yelp', '#ffffff', 'rgba(175, 6, 6, 1)'),
      ('Weibo', 'fab fa-weibo', '#fafafa', 'rgba(223, 32, 41, 1)'),
      ('Producthunt', 'fab fa-product-hunt', '#ffffff', 'rgba(218, 85, 47, 1)'),
      ('Hackernews', 'fab fa-hacker-news', '#ffffff', 'rgba(255, 102, 0, 1)'),
      ('Soundcloud', 'fab fa-soundcloud', '#ffffff', 'rgba(255, 51, 0, 1)'),
      ('Blogger', 'fab fa-blogger-b', '#ffffff', 'rgba(245, 125, 0, 1)'),
      ('Whatsapp', 'fab fa-whatsapp', '#ffffff', 'rgba(37, 211, 102, 1)'),
      ('Wechat', 'fab fa-weixin', '#ffffff', 'rgba(9, 184, 62, 1)'),
      ('Medium', 'fab fa-medium-m', '#ffffff', 'rgba(2, 184, 117, 1)'),
      ('Vine', 'fab fa-vine', '#ffffff', 'rgba(0, 180, 137, 1)'),
      ('Slack', 'fab fa-slack-hash', '#ffffff', 'rgba(58, 175, 133, 1)'),
      ('Instagram', 'fab fa-instagram', '#e4405f', 'rgba(255, 255, 255, 1)'),
      ('Dribbble', 'fab fa-dribbble', '#ffffff', 'rgba(234, 76, 137, 1)'),
      ('Flickr', 'fab fa-flickr', '#ffffff', 'rgba(255, 0, 132, 1)'),
      ('Foursquare', 'fab fa-foursquare', '#ffffff', 'rgba(249, 72, 119, 1)'),
      ('Behance', 'fab fa-behance', '#ffffff', 'rgba(19, 20, 24, 1)'),
      ('Snapchat', 'fab fa-snapchat-ghost', '#ffffff', 'rgba(255, 252, 0, 1)'),
      ('Paypal', 'fab fa-paypal', '#ffffff', 'rgba(0, 48, 135, 1)'),
      ('Bandcamp', 'fab fa-bandcamp', '#ffffff', 'rgba(0, 150, 136, 1)')");
      }
   }
}
