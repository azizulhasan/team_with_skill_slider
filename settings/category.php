<?php
if (!defined('ABSPATH'))
   exit;

if (!current_user_can('edit_others_pages')) {
   wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="twss-6310">
   <h1>Category <button class="twss-btn-success" id="add-category_item">Add New</button></h1>
   <?php
   if (!defined('ABSPATH'))
      exit;
   if (!current_user_can('manage_options')) {
      wp_die(__('You do not have sufficient permissions to access this page.'));
   }
   $category_table = $wpdb->prefix . 'twss_6310_category';


   twss_6310_color_picker_script();


   if (!empty($_POST['delete']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-nonce-field-delete')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $wpdb->query($wpdb->prepare("DELETE FROM {$category_table} WHERE id = %d", $id));
      }
   } else if (!empty($_POST['save']) && $_POST['save'] == 'Save') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-add')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $myData[0] = sanitize_text_field($_POST['name']);
         $myData[1] = "c-" . time();
         $myData[2] = sanitize_text_field($_POST['serial']);

         foreach($myData as $key=>$value){ 
            $value = twss_6310_special_character_remove($value);        
            while($value != $myData[$key]){
               $myData[$key] = $value;
               $value = twss_6310_special_character_remove($value);
            }
            $myData[$key] = $value;
          }

         $wpdb->query($wpdb->prepare("insert into $category_table SET name = %s, c_name = %s, serial = %s", $myData));
      }
   } else if (!empty($_POST['update']) && $_POST['update'] == 'Update') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['id']);
         $myData[0] = sanitize_text_field($_POST['name']);
         $myData[1] = sanitize_text_field($_POST['serial']);
         $myData[2] = $id;

         foreach($myData as $key=>$value){ 
            $value = twss_6310_special_character_remove($value);        
            while($value != $myData[$key]){
               $myData[$key] = $value;
               $value = twss_6310_special_character_remove($value);
            }
            $myData[$key] = $value;
          }

         $wpdb->query($wpdb->prepare("update $category_table SET name = %s, serial = %s where id=%d", $myData));
      }
   } else if (!empty($_POST['edit']) && $_POST['edit'] == 'Edit') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-nonce-field-edit')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) $_POST['id'];
         $selCategory = $wpdb->get_row($wpdb->prepare("SELECT * FROM $category_table WHERE id = %d ", $id), ARRAY_A);
   ?>
         <div id="twss-6310-modal-edit" class="twss-6310-modal">
            <div class="twss-6310-modal-content twss-6310-modal-sm">
               <form action="" method="post">
                  <input type="hidden" name="id" value="<?php echo $selCategory['id'] ?>" />
                  <div class="twss-6310-modal-header">
                     Category Settings
                     <span class="twss-6310-close">&times;</span>
                  </div>
                  <div class="twss-6310-modal-body-form">
                     <?php wp_nonce_field("twss-6310-nonce-update") ?>
                     <table border="0" width="100%" cellpadding="10" cellspacing="0">
                        <tr>
                           <td width="50%"><label class="twss-form-label" for="icon_name">Category Name:</label></td>
                           <td><input type="text" required="" name="name" id="icon_name" value="<?php echo $selCategory['name'] ?>" class="twss-form-input" /></td>
                        </tr>                        
                        <tr>
                           <td><label class="twss-form-label" for="bgcolor">Category Serial:</label></td>
                           <td><input type="text" required="" name="serial" value="<?php echo $selCategory['serial'] ?>" class="twss-form-input" /></td>
                        </tr>
                     </table>

                  </div>
                  <div class="twss-6310-modal-form-footer">
                     <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                     <input type="submit" name="update" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Update" />
                  </div>
               </form>
               <br class="twss-6310-clear" />
            </div>
         </div>
         <script>
            var $ = jQuery;
            jQuery(document).ready(function() {
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
         <td>Category Name</td>
         <td style="width: 100px">Category Serial</td>
         <td style="width: 100px">Edit Delete</td>
      </tr>

      <?php
      $data = $wpdb->get_results('SELECT * FROM ' . $category_table . ' ORDER BY name ASC', ARRAY_A);
      foreach ($data as $value) {
         echo '<tr>';
         echo '<td>' . $value['name'] . '</td>';
         echo '<td>' . $value['serial'] . '</td>';         
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
               Category Settings
               <span class="twss-6310-close">&times;</span>
            </div>
            <div class="twss-6310-modal-body-form">
               <?php wp_nonce_field("twss-6310-nonce-add") ?>
               <table border="0" width="100%" cellpadding="10" cellspacing="0">
                  <tr>
                     <td width="50%"><label class="twss-form-label" for="icon_name">Category Name:</label></td>
                     <td><input type="text" required="" name="name" class="twss-form-input" placeholder="HR, Manager" /></td>
                  </tr>
                  <tr>
                     <td><label class="twss-form-label" for="bgcolor">Category Serial:</label></td>
                     <td><input type="text" name="serial" class="twss-form-input" placeholder="1, 2, 3"></td>
                  </tr>
               </table>

            </div>
            <div class="twss-6310-modal-form-footer">
               <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
               <input type="submit" name="save" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Save" />
            </div>
         </form>
         <br class="twss-6310-clear" />
      </div>
   </div>
</div>

<script>
   var $ = jQuery;
   jQuery(document).ready(function() {
      jQuery("body").on("click", "#add-category_item", function() {
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