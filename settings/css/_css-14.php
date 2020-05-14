

<style>
  /*=========================style-13======================== */
 
  .twss_6310_team_style_14 {
    text-align: center;
    border-left: 8px solid #3b336a;
    border-bottom: 8px solid #3b336a;
    cursor: pointer;
    float: left;
    /* width: calc(100% - 8px); */
    width: 100%;
    overflow: hidden;
    position: relative;
    border-left: <?php echo $cssData['border_width'] ?>px solid #3b336a;
    border-bottom: <?php echo $cssData['border_width'] ?>px solid #3b336a;
    -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-color: <?php echo $cssData['border_color'] ?>;
    box-shadow: 0 0 <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_color'] ?>;
    background-color: <?php echo $cssData['box_background_color'] ?>;
  }
  .twss_6310_team_style_14:hover {
    box-shadow: 0 0 <?php echo ($cssData['twss_hover_box_shadow_color'] * 2) ?>;
   
    box-shadow: 0px 3px <?php echo ($cssData['box_shadow_blur'] + 5) ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
    background-color: <?php echo $cssData['image_hover_background'] ?>;
  }





  img.twss_hover_image {
    display: none;
  }
  .twss_6310_team_style_14:hover img.twss_hover_image {
    display: initial;
  }
  .twss_6310_team_style_14:hover img.twss_front_image {
    display: none;
  }

  .twss_6310_team_style_14_img {
    position: relative;
    text-align: center;
    float: left;
    width: 100%;
  }
  .twss_6310_team_style_14 img {
    width: 100%;
    height: auto;
    float: left;
  }

  .twss_6310_team_style_14_title {
    background: <?php echo $cssData['member_title_background_color'] ?>;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?> ;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    position: relative;
    line-height: <?php echo $cssData['member_line_height'] ?>px;
    margin-bottom: <?php echo $cssData['member_margin_bottom'] ?>px;
    margin-top: <?php echo $cssData['member_margin_top'] ?>px;
    padding:0 0 0 <?php echo $cssData['member_title_padding'] ?>px ;

  }
  .twss_6310_team_style_14:hover .twss_6310_team_style_14_title {
    color: <?php echo $cssData['member_font_hover_color'] ?> ;
  }


  .twss_6310_team_style_14_designation {
    display: <?php echo ($cssData['twss_fun_template_designation'])?'block':'none'; ?>;
    font-family: <?php echo $cssData['designation_font_family'] ?>;
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    color: <?php echo $cssData['designation_font_color'] ?> ;
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;
     margin-bottom: <?php echo $cssData['designation_margin_bottom'] ?>px;
    margin-top: <?php echo $cssData['designation_margin_top'] ?>px; 
    z-index: 1;
    position: relative;
    padding: 0 15px;
    
  }
  .twss_6310_team_style_14_caption {
    color: #013627;
    text-align: center;
    position: relative;
    overflow: hidden;
    z-index: 1;
    width:100%;
    transition: all 0.5s ease 0s;
  }

  .twss_6310_team_style_14:hover .twss_6310_team_style_14_caption,
  .twss_6310_team_style_14:hover .twss_6310_team_style_14_designation {
    color: <?php echo $cssData['designation_font_hover_color'] ?> ;
  }


  div.twss_6310_team_style_14_social {
    list-style: none;
    top: -12px;
    position: absolute;
    padding: 0px 10px;
    background-color:  <?php echo $cssData['border_color'] ?>;
    text-align: center;
    transform: translate(25px, 0px) rotateY(90deg);
    transition: all 0.5s ease 0s;
    margin: <?php echo $cssData['social_margin_top'] ?>px 0 <?php echo $cssData['social_margin_bottom'] ?>px;
    display: <?php echo ($cssData['twss_fun_template_social'])?'block':'none'; ?>;
  }
  .twss_6310_team_style_14:hover div.twss_6310_team_style_14_social {
    transform: translate(0px, 0px) rotateY(0deg);
  }
  div.twss_6310_team_style_14_social div {
    display: block;
    margin: 15px 0px;
  }

  div.twss_6310_team_style_14_social div a {
    display: inline-block;
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
  .twss_6310_team_style_14_team_content {
    padding: 20px;
  }
  

  .twss_6310_team_style_14_profile_details {
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
    width:95% !important;
    transform:translate(3%, 0%) !important;
    float: left !important; 
  }
  .twss_6310_team_style_14:hover .twss_6310_team_style_14_profile_details {
    color: <?php echo $cssData['details_font_hover_color'] ?>;
  }


   .twss_6310_team_style_14_contact {
     padding: 0;
     width:95% !important;
    transform:translate(3%, 0%) !important;
    float: left !important; 
     display: <?php echo ($cssData['twss_fun_template_contact'])?'block':'none'; ?>;
     margin: <?php echo $cssData['contact_margin_top'] ?>px 0 <?php echo $cssData['contact_margin_bottom'] ?>px 0;
    
   }
   
   div.twss_6310_team_style_14_contact div {
     font-size: <?php echo $cssData['contact_font_size'] ?>px;
     color: <?php echo $cssData['contact_font_color'] ?>;
     font-weight: <?php echo $cssData['contact_font_weight'] ?>;
     text-transform: <?php echo $cssData['contact_text_transform'] ?>;
     font-family: <?php echo str_replace("+", " ", $cssData['contact_font_family']); ?>;
     line-height: <?php echo $cssData['contact_line_height'] ?>px;
     text-align: <?php echo $cssData['contact_text_align'] ?>;
     border-bottom: <?php echo ($cssData['contact_border_bottom'] == 'none')?'none':"{$cssData['contact_border_bottom']} solid {$cssData['contact_border_bottom_color']}" ?>;
     width:100% !important;
    float: left !important; 
     text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
     padding: 2px 0;
     margin: 0;
     transition: all 0.6s ease 0s;
   }
   div.twss_6310_team_style_14_contact div:last-child {
     border-bottom: none;
   }

  .twss_6310_team_style_14:hover div.twss_6310_team_style_14_contact div
   {
    color: <?php echo $cssData['contact_font_hover_color'] ?>;
  }
  div.twss_6310_team_style_14_contact div span{
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    margin-right: 4px;
  }
  .twss_6310_team_style_14:hover div.twss_6310_team_style_14_contact div span{
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }

  .twss_6310_member_skills_wrapper_14{
    width:95% !important;
    transform:translate(3%, 0%) !important;
    float: left !important; 
  }
  .twss_6310_team_style_14_read_more{
    width:95% !important;
    transform:translate(3%, 0%) !important;
  }



  .twss_6310_team_style_14,
  .twss_6310_team_style_14_title,
  .twss_6310_team_style_14_designation,
  .twss_6310_team_style_14_designation:after,
  .twss_6310_team_style_14_profile_details,
  .twss_6310_team_style_14_contact,
  .twss_6310_team_style_14,
  .twss_6310_team_style_14_caption {
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }

  .twss_6310_member_skills_wrapper_{
    margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px !important;
    margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px !important;
    width:100%;
    float: left !important; 
  }
  



  
 
</style>