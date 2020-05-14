var $ = jQuery;
jQuery(document).ready(function () {
   jQuery("body").on("click", ".open_in_new_tab_class", function () {
      if (jQuery(".open_in_new_tab_class").attr("target") == "_blank") {
         window.open(jQuery(this).attr("href"), '_blank').focus();
      } else {
         window.open(jQuery(this).attr("href"), '_parent').focus();
      }
      return false;
   });
   jQuery("body").on("click", ".twss_6310_team_member_info", function () {
      var html = '<div id="mytwss_6310_modal" class="twss_6310_modal">';
      html += '<div class="twss_6310_modal-content">';
      html += '<span class="twss-6310-close">&times;</span>';
      html += '<div class="twss_6310_modal_body_picture">';
      html += '<img src="" id="twss_6310_modal_img" />';
      html += '</div>';
      html += '<div class="twss_6310_modal_body_content">';
      html += '<div id="twss_6310_modal_designation"></div>';
      html += '<div id="twss_6310_modal_name"></div>';
      html += '<div id="twss_6310_modal_details"></div>';
      html += '<br><br>';
      html += '<div class="twss_6310_modal_social"></div>';
      html += '</div>';
      html += '<br class="twss_6310_clear" />';
      html += '</div>';
      html += '<br class="twss-6310-clear" />';
      html += '</div>';
      jQuery("body").prepend(html);

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
         $.ajax({
            type: "GET",
            dataType: "json",
            url: my_ajax_object.ajax_url,
            data: {action: "twss_6310_team_member_details", 'ids': modalId},
            success: function (data) {
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
            }
         });
      }
   });
});
