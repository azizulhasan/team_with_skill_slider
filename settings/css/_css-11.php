<style type="text/css">
  .twss_6310_team_style_11 {
    text-align: center;
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
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
  }

  .twss_6310_team_style_11:hover {
    box-shadow: 0 0 <?php echo ($cssData['twss_hover_box_shadow_color'] * 2) ?>
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    box-shadow: 0px 3px <?php echo ($cssData['box_shadow_blur'] + 5) ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
  }
  .twss_6310_team_style_11:hover img.twss_front_image {
    display: initial;
  }
  .twss_6310_team_style_11_img_border {
    position: relative;
    padding: 10px 0 10px 20px;
  }
  .twss_6310_team_style_11_img_border:before {
    content: "";
    width: 40px;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: #011627;
    background: <?php echo $cssData['box_background_color'] ?>;
  }
  .twss_6310_team_style_11:hover .twss_6310_team_style_11_img_border:before{
    background: <?php echo $cssData['image_hover_background'] ?>;
  }
  .twss_6310_team_style_11_img {
    position: relative;
    overflow: hidden;
  }
  .twss_6310_team_style_11_img:after {
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: all 0.5s ease 0s;
  }
  .twss_6310_team_style_11:hover .twss_6310_team_style_11_img:after {
    opacity: 1;
  }
  .twss_6310_team_style_11_img img {
    width: 100%;
    height: auto;
    float: left;
  }
  div.twss_6310_team_style_11_social {
    padding: 0;
    margin: 0;
    list-style: none;
    width: 100%;
    position: absolute;
    bottom: -40%;
    left: 0;
    text-align: center;
    z-index: 1;
    transition: all 0.5s ease 0s;
    display: <?php echo ($cssData['twss_fun_template_social'])?'block':'none'; ?>;
    margin: <?php echo $cssData['social_margin_top'] ?>px 0 <?php echo $cssData['social_margin_bottom'] ?>px;
  }
  .twss_6310_team_style_11:hover div.twss_6310_team_style_11_social {
    bottom: 20px;
  }

  div.twss_6310_team_style_11_social div {
    display: inline-block;
    margin-right: 8px;
  }
  div.twss_6310_team_style_11_social div:last-child {
    margin-right: 0px;
  }
  div.twss_6310_team_style_11_social div a {
    display: inline-block;
    transition: all 0.5s ease;
    width: <?php echo $cssData['social_icon_width'] ?>px;
    height: <?php echo $cssData['social_icon_height'] ?>px;
    line-height: <?php echo $cssData['social_icon_height'] ?>px;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
    border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -webkit-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
  }
  .twss_6310_team_style_11_caption {
    padding: 20px;
    background: #2ec4b6;
    color: #011627;
    text-align: center;
    position: relative;
    overflow: hidden;
    z-index: 1;
    transition: all 0.5s ease 0s;
    background-color: <?php echo $cssData['box_background_color'] ?>;
  }
  .twss_6310_team_style_11:hover .twss_6310_team_style_11_caption {
    background-color: transparent;
  }
   .twss_6310_team_style_11_caption:hover {
    background-color: transparent;
  }


  .twss_6310_team_style_11_caption:before {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: -100%;
    background: #011627;
    background: <?php echo $cssData['image_hover_background'] ?>;
    z-index: -1;
    transition: all 0.5s ease 0s;
  }
  .twss_6310_team_style_11:hover .twss_6310_team_style_11_caption:before {
    left: 0;
  }
  .twss_6310_team_style_11_title {
    transition: all 0.5s ease 0s;
  }
  
  .twss_6310_team_style_11_title {
    background: <?php echo $cssData['member_title_background_color'] ?>;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?>;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    position: relative;
    line-height: <?php echo $cssData['member_line_height'] ?>px;
    margin-bottom: <?php echo $cssData['member_margin_bottom'] ?>px;
    margin-top: <?php echo $cssData['member_margin_top'] ?>px;
    padding:0 0 0 <?php echo $cssData['member_title_padding'] ?>px ;

  }
  .twss_6310_team_style_11:hover .twss_6310_team_style_11_title {
    color: <?php echo $cssData['member_font_hover_color'] ?>;
  }
 

  .twss_6310_team_style_11_designation {
    display: <?php echo ($cssData['twss_fun_template_designation'])?'block':'none'; ?>;
    font-family: <?php echo $cssData['designation_font_family'] ?>;
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    color: <?php echo $cssData['designation_font_color'] ?>;
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;
    margin-bottom: <?php echo $cssData['designation_margin_bottom'] ?>px;
    margin-top: <?php echo $cssData['designation_margin_top'] ?>px;
    padding:0 0 0 <?php echo $cssData['member_title_padding'] ?>px ;
    z-index: 1;
    position: relative;
    padding: 0 15px;
    
  }
  
  .twss_6310_team_style_11:hover .twss_6310_team_style_11_caption,
  .twss_6310_team_style_11:hover .twss_6310_team_style_11_designation {
    color: <?php echo $cssData['designation_font_hover_color'] ?>;
  }


  .twss_6310_team_style_11_profile_details {
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
  .twss_6310_team_style_11:hover .twss_6310_team_style_11_profile_details {
    color: <?php echo $cssData['details_font_hover_color'] ?>;
  }


   .twss_6310_team_style_11_contact {
     padding: 0;
     width: 100%;
     display: <?php echo ($cssData['twss_fun_template_contact'])?'block':'none'; ?>;
     margin: <?php echo $cssData['contact_margin_top'] ?>px 0 <?php echo $cssData['contact_margin_bottom'] ?>px 0;
    
   }
   
   div.twss_6310_team_style_11_contact div {
     font-size: <?php echo $cssData['contact_font_size'] ?>px;
     color: <?php echo $cssData['contact_font_color'] ?>;
     font-weight: <?php echo $cssData['contact_font_weight'] ?>;
     text-transform: <?php echo $cssData['contact_text_transform'] ?>;
     font-family: <?php echo str_replace("+", " ", $cssData['contact_font_family']); ?>;
     line-height: <?php echo $cssData['contact_line_height'] ?>px;
     text-align: <?php echo $cssData['contact_text_align'] ?>;
     border-bottom: <?php echo ($cssData['contact_border_bottom'] == 'none')?'none':"{$cssData['contact_border_bottom']} solid {$cssData['contact_border_bottom_color']}" ?>;
     float: left;
     width: 100%;
     text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
     padding: 2px 0;
     margin: 0;
     transition: all 0.6s ease 0s;
   }
   div.twss_6310_team_style_11_contact div:last-child {
     border-bottom: none;
   }


  .twss_6310_team_style_11:hover div.twss_6310_team_style_11_contact div
   {
    color: <?php echo $cssData['contact_font_hover_color'] ?>;
  }

  div.twss_6310_team_style_11_contact div span{
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    margin-right: 4px;
  }
  .twss_6310_team_style_11:hover div.twss_6310_team_style_11_contact div span{
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }



  
 
</style>