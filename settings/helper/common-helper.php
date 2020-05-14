<?php

if (!function_exists('twss_6310_add_new_media')) {
   function twss_6310_add_new_media($id, $member_table, $icon_table, $template_order, $members = NULL)
   {
      global $wpdb;
      wp_enqueue_media();
      ?>
      <div class="twss_6310_add_media">
         <h6>Customize Team Members</h6>
         <div class="twss_6310_add_media_body" id="twss_6310_add_new_media">
            <i class="fas fa-plus-circle twss_6310_add_media_add_new_icon"></i><br />
            Add/Edit Members
         </div>
      </div>
      <br />
      <div class="twss_6310_add_media">
         <h6>Rearrange Team</h6>
         <div class="twss_6310_add_media_body" id="twss_6310_rearrange_team">
            <i class="fas fa-user-cog twss_6310_add_media_add_new_icon"></i><br />
         </div>
      </div>
      <br />
      <div class="twss_6310_add_media">
         <h6>Rearrange Template</h6>
         <div class="twss_6310_add_media_body" id="twss_6310_rearrange_template">
            <i class="fas fa-cogs twss_6310_add_media_add_new_icon"></i><br />
         </div>
      </div>
      <br />
      <div class="twss_6310_add_media">
         <h6>Shortcode</h6>
         <div class="twss_6310_add_media_body_shortcode">
            <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value='[twss_team_skills_slider id="<?php echo $id; ?>"]' />
         </div>
      </div>
      <br />
      <div class="twss_6310_add_media">
         <h6>How to Use</h6>
         <div class="twss_6310_add_media_body">
            <a href="https://www.youtube.com/watch?v=_5rRoVg72iE" target="_blank">
               <i class="fas fa-video fa-2x"></i><br />
               Watch Video Tutorial
            </a>
         </div>
      </div>

      <!-- Rearrange Team -->
      <div id="twss_6310_rearrange_team_modal" class="twss-6310-modal" style="display: none">
         <div class="twss-6310-modal-content twss-6310-modal-sm">
            <form action="" method="post">
               <input type="hidden" name="rearrange_id" value="<?php echo $id ?>" />
               <input type="hidden" name="rearrange_list" id="rearrange_list" value="<?php echo $members ?>" />
               <div class="twss-6310-modal-header">
                  Rearrange Teams
                  <span class="twss-6310-close">&times;</span>
               </div>
               <div class="twss-6310-modal-body-form">
                  <ul id="twss-6310-sortable">
                     <?php
                           $results = $wpdb->get_results($wpdb->prepare("SELECT id, name FROM $member_table WHERE id in (" . $members . ") ", ""), ARRAY_A);

                           $serials = explode(",", $members);
                           foreach ($serials as $serial) {
                              foreach ($results as $result) {
                                 if ($result['id'] == $serial) {
                                    echo "<li class='ui-state-default twss-6310-ui-state-default' id='{$serial}'>{$result['name']}</li>";
                                    break;
                                 }
                              }
                           }
                           ?>
                  </ul>
               </div>
               <div class="twss-6310-modal-form-footer">
                  <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                  <input type="submit" name="rearrange-list-save" class="twss-btn-primary twss-pull-right twss-margin-right-10" id="twss-6310-sortable-sub" value="Save" />
               </div>
            </form>
            <br class="twss-6310-clear" />
         </div>
      </div>

      <!-- Rearrange Template -->
      <div id="twss_6310_rearrange_template_modal" class="twss-6310-modal" style="display: none">
         <div class="twss-6310-modal-content twss-6310-modal-sm">
            <form action="" method="post">
               <input type="hidden" name="rearrange_template_id" value="<?php echo $id ?>" />
               <input type="hidden" name="rearrange_template_list" id="rearrange_template_list" value="<?php echo $members ?>" />
               <div class="twss-6310-modal-header">
                  Rearrange Template
                  <span class="twss-6310-close">&times;</span>
               </div>
               <div class="twss-6310-modal-body-form">
                  <ul id="twss-6310-sortable-template">
                  <?php
                  $serialList = array(
                     "twss_fun_template_name" => "Name",
                     "twss_fun_template_designation" => "Designation",
                     "twss_fun_template_profile_details" => "Profile Details",
                     "twss_fun_template_contact" => "Contact Information",
                     "twss_fun_template_skills" => "Skills",
                     "twss_fun_template_social" => "Social Icon"
                   );
                     foreach($template_order as $index){
                        echo "<li class='ui-state-default twss-6310-ui-state-default' id='{$index}'>{$serialList[$index]}</li>";
                     }
                  ?>
                  </ul>
               </div>
               <div class="twss-6310-modal-form-footer">
                  <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                  <input type="submit" name="rearrange-template-save" class="twss-btn-primary twss-pull-right twss-margin-right-10" id="twss-6310-sortable-template-sub" value="Save" />
               </div>
            </form>
            <br class="twss-6310-clear" />
         </div>
      </div>

      <div id="twss_6310_add_new_media_modal" class="twss-6310-modal" style="display: none">
         <div class="twss-6310-modal-content twss-6310-modal-md">
            <form action="" method="post">
               <div class="twss-6310-modal-header">
                  Add/Edit Members
                  <span class="twss-6310-close">&times;</span>
               </div>
               <div class="twss-6310-modal-body-form">
                  <input type="hidden" name="styleid" value="<?php echo $id ?>" />
                  <?php wp_nonce_field("twss-6310-nonce-add-member") ?>
                  <table border="0" width="100%" cellpadding="0" cellspacing="0" class="twss-member-table">
                     <tr height="40" style="font-weight: bold">
                        <td></td>
                        <td>Name</td>
                        <td>Designation</td>
                        <td>Image</td>
                        <td>Icon</td>
                     </tr>
                     <?php
                           if ($members) {
                              $members = explode(",", $members);
                           } else {
                              $members = array();
                           }
                           $allmembers = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY name ASC', ARRAY_A);
                           foreach ($allmembers as $allmember) {
                              ?>
                        <tr class="twss-row-select" id="<?php echo $allmember['id']; ?>">
                           <td width="20"><input type="checkbox" name="memid[]" value="<?php echo $allmember['id'] ?>" <?php if (in_array($allmember['id'], $members)) echo " checked"; ?> id="chk-box-<?php echo $allmember['id']; ?>" class="twss-row-select-checkbox" /></td>
                           <td width="120"><?php echo $allmember['name'] ?></td>
                           <td width="120"><?php echo $allmember['designation'] ?></td>
                           <td><img src="<?php echo $allmember['image'] ?>" height="50" /></td>
                           <td>
                              <?php
                                       if ($allmember['iconids']) {
                                          $iconIds = explode(",", $allmember['iconids']);
                                          $iconUrl = explode("||||", $allmember['iconurl']);

                                          $myIcon = $wpdb->get_results($wpdb->prepare("SELECT * FROM $icon_table WHERE id in (" . $allmember['iconids'] . ") ", ""), ARRAY_A);
                                          if ($myIcon) {
                                             foreach ($myIcon as $k => $v) {
                                                echo "<button class='twss-btn-icon' style='color:" . $v['color'] . "; background-color: " . $v['bgcolor'] . "; margin-right: 5px; margin-bottom: 5px;'><i class='" . $v['class_name'] . "'></i></button>";
                                             }
                                          }
                                       }
                                       ?>
                           </td>
                        </tr>
                     <?php
                           }
                           ?>
                  </table>

               </div>
               <div class="twss-6310-modal-form-footer">
                  <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                  <input type="submit" name="team-member-save" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Save" />
               </div>
            </form>
            <br class="twss-6310-clear" />
         </div>
      </div>

      <style>
         .twss-6310-ui-state-default {
            padding: 8px 10px;
            cursor: pointer;
            border-radius: 3px;
         }
      </style>
      <script>
         var $ = jQuery;
         jQuery(function() {
            jQuery("#twss-6310-sortable").sortable();
            jQuery("#twss-6310-sortable").disableSelection();
            jQuery("#twss-6310-sortable-template").sortable();
            jQuery("#twss-6310-sortable-template").disableSelection();
         });
         jQuery(document).ready(function() {
            jQuery("#twss-6310-sortable-sub").click(function() {
               var list_sortable = jQuery('#twss-6310-sortable').sortable('toArray').toString();
               jQuery("#rearrange_list").val(list_sortable);
            });
            jQuery("#twss-6310-sortable-template-sub").click(function() {
               var list_sortable = jQuery('#twss-6310-sortable-template').sortable('toArray').toString();
               jQuery("#rearrange_template_list").val(list_sortable);
            });

            jQuery("body").on("click", ".twss-row-select-checkbox", function(event) {
               event.stopPropagation();
            });
            jQuery("body").on("click", ".twss-row-select", function() {
               var id = jQuery(this).attr("id");
               if (jQuery("#chk-box-" + id).prop('checked') == true) {
                  jQuery("#chk-box-" + id).prop('checked', false);
                  return false;
               } else {
                  jQuery("#chk-box-" + id).prop('checked', true);
                  return true;
               }

            });

            jQuery("body").on("click", "#twss_6310_rearrange_team", function() {
               jQuery("#twss_6310_rearrange_team_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });

            jQuery("body").on("click", "#twss_6310_rearrange_template", function() {
               jQuery("#twss_6310_rearrange_template_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });

            jQuery("body").on("click", "#twss_6310_add_new_media", function() {
               jQuery("#twss_6310_add_new_media_modal").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });
            jQuery("body").on("click", ".twss-6310-close, .twss-btn-danger", function() {
               jQuery("#twss_6310_add_new_media_modal, #twss_6310_rearrange_team_modal, #twss_6310_rearrange_template_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            });
            jQuery(window).click(function(event) {
               if (event.target == document.getElementById('twss_6310_rearrange_team_modal')) {
                  jQuery("#twss_6310_rearrange_team_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
               if (event.target == document.getElementById('twss_6310_rearrange_template_modal')) {
                  jQuery("#twss_6310_rearrange_template_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
               if (event.target == document.getElementById('twss_6310_add_new_media_modal')) {
                  jQuery("#twss_6310_add_new_media_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
            });
         });
      </script>
   <?php
      }
   }

   if (!function_exists('twss_6310_color_picker_script')) {
      function twss_6310_color_picker_script()
      {
         ?>
      <script>
         jQuery(document).ready(function() {
            jQuery('.twss_6310_color_picker').each(function() {
               jQuery(this).minicolors({
                  control: jQuery(this).attr('data-control') || 'hue',
                  defaultValue: jQuery(this).attr('data-defaultValue') || '',
                  format: jQuery(this).attr('data-format') || 'hex',
                  keywords: jQuery(this).attr('data-keywords') || '',
                  inline: jQuery(this).attr('data-inline') === 'true',
                  letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
                  opacity: jQuery(this).attr('data-opacity'),
                  position: jQuery(this).attr('data-position') || 'bottom left',
                  swatches: jQuery(this).attr('data-swatches') ? jQuery(this).attr('data-swatches').split('|') : [],
                  change: function(value, opacity) {
                     if (!value)
                        return;
                     if (opacity)
                        value += ', ' + opacity;
                     if (typeof console === 'object') {
                        console.log(value);
                     }
                  },
                  theme: 'bootstrap'
               });
            });
         });
      </script>
   <?php
      }
   }

   if (!function_exists('twss_6310_font_picker_script')) {
      function twss_6310_font_picker_script()
      {
         ?>
      <script>
         var $ = jQuery;
         jQuery(document).ready(function() {
            jQuery('#skills_font_family, #twss_jquery_heading_font, #twss_jquery_designation_font, #twss_jquery_heading_font_style1, #twss_jquery_designation_font_style1, #twss_jquery_heading_font_style, #twss_jquery_designation_font_style, #twss-front-end-load, #twss_jquery_description_font, #twss_jquery_contact_font, #twss_jquery_profile_details_font, #twss_jquery_category_font_family, #twss_jquery_read_more_font_family').fontselect();
         });
      </script>
   <?php
      }
   }

   if (!function_exists('twss_6310_modal_settings_for_member_description')) {
      function twss_6310_modal_settings_for_member_description($loading)
      {
         ?>
      <div id="twss_6310_loading">
         <img src="<?php echo $loading; ?>" />
      </div>
      <div id="mytwss_6310_modal" class="twss_6310_modal">
         <div class="twss_6310_modal-content">
            <span class="twss-6310-close">&times;</span>
            <div class="twss_6310_modal_body_picture">
               <img src="" id="twss_6310_modal_img" />

            </div>
            <div class="twss_6310_modal_body_content">
               <div id="twss_6310_modal_designation"></div>
               <div id="twss_6310_modal_name"></div>
               <div id="twss_6310_modal_details"></div>
               <br><br>
               <div class="twss_6310_modal_social"></div>
            </div>
            <br class="twss_6310_clear" />
         </div>
         <br class="twss-6310-clear" />
      </div>
      <script>
         var $ = jQuery;
         jQuery(document).ready(function(e) {
            jQuery("body").on("click", ".open_in_new_tab_class", function() {
               if (jQuery(".open_in_new_tab_class").attr("target") == "_blank") {
                  window.open(jQuery(this).attr("href"), '_blank').focus();
               } else {
                  window.open(jQuery(this).attr("href"), '_parent').focus();
               }
               return false;
            });
            jQuery("body").on("click", ".twss_6310_team_member_info", function() {
               var modalId = parseInt(jQuery(this).attr("team-id"));
               var linkId = parseInt(jQuery(this).attr("link-id"));

               if (linkId > 0) {
                  if (jQuery(this).attr("target") == "1") {
                     window.open(jQuery(this).attr("link-url"), '_blank').focus();
                  } else {
                     window.open(jQuery(this).attr("link-url"), '_parent').focus();
                  }
               } else if (modalId > 0) {
                  jQuery("#twss_6310_loading").show();
                  jQuery("body").css({
                     "overflow": "hidden"
                  });
                  var datas = {
                     'action': 'twss_6310_team_member_info',
                     'ids': modalId
                  };

                  $.getJSON(ajaxurl, datas, function(data) {
                     jQuery("#twss_6310_loading").hide();
                     jQuery(".twss_6310_modal-content").css({
                        "animation-name": "twss-animate" + data['styledata']['effect']
                     });
                     jQuery("#mytwss_6310_modal").show();
                     jQuery("#twss_6310_modal_img").attr("src", data['styledata']['image']);
                     jQuery("#twss_6310_modal_designation").text(data['styledata']['designation']);
                     jQuery("#twss_6310_modal_name").text(data['styledata']['name']);
                     jQuery(".twss_6310_modal_social").html("");

                     jQuery(".twss_6310_modal_social").append(data['link']);

                     jQuery("#twss_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
                  });
               }
            });

            jQuery("body").on("click", ".twss-6310-close", function() {
               jQuery("#mytwss_6310_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            });

            jQuery(window).click(function(event) {
               if (event.target == document.getElementById('mytwss_6310_modal')) {
                  jQuery("#mytwss_6310_modal").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
            });
         });
      </script>

      <style type="text/css">
         .twss_6310_modal,
         #twss_6310_loading {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 9999;
            /* Sit on top */
            padding-top: 50px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            font-family: sans-serif;
            letter-spacing: .02em;

         }

         /* twss_6310_modal Content */
         .twss_6310_modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 75%;
            padding: 20px 15px 40px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;
            -webkit-animation-duration: 0.4s;
            animation-duration: 0.4s;
            margin-bottom: 50px;
         }

         /* Add Animation */
         @-webkit-keyframes twss-animatetop {
            from {
               top: -300px;
               opacity: 0
            }

            to {
               top: 0;
               opacity: 1
            }
         }

         @keyframes twss-animatetop {
            from {
               top: -300px;
               opacity: 0
            }

            to {
               top: 0;
               opacity: 1
            }
         }

         @keyframes twss-animatebottom {
            from {
               bottom: -300px;
               opacity: 0
            }

            to {
               bottom: 0;
               opacity: 1
            }
         }

         @-webkit-keyframes twss-animatebottom {
            from {
               bottom: -300px;
               opacity: 0
            }

            to {
               bottom: 0;
               opacity: 1
            }
         }

         @keyframes twss-animateleft {
            from {
               left: -300px;
               opacity: 0
            }

            to {
               left: 0;
               opacity: 1
            }
         }

         @-webkit-keyframes twss-animateleft {
            from {
               left: -300px;
               opacity: 0
            }

            to {
               left: 0;
               opacity: 1
            }
         }

         @keyframes twss-animateright {
            from {
               right: -300px;
               opacity: 0
            }

            to {
               right: 0;
               opacity: 1
            }
         }

         @-webkit-keyframes twss-animateright {
            from {
               right: -300px;
               opacity: 0
            }

            to {
               right: 0;
               opacity: 1
            }
         }

         /* The Close Button */
         .twss-6310-close {
            color: #000;
            float: right;
            font-size: 28px;
            font-weight: bold;
            line-height: 28px;
            padding: 0;
            margin: 0;
            position: absolute;
            right: 20px;
            top: 15px;
         }

         .twss-6310-close:hover,
         .twss-6310-close:focus {
            color: #878787;
            text-decoration: none;
            cursor: pointer;
         }

         .twss_6310_modal_body_picture {
            float: left;
            width: 300px;
            padding-right: 15px;
         }

         .twss_6310_modal_body_content {
            width: calc(100% - 315px);
            float: left;
         }

         .twss_6310_modal_body_picture img {
            width: calc(100% - 12px);
            height: auto;
            border: 1px solid #ccc;
            padding: 5px;
         }

         #twss_6310_modal_designation {
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 300;
         }

         #twss_6310_modal_name {
            text-transform: capitalize;
            font-size: 22px;
            line-height: 30px;
            margin: 0 0 25px;
            font-weight: 600;
            color: #111;
         }

         #twss_6310_modal_details {
            font-size: 14px;
            line-height: 20px;
         }


         .twss-popup-link {
            width: 35px;
            height: 35px;
            line-height: 35px;
            float: left;
            margin: 15px 10px 0 0;
            font-size: 18px;
            border-radius: 3px;
            text-align: center;
            cursor: pointer;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
         }

         .twss_6310_modal-footer {
            padding: 10px 15px;
            color: white;
         }

         br.twss_6310_clear {
            clear: both;
         }

         #twss_6310_loading {
            padding-top: 170px;
            /* Location of the box */
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            /* Black w/ opacity */
         }

         #twss_6310_loading img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
         }
      </style>
   <?php
      }
   }

   if (!function_exists('twss_items_per_row')) {
      function twss_items_per_row($id, $rows = NULL)
      {
         ?>
      <div id="twss-6310-modal-add" class="twss-6310-modal" style="display: none">
         <div class="twss-6310-modal-content twss-6310-modal-sm">
            <form action="" method="post">
               <div class="twss-6310-modal-header">
                  Numbers of item per row
                  <span class="twss-6310-close">&times;</span>
               </div>
               <div class="twss-6310-modal-body-form">
                  <?php wp_nonce_field("twss_nonce_field_form") ?>
                  <input type="hidden" name="id" value="<?php echo $id ?>" />
                  <table border="0" width="100%" cellpadding="10" cellspacing="0">
                     <tr>
                        <td width="50%"><label class="twss-form-label" for="icon_name">Item Per Row:</label></td>
                        <td>
                           <select name="item_per_row_data" class="twss-form-input">
                              <option value="1" <?php if ($rows == 1) echo " selected" ?>>1 Item per Row</option>
                              <option value="2" <?php if ($rows == 2) echo " selected" ?>>2 Items per Row</option>
                              <option value="3" <?php if ($rows == 3) echo " selected" ?>>3 Items per Row</option>
                              <option value="4" <?php if ($rows == 4) echo " selected" ?>>4 Items per Row</option>
                              <option value="5" <?php if ($rows == 5) echo " selected" ?>>5 Items per Row</option>
                              <option value="6" <?php if ($rows == 6) echo " selected" ?>>6 Items per Row</option>
                           </select>
                        </td>
                     </tr>
                  </table>

               </div>
               <div class="twss-6310-modal-form-footer">
                  <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                  <input type="submit" name="item_per_row_sub" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Update" />
               </div>
            </form>
            <br class="twss-6310-clear" />
         </div>
      </div>
      <script>
         var $ = jQuery;
         jQuery(document).ready(function() {
            jQuery("body").on("click", "#twss_items_per_row", function() {
               jQuery("#twss-6310-modal-add").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });

            jQuery("body").on("click", ".twss-6310-close, .twss-btn-danger", function() {
               jQuery("#twss-6310-modal-add, #twss-6310-modal-edit").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            });
            jQuery(window).click(function(event) {
               if (event.target == document.getElementById('twss-6310-modal-add')) {
                  jQuery("#twss-6310-modal-add").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               } else if (event.target == document.getElementById('twss-6310-modal-edit')) {
                  jQuery("#twss-6310-modal-edit").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
            });

         });
      </script>
   <?php
      }
   }

   if (!function_exists('twss_no_preview_available')) {
      function twss_no_preview_available()
      {
         ?>
         <div class="twss-no-preview-available">No preview available <br />for this option.</div>
      <script>
         jQuery(document).ready(function() {
            jQuery("body").on("change", "select[name='item_per_row']", function(e) {
               e.preventDefault();
               $('.twss-no-preview-available').fadeIn().delay(3000).fadeOut();
            });
            jQuery("body").on("blur", "input[name='social_border_width']", function(e) {
               e.preventDefault();
               $('.twss-no-preview-available').fadeIn().delay(3000).fadeOut();
            });
         });
      </script>
<?php
   }
}
