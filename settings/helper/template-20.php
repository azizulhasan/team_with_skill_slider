<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#twss_image_radius").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20 { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_border_width").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20 { border-width:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_border_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20  { border-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        // jQuery("#twss_border_color").on("change", function() {
        //     var value = jQuery(this).val() ;
        //     jQuery("<style type='text/css'>div.twss_6310_team_style_20_social { background:" + value + ";} </style>").appendTo(".twss-6310-preview");
        // });

        jQuery("#twss_box_background_first_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1), .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1), .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_box_background_second_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2), .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2), .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_third_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3), .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3), .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_fourth_color").on("change", function() {
            var value = jQuery(this).val()
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4), .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4), .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_five_color").on("change", function() {
            var value = jQuery(this).val()
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5), .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5), .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_six_color").on("change", function() {
            var value = jQuery(this).val()
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5), .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5), .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_box_background_first_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_box_background_second_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_third_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_fourth_hover_color").on("change", function() {
            var value = jQuery(this).val()
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_five_hover_color").on("change", function() {
            var value = jQuery(this).val()
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_six_hover_color").on("change", function() {
            var value = jQuery(this).val()
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover { background: linear-gradient(to top, " + value + " 80%, transparent 20%);} </style>").appendTo(".twss-6310-preview");
        });













        jQuery("#twss_image_hover_background").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20:hover { background:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });



        jQuery("#twss_box_img_background_color, #twss_box_img_border_width").on("change", function() {
            var color = jQuery("#twss_box_img_background_color").val();
            var border_width = jQuery("#twss_box_img_border_width").val();

            jQuery("<style type='text/css'>.twss_6310_team_style_20_img img{ border:" + border_width + "px solid "+color+";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_img_hover_background_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20:hover .twss_6310_team_style_20_img img{ border-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });






twss_box_shadow_color
jQuery("#twss_box_shadow_width, #twss_box_shadow_blur ,#twss_box_shadow_color, #twss_hover_box_shadow_color").on("change", function() {
            var spread = jQuery("#twss_box_shadow_width").val() + "px";
            var blur = (parseInt(jQuery("#twss_box_shadow_blur").val()) * 2) + "px";
            var color = jQuery("#twss_box_shadow_color").val().replace(/\+/g, ' ');
            var hover_color = jQuery("#twss_hover_box_shadow_color").val().replace(/\+/g, ' ');
            color = color.split(':');


            jQuery("<style type='text/css'>.twss_6310_team_style_20{ box-shadow: 0 2px " + blur + " " + spread + " " + color + "; -moz-box-shadow: 0 2px " + blur + " " + spread + " " + color + "; -webkit-box-shadow: 0 2px " + blur + " " + spread + " " + color + "; -ms-box-shadow: 0 2px " + blur + " " + spread + " " + color + "; -o-box-shadow: 0 2px " + blur + " " + spread + " " + color + ";} </style>").appendTo(".twss-6310-preview");


            

            jQuery("<style type='text/css'>.twss_6310_team_style_20:hover { box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + "; -moz-box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + "; -webkit-box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + "; -ms-box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + "; -o-box-shadow: 0 2px " + blur + " " + spread + " " + hover_color + ";} </style>").appendTo(".twss-6310-preview");


           
        });



        //Member Start
        jQuery("#twss_member_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_title { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_member_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20_title, .twss_6310_team_style_20_title a { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20:hover .twss_6310_team_style_20_title { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_box_background_first_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(1) div div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(1) div div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_second_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(2) div div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(2) div div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_third_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(3) div div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(3) div div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_fourth_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(4) div div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(4) div div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_five_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(5) div div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(5) div div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_six_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(6) div div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(6) div div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });





        jQuery("#twss_box_background_first_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(1) div:hover div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(1) div:hover div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_second_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(2) div:hover div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(2) div:hover div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_third_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(3) div:hover div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(3) div:hover div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_fourth_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(4) div:hover div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(4) div:hover div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_five_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(5) div:hover div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(5) div:hover div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_six_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-row div:nth-child(6) div:hover div.twss_6310_team_style_20_title, .twss-6310-category-filter-row div:nth-child(6) div:hover div.twss_6310_team_style_20_title, .twss-6310-owl-stage div:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title{ background-color: "+ value +";} </style>").appendTo(".twss-6310-preview");
        });








        jQuery("#twss_box_background_first_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1) div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1) div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_second_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2) div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2) div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_third_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3) div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3) div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_fourth_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4) div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4) div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_five_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5) div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5) div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_six_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6) div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6) div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });



        jQuery("#twss_box_background_first_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>):hover div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_second_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>):hover div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_third_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>):hover div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_fourth_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>):hover div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_five_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>):hover div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_box_background_six_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6):hover div div + div#pointer:before, .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6):hover div div + div#pointer:before, .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>):hover div div + div#pointer:before{  border-left: 15px solid "+ value +";  border-bottom: 15px solid transparent; }</style>").appendTo(".twss-6310-preview");
        });



        








       


        jQuery("#twss_member_text_align ,#twss_member_title_padding").on("change", function() {
            var value = jQuery("#twss_member_text_align").val();
            var t_padding = jQuery("#twss_member_title_padding").val();
            
            jQuery("<style type='text/css'>.twss_6310_team_style_20_title { float:" + value + "; padding-left:" + t_padding + "px;} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_member_designation_background_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20 .twss_6310_team_style_20_designation { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_designation_background_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20:hover .twss_6310_team_style_20_designation { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

       
        jQuery("#twss_member_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20_title { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20_title { text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        
        jQuery("#twss_jquery_heading_font").on("change", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.twss_6310_team_style_20_title { font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_title{  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_member_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_title{  margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_heading_line_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_20_title { line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

        // Designation Start
        jQuery("body").on("click", ".activate-designation", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-designation").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#twss_fun_template_designation").val(val);
            if (val == 0) {
                jQuery(".twss_6310_team_style_20_designation").hide();
            } else {
                jQuery(".twss_6310_team_style_20_designation").show();
            }
        });

        
        jQuery("#twss_designation_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_20_designation { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_designation { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20:hover .twss_6310_team_style_20_designation { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_designation{  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_designation{  margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_designation { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_designation_border_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_border { border-bottom:3px solid " + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_border_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20:hover .twss_6310_team_style_20_border { border-bottom:3px solid " + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_designation_border_after_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_border:after { border-bottom:3px solid " + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_border_after_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20:hover .twss_6310_team_style_20_border:after { border-bottom:3px solid " + value + ";} </style>").appendTo(".twss-6310-preview");
        });








        jQuery("#twss_designation_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_designation { text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_text_align").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_designation { text-align:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_designation_text_align ,#twss_designation_text_padding").on("change", function() {
            var value = jQuery("#twss_designation_text_align").val();
            var t_padding = jQuery("#twss_designation_text_padding").val();
            
            jQuery("<style type='text/css'>.twss_6310_team_style_20_designation { float:" + value + "; padding-left:" + t_padding + "px;} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_jquery_designation_font").on("change", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.twss_6310_team_style_20_designation { font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_line_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_20_designation { line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        jQuery("#twss_designation_border_hight").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_20_designation:after { height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_border_width").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_20_designation:after { width:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_designation_border_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20_designation:after { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        
        jQuery("#twss_designation_border_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_20:hover .twss_6310_team_style_20_designation:after { background-color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });




        //Contact Start
        jQuery("body").on("click", ".activate-contact", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-contact").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#twss_fun_template_contact").val(val);
            if (val == 0) {
                jQuery("div.twss_6310_team_style_20_contact").hide();
            } else {
                jQuery("div.twss_6310_team_style_20_contact").show();
            }
        });
        jQuery("#twss_contact_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact div { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_line_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> div.twss_6310_team_style_20_contact div { line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact div { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20:hover div.twss_6310_team_style_20_contact div { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_label_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact div span{ color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_label_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.twss_6310_team_style_10:hover div.twss_6310_team_style_20_contact div span{ color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_label_font_size").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact div span{ font-size:" + value + "px;} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_label_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact div span{ font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact {  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact {  margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        
        jQuery("#twss_contact_border_bottom, #twss_contact_border_bottom_color").on("change", function() {
            var border = jQuery("#twss_contact_border_bottom").val();
            var color = jQuery("#twss_contact_border_bottom_color").val();
            if(border == 'none'){
              jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact div{ border-bottom: none !important;} </style>").appendTo(".twss-6310-preview");
            }
            else{
              jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact div{  border-bottom:" + border + " solid " + color + " !important;} </style>").appendTo(".twss-6310-preview");
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
            jQuery("<style type='text/css'> div.twss_6310_team_style_20_contact div { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> div.twss_6310_team_style_20_contact div{ text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_contact_text_align").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> div.twss_6310_team_style_20_contact div{ text-align:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_jquery_contact_font").on("change", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_contact div{ font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });


        //Details Start
        jQuery("body").on("click", ".activate-details", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-details").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#details_activation").val(val);
            if (val == 0) {
                jQuery(".twss_6310_team_style_20_profile_details").hide();
            } else {
                jQuery(".twss_6310_team_style_20_profile_details").show();
            }
        });
        jQuery("#twss_details_font_size").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_20_profile_details { font-size:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_font_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_profile_details { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_font_hover_color").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20:hover .twss_6310_team_style_20_profile_details { color:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_profile_details{  margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_profile_details{  margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_font_weight").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_profile_details { font-weight:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_text_transform").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_profile_details { text-transform:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_text_align").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_20_profile_details { text-align:" + value + " !important;} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_jquery_profile_details_font").on("change", function() {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.twss_6310_team_style_20_profile_details { font-family:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_details_line_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .twss_6310_team_style_20_profile_details { line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#social_from_content").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_profile_details { padding-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });

        //Social Icon Start
        jQuery("body").on("click", ".activate-social", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-social").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#twss_fun_template_social").val(val);
            if (val == 0) {
                jQuery("div.twss_6310_team_style_20_social").hide();
            } else {
                jQuery("div.twss_6310_team_style_20_social").show();
            }
        });
        jQuery("#social_from_content").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_team_style_20_designation { padding-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_icon_width").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_social div a { width:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_icon_height").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> div.twss_6310_team_style_20_social div a { height:" + value + "; line-height:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_border_width").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_social div a { border-width:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_border_radius").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_social div a { border-radius:" + value + "; -moz-border-radius:" + value + "; -webkit-border-radius:" + value + "; -o-border-radius:" + value + "; -ms-border-radius:" + value + "; } </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_social{ margin-top:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_social_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_social{ margin-bottom:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
        jQuery("#twss_icon_text_align").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>div.twss_6310_team_style_20_social{ text-align:" + value + ";} </style>").appendTo(".twss-6310-preview");
        });
    });
</script>
