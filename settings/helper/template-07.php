<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#twss_image_radius").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07 { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_border_width").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07 { border-width:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_border_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07  { border-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07_caption { background:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_image_hover_background").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07_caption:hover { background:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_box_shadow_width, #twss_box_shadow_blur, #twss_box_shadow_color, #twss_hover_box_shadow_color").on("change", function() {
                    var spread = jQuery("#twss_box_shadow_width").val() + "px";
                    var blur = (parseInt(jQuery("#twss_box_shadow_blur").val()) * 2) + "px";
                    var color = jQuery("#twss_box_shadow_color").val().replace(/\+/g, ' ');
                    var hover_color = jQuery("#twss_hover_box_shadow_color").val().replace(/\+/g, ' ');
                    color = color.split(':');
                    jQuery("<style type='text/css'> .twss_6310_team_style_07 { box-shadow: 0 2px " + blur + " " + spread + " " + color + "; -moz-box-shadow: 0 2px " + blur + " " + spread + " " + color + "; -webkit-box-shadow: 0 2px " + blur + " " + spread + " " + color + "; -ms-box-shadow: 0 2px " + blur + " " + spread + " " + color + "; -o-box-shadow: 0 2px " + blur + " " + spread + " " + color + ";} </style>").appendTo(".twss-6310-preview");

                    jQuery("<style type='text/css'> .twss_6310_team_style_07:hover { box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + "; -moz-box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + "; -webkit-box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + "; -ms-box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + "; -o-box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + ";} </style>").appendTo(".twss-6310-preview");
                });



        //Member Start
        jQuery("#twss_member_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_title { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_member_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07_title, .twss_6310_team_style_07_title a { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07:hover .twss_6310_team_style_07_title { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_member_title_background_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07 .twss_6310_team_style_07_title { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_title_background_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07:hover .twss_6310_team_style_07_title { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_member_title_padding").on("change", function() {
            
            var t_padding = jQuery("#twss_member_title_padding").val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07_title,.twss_6310_team_style_07_designation {padding-left:" + t_padding + "px;} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_member_designation_background_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07 .twss_6310_team_style_07_designation { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_designation_background_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07:hover .twss_6310_team_style_07_designation { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

       
        jQuery("#twss_member_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07_title { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07_title { text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        
        jQuery("#twss_jquery_heading_font").on("change", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.twss_6310_team_style_07_title { font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_title{  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_title{  margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_heading_line_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_07_title { line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

        // Designation Start
        jQuery("body").on("click", ".activate-designation", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-designation").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#twss_fun_template_designation").val(val);
            if (val == 0) {
                jQuery(".twss_6310_team_style_07_designation").hide();
            } else {
                jQuery(".twss_6310_team_style_07_designation").show();
            }
        });

        
        jQuery("#twss_designation_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_07_designation { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07_designation { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07:hover .twss_6310_team_style_07_designation { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_designation{  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_designation{  margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07_designation { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07_designation { text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_text_align").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07_designation { text-align:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_designation_text_align ,#twss_designation_text_padding").on("change", function() {
            var value = jQuery("#twss_designation_text_align").val();
            var t_padding = jQuery("#twss_designation_text_padding").val();
            
            jQuery("<style type='text/css'>.twss_6310_team_style_07_designation { float:" + value + "; padding-left:" + t_padding + "px;} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_jquery_designation_font").on("change", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.twss_6310_team_style_07_designation { font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_line_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_07_designation { line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_designation_border_hight").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_07_designation:after { height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_border_width").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_07_designation:after { width:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_border_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07_designation:after { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        
        jQuery("#twss_designation_border_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07:hover .twss_6310_team_style_07_designation:after { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });




        //Contact Start
        jQuery("body").on("click", ".activate-contact", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-contact").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#twss_fun_template_contact").val(val);
            if (val == 0) {
                jQuery("div.twss_6310_team_style_07_contact").hide();
            } else {
                jQuery("div.twss_6310_team_style_07_contact").show();
            }
        });
        jQuery("#twss_contact_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_contact div { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_line_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> div.twss_6310_team_style_07_contact div { line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_contact div { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_label_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_contact div span{ color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_label_font_size").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_contact div span{ font-size:" + value + "px;} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_label_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_contact div span{ font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_contact_label_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_07:hover div.twss_6310_team_style_07_contact div span{ color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07:hover div.twss_6310_team_style_07_contact div { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> div.twss_6310_team_style_07_contact{  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> div.twss_6310_team_style_07_contact{ margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        
        jQuery("#twss_contact_border_bottom, #twss_contact_border_bottom_color").on("change", function() {
            var border = jQuery("#twss_contact_border_bottom").val();
            var color = jQuery("#twss_contact_border_bottom_color").val();
            if(border == 'none'){
              jQuery("<style type='text/css'>div.twss_6310_team_style_07_contact div{ border-bottom: none !important;} </style>").appendTo(".twss-6310-preview");
            }
            else{
              jQuery("<style type='text/css'>div.twss_6310_team_style_07_contact div{  border-bottom:" + border + " solid " + color + " !important;} </style>").appendTo(".twss-6310-preview");
            }
        });

        jQuery("#twss_progress_bar_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_skills_prog_{  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_progress_bar_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_member_skills_wrapper_{margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        



        jQuery("#twss_contact_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> div.twss_6310_team_style_07_contact div { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> div.twss_6310_team_style_07_contact div{ text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_text_align").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> div.twss_6310_team_style_07_contact div{ text-align:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_jquery_contact_font").on("change", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_contact div{ font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        //Details Start
        jQuery("body").on("click", ".activate-details", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-details").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#details_activation").val(val);
            if (val == 0) {
                jQuery(".twss_6310_team_style_07_profile_details").hide();
            } else {
                jQuery(".twss_6310_team_style_07_profile_details").show();
            }
        });
        jQuery("#twss_details_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_07_profile_details { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07_profile_details { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07:hover .twss_6310_team_style_07_profile_details { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_profile_details{  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_profile_details{  margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07_profile_details { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07_profile_details { text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_text_align").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_07_profile_details { text-align:" + value + " !important;} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_jquery_profile_details_font").on("change", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.twss_6310_team_style_07_profile_details { font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_line_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_07_profile_details { line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#social_from_content").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_profile_details { padding-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

        //Social Icon Start
        jQuery("body").on("click", ".activate-social", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-social").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#twss_fun_template_social").val(val);
            if (val == 0) {
                jQuery("div.twss_6310_team_style_07_social").hide();
            } else {
                jQuery("div.twss_6310_team_style_07_social").show();
            }
        });
        jQuery("#social_from_content").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_07_designation { padding-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_icon_width").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_social div a { width:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_icon_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> div.twss_6310_team_style_07_social div a { height:" + value + "; line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_border_width").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_social div a { border-width:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_border_radius").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_social div a { border-radius:" + value + "; -moz-border-radius:" + value + "; -webkit-border-radius:" + value + "; -o-border-radius:" + value + "; -ms-border-radius:" + value + "; } </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_social{ margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_07_social{ margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
    });
</script>
