<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!current_user_can('edit_others_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="twss-6310">
   <h1>Product License Activation</h1>
   <p>Activate your copy to get direct plugin updates and official support.</p>
   <?php
      if (!empty($_POST['save'])) {
         $nonce = $_REQUEST['_wpnonce'];
         if (!wp_verify_nonce($nonce, 'twss-nonce-field-license')) {
            die('You do not have sufficient permissions to access this page.');
         } else {
            check_license($_POST['license']);
         }
      }
   ?>
   <form action="" method="post" style="width: 600px">
   <?php
        echo wp_nonce_field("twss-nonce-field-license"); 
   ?>
      <table>
         <tr>
            <td>License Key:</td>
            <td>
               <input type="text" name="license"  class="twss-form-input" >
            </td>
         </tr>
         <tr>
            <td></td>
            <td>
               <br />
               <input type="submit" name="save" class="twss-btn-primary">
            </td>
         </tr>
      </table>
   </form>
</div>