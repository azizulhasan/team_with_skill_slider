<div class="twss-6310">
  <div class="twss-6310-sm">
    <?php
    include twss_6310_plugin_url . 'settings/helper/team-member-save.php';

    if (!empty($_POST['update_style_change']) && $_POST['update_style_change'] == 'Save' && $_POST['id'] != '') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss_nonce_field_form')) {
        die('You do not have sufficient permissions to access this pagess.');
      } else {
        $css = twss_6310_extract_data($_POST);
        $wpdb->query($wpdb->prepare("UPDATE $style_table SET css = %s WHERE id = %d", $css, sanitize_text_field($_POST['id'])));
      }
    }
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    $css = explode("!!##!!", $styledata['css']);
    $key = explode(",", $css[0]);
    $value = explode("||##||", $css[1]);

    $cssData = array_combine($key, $value);

    $members = $wpdb->get_results("SELECT * FROM $member_table WHERE id in ({$styledata['memberid']}) ORDER BY FIELD(id,{$styledata['memberid']})", ARRAY_A);
    $template_order  = explode(",", $styledata['template_order']);
    ?>

    <div class="twss-plugin-setting-left">
      <?php

      include twss_6310_plugin_url . 'settings/form/_form-17.php';
      include twss_6310_plugin_url . 'settings/css/_css-17.php';
      include twss_6310_plugin_url . 'settings/helper/template-17.php';
      include twss_6310_plugin_url . 'settings/helper/slider_helper.php';
      twss_6310_skills_css($cssData, '17');
      twss_6310_skills_script($cssData, '17');
      twss_fun_template_read_more_style($cssData, '17');
      twss_fun_template_read_more_script($cssData, '17');
      ?>
      <div class="twss-preview-box">
        <div class="twss-6310-preview">
          Preview
          <div style="display: inline; float: right">
            <input type="text" id="twss_background_preview" class="twss-form-input  twss-pull-right twss_6310_color_picker twss_preview_color_chooser" data-format="rgb" data-opacity=".8" value="rgba(255, 255, 255, .8)"></div>
          </div>
          <hr />
        </div>
        <div class="twss_6310_tabs_panel_preview">
          <div id="twss-6310-noslider-<?php echo $styleId ?>">
            <?php
            $col = 0;
            if ($members) {
              foreach ($members as $value) {
                if ($value['profile_details_type'] == 1) {
									$cls = " twss_6310_team_member_info";
									$attr = " link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
								  } else if ($value['profile_details_type'] == 2) {
									$cls = " twss_6310_team_member_info";
									$attr = " link-id='0' team-id='{$value['id']}'";
								  }
								  $col++;
								  if($cssData['item_per_row'] == 1){
									echo "<div class='twss-6310-row'>";
								  }
								  else if ($col % $cssData['item_per_row'] == 1) {
									echo "<div class='twss-6310-row'>";
								  }
                ?>
                <div class="twss-6310-col-<?php echo $cssData['item_per_row'] ?>">
                  <div class="">
                  <div class="twss_6310_team_style_17">
                    <svg version="1.1" id="wavey-top-1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
                      <linearGradient id="SVGID_1_"  gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
                        <stop  offset="0" />
                        <stop  offset="1" />
                      </linearGradient>
                      <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
                    </svg>
                    <div class="twss_6310_team_style_17_caption">

                      <div class="twss_6310_team_style_17_img twss_6310_image_hover_effect ">
                        <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                      </div>
                      <div class="twss_6310_team_style_17_content_group">

                        <?php
                        foreach ($template_order as $td) {
                          if ($td == 'twss_fun_template_name') {
                            twss_fun_template_name($value['name'], $styleId, '17');
                          } else if ($td == 'twss_fun_template_designation') {
                            twss_fun_template_designation($value['designation'], $styleId, '17');
                          }
                        }
                        ?>
                      </div>
                    </div>
                    <figcaption>
                      <div class="twss_6310_team_style_17_team_social">
                        <?php
                        foreach ($template_order as $td) {
                         if ($td == 'twss_fun_template_profile_details') {
                          twss_fun_template_profile_details($value, $cssData, $styleId, '17');
                        }else if ($td == 'twss_fun_template_social') {
                          twss_fun_template_social($value, $cssData, $icon_table, $styleId, '17');
                        }else if ($td == 'twss_fun_template_contact') {
                          twss_fun_template_contact($value['contacts'], $cssData, $styleId, '17');
                        } else if ($td == 'twss_fun_template_skills') {
                          twss_fun_template_skills($value['skills'],'17', $cssData, $value);
                        }
                      }
                      if ($value['profile_details_type'] > 0) {
                        twss_fun_template_read_more($cssData , '17', $cls, $attr);
                        }
                      ?>
                    </div>
                  </figcaption>
                </div>
                <!-- end style 22 -->
              </div>
            </div>
            <?php
            if ($cssData['item_per_row'] == 1) {
              echo "</div>";
            } else if ($col % $cssData['item_per_row'] == 0) {
              echo "</div>";
            }
          }
          if (($cssData['item_per_row'] > 1) && $col % $cssData['item_per_row'] != 0) {
            echo "</div>";
          }
        }

        ?>
      </div>






      <div class="twss-6310-category-filter-table" id="twss-6310-category-filter-<?php echo $styleId ?>">
        <?php
        echo twss_6310_load_category($styleId);
        ?>
        <div class="twss-6310-category-filter-row">
          <?php
            $col = 0;
            if ($members) {
              foreach ($members as $value) {
                if ($value['profile_details_type'] == 1) {
									$cls = " twss_6310_team_member_info";
									$attr = " link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
								  } else if ($value['profile_details_type'] == 2) {
									$cls = " twss_6310_team_member_info";
									$attr = " link-id='0' team-id='{$value['id']}'";
								  }
								  $col++;
								  
                ?>
                <div class="twss-6310-col-<?php echo $cssData['item_per_row'] . " twss-6310-category-filter-items " . $value['category'] ?>">
                  <div class="">
                        <div class="twss_6310_team_style_17">
                          <svg version="1.1" id="wavey-top-1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
                            <linearGradient id="SVGID_1_"  gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
                              <stop  offset="0" />
                              <stop  offset="1" />
                            </linearGradient>
                            <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
                          </svg>
                          <div class="twss_6310_team_style_17_caption">

                            <div class="twss_6310_team_style_17_img twss_6310_image_hover_effect ">
                              <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                            </div>
                            <div class="twss_6310_team_style_17_content_group">

                              <?php
                              foreach ($template_order as $td) {
                                if ($td == 'twss_fun_template_name') {
                                  twss_fun_template_name($value['name'], $styleId, '17');
                                } else if ($td == 'twss_fun_template_designation') {
                                  twss_fun_template_designation($value['designation'], $styleId, '17');
                                }
                              }
                              ?>
                            </div>
                          </div>
                          <figcaption>
                            <div class="twss_6310_team_style_17_team_social">
                              <?php
                              foreach ($template_order as $td) {
                               if ($td == 'twss_fun_template_profile_details') {
                                twss_fun_template_profile_details($value, $cssData, $styleId, '17');
                              }else if ($td == 'twss_fun_template_social') {
                                twss_fun_template_social($value, $cssData, $icon_table, $styleId, '17');
                              }else if ($td == 'twss_fun_template_contact') {
                                twss_fun_template_contact($value['contacts'], $cssData, $styleId, '17');
                              } else if ($td == 'twss_fun_template_skills') {
                                twss_fun_template_skills($value['skills'],'17', $cssData, $value);
                              }
                            }
                            if ($value['profile_details_type'] > 0) {
                              twss_fun_template_read_more($cssData , '17', $cls, $attr);
                              }
                            ?>
                          </div>
                        </figcaption>
                      </div>
                      <!-- end style 22 -->
                    </div>
                  </div>
                  <?php
                     }
                     if (($cssData['item_per_row'] > 1) && $col % $cssData['item_per_row'] != 0) {
                     }
                   }
                   ?>
                </div>
              </div>
      <div class="carousel">
        <div id="twss-6310-slider-<?php echo $styleId ?>" class="twss-6310-owl-carousel">
         <?php
         if ($members) {
           foreach ($members as $value) {
            if ($value['profile_details_type'] == 1) {
              $cls = " twss_6310_team_member_info";
              $attr = " link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
              } else if ($value['profile_details_type'] == 2) {
              $cls = " twss_6310_team_member_info";
              $attr = " link-id='0' team-id='{$value['id']}'";
              }
             ?>
             <div class="twss-6310-item">
             <div class="">
                <div class="twss_6310_team_style_17">
                  <svg version="1.1" id="wavey-top-1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
                    <linearGradient id="SVGID_1_"  gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
                      <stop  offset="0" />
                      <stop  offset="1" />
                    </linearGradient>
                    <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
                  </svg>
                  <div class="twss_6310_team_style_17_caption">
                   <div class="twss_6310_team_style_17_img twss_6310_image_hover_effect ">
                     <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                   </div>
                   <div class="twss_6310_team_style_17_content_group">            
                     <?php
                     foreach ($template_order as $td) {
                       if ($td == 'twss_fun_template_name') {
                         twss_fun_template_name($value['name'], $styleId, '17');
                       } else if ($td == 'twss_fun_template_designation') {
                         twss_fun_template_designation($value['designation'], $styleId, '17');
                       }
                     }
                     ?>
                   </div>
                 </div>

                 <figcaption>
                  <div class="twss_6310_team_style_17_team_social">
                    <?php
                    foreach ($template_order as $td) {
                     if ($td == 'twss_fun_template_profile_details') {
                      twss_fun_template_profile_details($value, $cssData, $styleId, '17');
                    }else if ($td == 'twss_fun_template_social') {
                      twss_fun_template_social($value, $cssData, $icon_table, $styleId, '17');
                    }else if ($td == 'twss_fun_template_contact') {
                      twss_fun_template_contact($value['contacts'], $cssData, $styleId, '17');
                    } else if ($td == 'twss_fun_template_skills') {
                      twss_fun_template_skills($value['skills'],'17', $cssData, $value);
                    }
                  }
                  if ($value['profile_details_type'] > 0) {
                    twss_fun_template_read_more($cssData , '17', $cls, $attr);
                    }
                  ?>
                </div>
              </figcaption>
            </div>
          </div>
        </div>
        <?php
      }
    }
    ?>
  </div>
</div>
</div>
<br />

</div>
<div class="twss-plugin-setting-right">
  <?php twss_6310_add_new_media($styleId, $member_table, $icon_table, $template_order, $styledata['memberid']) ?>
</div>
</div>
</div>
<?php
twss_6310_modal_settings_for_member_description($loading);
?>

