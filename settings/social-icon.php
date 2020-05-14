<?php
if (!defined('ABSPATH'))
   exit;
if (!current_user_can('edit_others_pages')) {
   wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="twss-6310">
   <h1>Team with Skills and Slider Social Icon <button class="twss-btn-success" id="add-social-icon">Add New</button></h1>
   <?php
   if (!defined('ABSPATH'))
      exit;
   if (!current_user_can('manage_options')) {
      wp_die(__('You do not have sufficient permissions to access this page.'));
   }
   $icon_table = $wpdb->prefix . 'twss_6310_icons';
   
   
   twss_6310_color_picker_script();


   if (!empty($_POST['delete']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-nonce-field-delete')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $wpdb->query($wpdb->prepare("DELETE FROM {$icon_table} WHERE id = %d", $id));
      }
   } else if (!empty($_POST['save']) && $_POST['save'] == 'Save') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-add')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $name = sanitize_text_field($_POST['name']);
         $class_name = sanitize_text_field($_POST['class_name']);
         $color = sanitize_text_field($_POST['color']);
         $bgcolor = sanitize_text_field($_POST['bgcolor']);

         $wpdb->query($wpdb->prepare("insert into $icon_table SET name = %s, class_name = %s, color = %s, bgcolor = %s", $name, $class_name, $color, $bgcolor));
      }
   } else if (!empty($_POST['update']) && $_POST['update'] == 'Update') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['id']);
         $name = sanitize_text_field($_POST['name']);
         $class_name = sanitize_text_field($_POST['class_name']);
         $color = sanitize_text_field($_POST['color']);
         $bgcolor = sanitize_text_field($_POST['bgcolor']);

         $wpdb->query($wpdb->prepare("update $icon_table SET name = %s, class_name = %s, color = %s, bgcolor = %s where id=%d", $name, $class_name, $color, $bgcolor, $id));
      }
   } else if (!empty($_POST['edit']) && $_POST['edit'] == 'Edit') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-nonce-field-edit')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $selIcon = $wpdb->get_row($wpdb->prepare("SELECT * FROM $icon_table WHERE id = %d ", $id), ARRAY_A);
         ?>
         <div id="twss-6310-modal-edit" class="twss-6310-modal">
            <div class="twss-6310-modal-content twss-6310-modal-sm">
               <form action="" method="post">
                  <input type="hidden" name="id" value="<?php echo $selIcon['id'] ?>" />
                  <div class="twss-6310-modal-header">
                     Social Settings
                     <span class="twss-6310-close">&times;</span>
                  </div>
                  <div class="twss-6310-modal-body-form">         
                     <?php wp_nonce_field("twss-6310-nonce-update") ?>
                     <table border="0" width="100%" cellpadding="10" cellspacing="0">
                        <tr>
                           <td width="50%"><label class="twss-form-label" for="icon_name">Icon Name:</label></td>
                           <td><input type="text" required="" name="name" id="icon_name" value="<?php echo $selIcon['name'] ?>" class="twss-form-input" /></td>
                        </tr>
                        <tr>
                           <td><label class="twss-form-label" for="class_name">Font Awesome Class:</label></td>
                           <td><input type="text" required="" name="class_name" id="class_name" value="<?php echo $selIcon['class_name'] ?>" class="twss-form-input" /></td>
                        </tr>
                        <tr>
                           <td><label class="twss-form-label" for="color">Color:</label></td>
                           <td><input type="text" name="color" id="color" class="twss-form-input twss_6310_color_picker" data-format="rgb" required="" data-opacity=".8" value="<?php echo $selIcon['color'] ?>"></td>
                        </tr>
                        <tr>
                           <td><label class="twss-form-label" for="bgcolor">Background Color:</label></td>
                           <td><input type="text" name="bgcolor" id="bgcolor" class="twss-form-input twss_6310_color_picker" data-format="rgb" required="" data-opacity=".8" value="<?php echo $selIcon['bgcolor'] ?>"></td>
                        </tr>
                     </table>

                  </div>
                  <div class="twss-6310-modal-form-footer">
                     <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                     <input type="submit" name="update" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Update"/>
                  </div>
               </form>
               <br class="twss-6310-clear" />
            </div>
         </div>
         <script>
            var $ = jQuery;
            jQuery(document).ready(function () {
               jQuery('#twss-6310-modal-edit').fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
            });
         </script>
         <?php
      }
   }
   ?>

   <table class="twss-table">
      <tr>
         <td style="width: 120px">Icon Name</td>
         <td style="width: 120px">Font Awesome</td>
         <td style="width: 100px">Style</td>
         <td style="width: 100px">Edit Delete</td>
      </tr>

      <?php
      $data = $wpdb->get_results('SELECT * FROM ' . $icon_table . ' ORDER BY name ASC', ARRAY_A);
      foreach ($data as $value) {
         echo '<tr>';
         echo '<td>' . $value['name'] . '</td>';
         echo '<td>' . $value['class_name'] . '</td>';
         echo "<td>
                  <button class='twss-btn-icon' style='color:" . $value['color'] . "; background-color: " . $value['bgcolor'] . "; margin-right: 5px;'><i class='" . $value['class_name'] . "'></i></button>
                  <i class='" . $value['class_name'] . "' style='color: " . $value['bgcolor'] . "'></i>
                  </td>";
         echo '<td>
                 <form method="post">
                   ' . wp_nonce_field("twss-nonce-field-edit") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="twss-btn-success twss-margin-right-10" style="float:left"  title="Edit"  type="submit" value="Edit" name="edit"><i class="fas fa-edit" aria-hidden="true"></i></button>  
                  </form>
                  <form method="post">
                   ' . wp_nonce_field("twss-nonce-field-delete") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="twss-btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="delete" onclick="return confirm(\'Do you want to delete?\');"><i class="far fa-times-circle" aria-hidden="true"></i></button>  
                  </form>
                                   
                             </td>';
      }
      ?>


   </table> 
   <div id="twss-6310-modal-add" class="twss-6310-modal" style="display: none">
      <div class="twss-6310-modal-content twss-6310-modal-sm">
         <form action="" method="post">
            <div class="twss-6310-modal-header">
               Social Settings
               <span class="twss-6310-close">&times;</span>
            </div>
            <div class="twss-6310-modal-body-form">         
               <?php wp_nonce_field("twss-6310-nonce-add") ?>
               <table border="0" width="100%" cellpadding="10" cellspacing="0">
                  <tr>
                     <td width="50%"><label class="twss-form-label" for="icon_name">Icon Name:</label></td>
                     <td><input type="text" required="" name="name" id="icon_name" value="" class="twss-form-input" placeholder="Facebook" /></td>
                  </tr>
                  <tr>
                     <td><label class="twss-form-label" for="class_name">Font Awesome Class:</label></td>
                     <td><input type="text" required="" name="class_name" id="class_name" value="" class="twss-form-input" placeholder="fab fa-facebook-f" /></td>
                  </tr>
                  <tr>
                     <td><label class="twss-form-label" for="color">Color:</label></td>
                     <td><input type="text" name="color" id="color" class="twss-form-input twss_6310_color_picker" data-format="rgb" required="" data-opacity=".8" value="rgba(255, 255, 255, 1)"></td>
                  </tr>
                  <tr>
                     <td><label class="twss-form-label" for="bgcolor">Background Color:</label></td>
                     <td><input type="text" name="bgcolor" id="bgcolor" class="twss-form-input twss_6310_color_picker" data-format="rgb" required="" data-opacity=".8" value="rgba(51, 154, 240, 0.8)"></td>
                  </tr>
               </table>

            </div>
            <div class="twss-6310-modal-form-footer">
               <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
               <input type="submit" name="save" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Save"/>
            </div>
         </form>
         <br class="twss-6310-clear" />
      </div>
   </div>
</div>

<script>
   var $ = jQuery;
   jQuery(document).ready(function () {
      jQuery("body").on("click", "#add-social-icon", function () {
         jQuery("#twss-6310-modal-add").fadeIn(500);
         jQuery("body").css({
            "overflow": "hidden"
         });
         return false;
      });

      jQuery("body").on("click", ".twss-6310-close, .twss-btn-danger", function () {
         jQuery("#twss-6310-modal-add, #twss-6310-modal-edit").fadeOut(500);
         jQuery("body").css({
            "overflow": "initial"
         });
      });
      jQuery(window).click(function (event) {
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



