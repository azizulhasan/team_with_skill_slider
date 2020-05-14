<?php
if ($cssData['twss_fun_template_slider'] == 1) {
  echo "<div class='twss-6310-carousel'>
  <div id='twss-6310-slider-{$ids}' class='twss-6310-owl-carousel'>";

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

      
    <div class="twss-6310-item-<?php echo $ids; ?>">
        <div class="<?php echo "twss_6310_team_style_{$ids}" ?>">
        <svg version="1.1" id="wavey-top-1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
            <linearGradient id="SVGID_1_"  gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
                <stop  offset="0" />
                <stop  offset="1" />
            </linearGradient>
            <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
        </svg>
        <div class="twss_6310_team_style_<?php echo $ids; ?>_caption">
            <div class="twss_6310_team_style_<?php echo $ids ?>_img twss_6310_image_hover_effect ">
                <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                </div>
                <div class="twss_6310_team_style_<?php echo $ids; ?>_content_group">            
                <?php
                foreach ($template_order as $td) {
                    if ($td == 'twss_fun_template_name') {
                        twss_fun_template_name($value['name'], $styleId, $ids);
                    } else if ($td == 'twss_fun_template_designation') {
                        twss_fun_template_designation($value['designation'], $styleId, $ids);
                    }
                }
                ?>
            </div>
        </div>
        <figcaption>
            <div class="twss_6310_team_style_<?php echo $ids; ?>_team_social">
                <?php
                foreach ($template_order as $td) {
                    if ($td == 'twss_fun_template_social') {
                        twss_fun_template_social($value, $cssData, $icon_table, $styleId, $ids); 
                    }else if ($td == 'twss_fun_template_contact') {
                        twss_fun_template_contact($value['contacts'], $cssData, $styleId, $ids);
                    } else if ($td == 'twss_fun_template_skills') {
                        twss_fun_template_skills($value['skills'], $ids, $cssData, $value['id']);
                  twss_6310_skills_css($cssData, $ids, $value['id']);
                    }else if ($td == 'twss_fun_template_profile_details') {
                        twss_fun_template_profile_details($value, $cssData, $styleId, $ids);
                    }else if ($td == 'twss_fun_template_profile_details') {
                        twss_fun_template_profile_details($value, $cssData, $styleId, $ids);
                    }
                }
                if ($value['profile_details_type'] > 0) {
                    twss_fun_template_read_more($cssData , $ids, $cls, $attr);
                    }
                ?>
            </div>
        </figcaption>
    </div>
</div> 
      <?php
    }
  }
  echo "</div>
  </div>";
} 
else if ($cssData['twss_fun_template_slider'] == 2) {
  echo '<div class="twss-6310-category-filter-table" id="twss-6310-category-filter-'.$ids.'">';
  echo twss_6310_load_category($styleId);
  echo '<div class="twss-6310-category-filter-row">';
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
      if ($cssData['item_per_row'] == 1) {
        echo "<div class='twss-6310-row'>";
      } else if ($col % $cssData['item_per_row'] == 1) {
        echo "<div class='twss-6310-row'>";
      }
      ?>
      <div class="twss-6310-col-<?php echo $cssData['item_per_row'] . " twss-6310-category-filter-items " . $value['category'] ?>">
      <div class="<?php echo "twss_6310_team_style_{$ids}" ?>">
      <svg version="1.1" id="wavey-top-1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
        <linearGradient id="SVGID_1_"  gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
            <stop  offset="0" />
            <stop  offset="1" />
        </linearGradient>
        <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
        </svg>
      <div class="twss_6310_team_style_<?php echo $ids; ?>_caption">
                <div class="twss_6310_team_style_<?php echo $ids ?>_img twss_6310_image_hover_effect ">
                    <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                    </div>
                    <div class="twss_6310_team_style_<?php echo $ids; ?>_content_group">            
                    <?php
                    foreach ($template_order as $td) {
                        if ($td == 'twss_fun_template_name') {
                            twss_fun_template_name($value['name'], $styleId, $ids);
                        } else if ($td == 'twss_fun_template_designation') {
                            twss_fun_template_designation($value['designation'], $styleId, $ids);
                        }
                    }
                    ?>
                </div>
            </div>
            <figcaption>
                <div class="twss_6310_team_style_<?php echo $ids; ?>_team_social">
                    <?php
                    foreach ($template_order as $td) {
                        if ($td == 'twss_fun_template_social') {
                            twss_fun_template_social($value, $cssData, $icon_table, $styleId, $ids); 
                        }else if ($td == 'twss_fun_template_contact') {
                            twss_fun_template_contact($value['contacts'], $cssData, $styleId, $ids);
                        } else if ($td == 'twss_fun_template_skills') {
                            twss_fun_template_skills($value['skills'], $ids, $cssData, $value['id']);
                  twss_6310_skills_css($cssData, $ids, $value['id']);
                        }else if ($td == 'twss_fun_template_profile_details') {
                            twss_fun_template_profile_details($value, $cssData, $styleId, $ids);
                        }
                    }
                    if ($value['profile_details_type'] > 0) {
                        twss_fun_template_read_more($cssData , $ids, $cls, $attr);
                        }
                    ?>
                </div>
            </figcaption>
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
echo "</div>";
echo "</div>";
}
else {
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
      if ($cssData['item_per_row'] == 1) {
        echo "<div class='twss-6310-row'>";
      } else if ($col % $cssData['item_per_row'] == 1) {
        echo "<div class='twss-6310-row'>";
      }
      ?>
      <div class="twss-6310-col-<?php echo $cssData['item_per_row'] ?>">
        <div class="<?php echo "twss_6310_team_style_{$ids}" ?>">
            <svg version="1.1" id="wavey-top-1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
                <linearGradient id="SVGID_1_"  gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
                    <stop  offset="0" />
                    <stop  offset="1" />
                </linearGradient>
                <path fill="url(#SVGID_1_)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z"/>
            </svg>
            <div class="twss_6310_team_style_<?php echo $ids; ?>_caption">
                <div class="twss_6310_team_style_<?php echo $ids ?>_img twss_6310_image_hover_effect ">
                    <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                    </div>
                    <div class="twss_6310_team_style_<?php echo $ids; ?>_content_group">            
                    <?php
                    foreach ($template_order as $td) {
                        if ($td == 'twss_fun_template_name') {
                            twss_fun_template_name($value['name'], $styleId, $ids);
                        } else if ($td == 'twss_fun_template_designation') {
                            twss_fun_template_designation($value['designation'], $styleId, $ids);
                        }
                    }
                    ?>
                </div>
            </div>


            
            <figcaption>
                <div class="twss_6310_team_style_<?php echo $ids; ?>_team_social">
                    <?php
                    foreach ($template_order as $td) {
                        if ($td == 'twss_fun_template_social') {
                            twss_fun_template_social($value, $cssData, $icon_table, $styleId, $ids); 
                        }else if ($td == 'twss_fun_template_contact') {
                            twss_fun_template_contact($value['contacts'], $cssData, $styleId, $ids);
                        }else if ($td == 'twss_fun_template_skills') {
                            twss_fun_template_skills($value['skills'], $ids, $cssData, $value['id']);
                  twss_6310_skills_css($cssData, $ids, $value['id']);
                        }else if ($td == 'twss_fun_template_profile_details') {
                            twss_fun_template_profile_details($value, $cssData, $styleId, $ids);
                        }
                    }
                    if ($value['profile_details_type'] > 0) {
                        twss_fun_template_read_more($cssData , $ids, $cls, $attr);
                        }
                    ?>
                </div>
            </figcaption>
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
}
?>
<?php
include twss_6310_plugin_url . "output/css/_css-17.php";
include twss_6310_plugin_url . "output/common-output-css.php";
include_once twss_6310_plugin_url . "output/output-jquery.php";
twss6310_common_output_css($ids);
twss_6310_skills_css($cssData, $ids);
?>
