<style type="text/css">

  .twss_6310_team_style_08 {
    cursor: pointer;
    float: left;
    width: 100%;
    overflow: hidden;
    position: relative;
    border: 1px solid rgba(156, 136, 185, 0.7);
    -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-style: solid;
    border-width: <?php echo $cssData['border_width'] ?>px;
    border-color: <?php echo $cssData['border_color'] ?>;
    box-shadow: 0 0 <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_color'] ?>;
    background-color: <?php echo $cssData['box_background_color'] ?>
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;

  }

  .twss_6310_team_style_08:hover {
    box-shadow: 0 0 <?php echo ($cssData['twss_hover_box_shadow_color'] * 2) ?>
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    box-shadow: 0px 3px <?php echo ($cssData['box_shadow_blur'] + 5) ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
  }


  .twss_6310_team_style_08_img {
    position: relative;
    overflow: hidden;
    float: left;
    width: 100%;
  }
  .twss_6310_team_style_08_img img {
    width: 100%;
    height: auto;
    float: left;
  }
  .twss_6310_team_style_08_social_team {
    width: 100%;
    height: 100%;
    position: absolute;
    background: rgba(156, 136, 185, 0.7);
    
    bottom: -99%;
    transition: all 0.5s ease 0s;
  }
  .twss_6310_team_style_08:hover .twss_6310_team_style_08_social_team {
    bottom: 0;
  }
  .twss_6310_team_style_08_social_team:before {
    content: "";
    width: 90%;
    height: 0;
    position: absolute;
    top: 5%;
    left: 5%;
    border-top: 5px solid rgba(255, 255, 255, 0.7);
    border-left: 5px solid rgba(255, 255, 255, 0.7);
    opacity: 0;
    transition: all 0.5s ease 0.5s;
  }
  .twss_6310_team_style_08:hover .twss_6310_team_style_08_social_team:before {
    opacity: 1;
    height: 90%;
  }
  .twss_6310_team_style_08_social {
    margin: 0;
    position: relative;
    top: 25%;
    transform: scale(0);
    opacity: 0;
    margin-left: 15px;
    transition: all 0.5s ease 0s;
    display: <?php echo ($cssData['twss_fun_template_social'])?'block':'none'; ?>;
    padding: 0;
    list-style: none;
    text-align: center;
    margin: <?php echo $cssData['social_margin_top'] ?>px 0 0 0;
  }
  .twss_6310_team_style_08:hover .twss_6310_team_style_08_social {
    opacity: 1;
    transform: scale(1);
  }
  .twss_6310_team_style_08_social div {
    display: inline-block;
    margin-right: 5px;
  }


  .twss_6310_team_style_08_social div:last-child {
    margin-right: 0px;
  }
  .twss_6310_team_style_08_social div a {
    display: inline-block;
    text-align: center;
    transition: all 0.5s ease 0s;
    width: <?php echo $cssData['social_icon_width'] ?>px;
    height: <?php echo $cssData['social_icon_height'] ?>px;
    line-height: <?php echo $cssData['social_icon_height'] ?>px;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
    margin: 0;
    padding: 0;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -webkit-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['social_border_radius'] ?>px;

  }
  div.twss_6310_team_style_08_social div a i{
  padding:<?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 8) ?>px;
}


  .twss_6310_team_style_08_caption {
    background: #f3f5f7;
    padding: 10px 25px;
    text-align: left;
    width: 100%;
    float: left;
    padding: 0 10px;
    width: calc(100% - 20px);
    background-color: <?php echo $cssData['box_background_color'] ?>
  }
  .twss_6310_team_style_08_caption:hover {
    background-color: <?php echo $cssData['image_hover_background'] ?>;
  }
  
  .twss_6310_team_style_08_title {
    background: <?php echo $cssData['member_title_background_color'] ?>;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?>;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    position: relative;
    height: <?php echo $cssData['member_line_height'] ?>px;
    line-height: <?php echo $cssData['member_line_height'] ?>px;
    margin-bottom: <?php echo $cssData['member_margin_bottom'] ?>px;
    margin-top: <?php echo $cssData['member_margin_top'] ?>px;
    padding:0 0 0 <?php echo $cssData['member_title_padding'] ?>px ;

  }
  .twss_6310_team_style_08:hover .twss_6310_team_style_08_title {
    color: <?php echo $cssData['member_font_hover_color'] ?>;
  }
  

  .twss_6310_team_style_08_designation {
    display: <?php echo ($cssData['twss_fun_template_designation'])?'block':'none'; ?>;
    font-family: <?php echo $cssData['designation_font_family'] ?>;
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    color: <?php echo $cssData['designation_font_color'] ?>;
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;
    position: relative;
    margin-bottom: <?php echo $cssData['designation_margin_bottom'] ?>px;
    margin-top: <?php echo $cssData['designation_margin_top'] ?>px;
    z-index: 1;
    padding:0 0 0 <?php echo $cssData['member_title_padding'] ?>px ;
  }
  .twss_6310_team_style_08:hover .twss_6310_team_style_08_designation {
    color: <?php echo $cssData['designation_font_hover_color'] ?>;
  }
  .twss_6310_team_style_08_designation:after {
    content: "";
    display: block;
    width: <?php echo $cssData['designation_border_width'] ?>px;
    height:<?php echo $cssData['designation_border_hight'] ?>px;
    background-color: <?php echo $cssData['designation_border_color'] ?>;
    margin-top: 7px;
  }
  .twss_6310_team_style_08:hover .twss_6310_team_style_08_designation:after {
    background-color: <?php echo $cssData['designation_border_hover_color'] ?>;
    
  }
  .twss_6310_team_style_08_description {
    font-size: 14px;
    color: #898989;
  }
  .twss_6310_team_style_08_profile_details {
    display: <?php echo ($cssData['twss_fun_template_profile_details'])?'block':'none'; ?>;
    font-size: <?php echo $cssData['details_font_size'] ?>px;
    line-height: <?php echo $cssData['details_line_height'] ?>px;
    color: <?php echo $cssData['details_font_color'] ?>;
    font-weight: <?php echo $cssData['details_font_weight'] ?>;
    text-transform: <?php echo $cssData['details_text_transform'] ?>;
    text-align: <?php echo $cssData['details_text_align'] ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['details_font_family']); ?>;
    margin-top: <?php echo ($cssData['details_margin_top'] ) ?>px;
    margin-bottom: <?php echo $cssData['details_margin_bottom'] ?>px;
    
    float: left;
    width: 100%;
  }
  .twss_6310_team_style_08:hover .twss_6310_team_style_08_profile_details {
    color: <?php echo $cssData['details_font_hover_color'] ?>;
  }



   div.twss_6310_team_style_08_contact {
     
     width: 100%;
     float: left;
     display: <?php echo ($cssData['twss_fun_template_contact'])?'block':'none'; ?>;
     margin-top: <?php echo $cssData['contact_margin_top'] ?>px;
     margin-bottom:<?php echo $cssData['contact_margin_bottom'] ?>px;
   }
   
   

   div.twss_6310_team_style_08_contact div {

     text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
     font-size: <?php echo $cssData['contact_font_size'] ?>px;
     color: <?php echo $cssData['contact_font_color'] ?>;
     font-weight: <?php echo $cssData['contact_font_weight'] ?>;
     text-transform: <?php echo $cssData['contact_text_transform'] ?>;
     font-family: <?php echo str_replace("+", " ", $cssData['contact_font_family']); ?>;
     line-height: <?php echo $cssData['contact_line_height'] ?>px;
     
     width: 100%;
     text-align: <?php echo $cssData['contact_text_align'] ?>;
     border-bottom: <?php echo ($cssData['contact_border_bottom'] == 'none')?'none':"{$cssData['contact_border_bottom']} solid {$cssData['contact_border_bottom_color']}" ?>;
     padding: 2px 0;
     transition: all 0.6s ease 0s;
   }
   div.twss_6310_team_style_08_contact div:last-child {
     border-bottom: none;
   }


  .twss_6310_team_style_08:hover div.twss_6310_team_style_08_contact div
   {
    color: <?php echo $cssData['contact_font_hover_color'] ?>;
  }
  div.twss_6310_team_style_08_contact div span{
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    margin-right: 4px;
  }
  .twss_6310_team_style_08:hover div.twss_6310_team_style_08_contact div span{
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }



  .twss_6310_team_style_08_button {
    display: inline-block;
    position: relative;
    padding: 10px 10px 10px 50px;
    background: #9c88b9;
    color: #fff;
    font-size: 14px;
    z-index: 1;
    transition: all 0.5s ease 0s;
  }
  .twss_6310_team_style_08_button:hover {
    background: #009999;
    color: black;
    cursor: pointer;
  }
  .twss_6310_team_style_08_button:after {
    content: "";
    background: #9c88b9;
    position: absolute;
    width: 36px;
    height: 100%;
    right: -18px;
    top: 0px;
    transform: skewX(-35deg);
    z-index: -1;
    transition: all 0.5s ease 0s;
  }
  .twss_6310_team_style_08 .twss_6310_team_style_08_button:hover::after {
    background: #009999;
  }


  


  .twss_6310_team_style_08,
  .twss_6310_team_style_08_title,
  .twss_6310_team_style_08_designation,
  .twss_6310_team_style_08_designation:after,
  .twss_6310_team_style_08_profile_details,
  .twss_6310_team_style_08_contact,
  .twss_6310_team_style_08,
  .twss_6310_team_style_08_caption {
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }

  
 </style>

