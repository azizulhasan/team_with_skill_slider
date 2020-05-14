
<style>
  

  .twss_6310_team_style_<?php echo $ids ?> {
    text-align: center;
    cursor: pointer;
    width: calc(100% - 2px);
    float: left;
    border: 1px #006666 solid;
    -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-style: solid;
    border-width: <?php echo $cssData['border_width'] ?>px;
    border-color: <?php echo $cssData['border_color'] ?>;
    box-shadow: 0 0 <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['box_shadow_color'] ?>;
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover {
    box-shadow: 0 0 <?php echo ($cssData['twss_hover_box_shadow_color'] * 2) ?>;
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
  }


  
.twss_6310_team_style_<?php echo $ids ?> .twss-6310-col-left, 
.twss_6310_team_style_<?php echo $ids ?> .twss-6310-col-right {
  float: left !important;
  width: 50% !important;
}



  .twss_6310_team_style_<?php echo $ids ?>_img {
    position: relative;
    overflow: hidden;
    width: 100%;
    float: left;
    margin-bottom: 15px;
  }
  .twss_6310_team_style_<?php echo $ids ?>_img:after {
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.2);
    position: absolute;
    bottom: -100%;
    left: 0;
    transition: all 0.3s ease 0s;
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover .twss_6310_team_style_<?php echo $ids ?>_img:after {
    bottom: 0;
  }
  .twss_6310_team_style_<?php echo $ids ?> img {
    width: 100%;
    height: auto;
  }
  
  div.twss_6310_team_style_<?php echo $ids ?>_social {
    padding: 0 0 18px 0;
    list-style: none;
    position: absolute;
    top: -100%;
    right: 10px;
    border-radius: 0 0 20px 20px;
    z-index: 1;
    transition: all 0.3s ease 0s;
    display: <?php echo ($cssData['twss_fun_template_social'])?'block':'none'; ?>;
    margin: <?php echo $cssData['social_margin_top'] ?>px 0 0 0;
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover div.twss_6310_team_style_<?php echo $ids ?>_social {
    top: 30px;
  }
  div.twss_6310_team_style_<?php echo $ids ?>_social div {
    display: block;
    margin: 5px 0px;
  }
  div.twss_6310_team_style_<?php echo $ids; ?>_social div a {
    display: inline-block;
    transition: all 0.5s ease 0s;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
    border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -webkit-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['social_border_radius'] ?>px;

  }
  div.twss_6310_team_style_<?php echo $ids ?>_social div a i{
  padding:<?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 8) ?>px;
}

  .twss_6310_team_style_<?php echo $ids ?>_caption {
      padding: 20px 0;
      background: #2ec4b6;
      text-align: center;
      z-index: 1;
      float: left;
      width: 100%;
      transition: all 0.5s ease 0s;
      background-color: <?php echo $cssData['box_background_color'] ?>
    }
    .twss_6310_team_style_<?php echo $ids ?>_caption:hover {
      background-color: <?php echo $cssData['image_hover_background'] ?>;
    }

 
  .twss_6310_team_style_<?php echo $ids ?>_title {
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?>;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    margin-top:<?php echo $cssData['member_margin_top'] ?>px;
    line-height:<?php echo $cssData['member_line_height'];?>px;
    position: relative;
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover .twss_6310_team_style_<?php echo $ids ?>_title {
    color: <?php echo $cssData['member_font_hover_color'] ?>;
  }
  .twss_6310_team_style_<?php echo $ids ?>_title:before {
    content: "";
    width: 25px;
    height: 1px;
    background: #27ae61;
    background-color: <?php echo $cssData['member_border_color'] ?>;
    position: absolute;
    bottom: -10px;
    right: 50%;
    margin-right: 9px;
    transition-duration: 0.25s;
  }





  .twss_6310_team_style_<?php echo $ids ?>_title:after {
    content: "";
    width: 25px;
    height: 1px;
    background: #27ae61;
    background-color: <?php echo $cssData['member_border_color'] ?>;
    position: absolute;
    bottom: -10px;
    left: 50%;
    margin-left: 9px;
    transition-duration: 0.25s;
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover .twss_6310_team_style_<?php echo $ids ?>_title:before,
  .twss_6310_team_style_<?php echo $ids ?>:hover .twss_6310_team_style_<?php echo $ids ?>_title:after {
    width: 50px;
    background-color: <?php echo $cssData['member_border_hover_color'] ?>;
  }

  .twss_6310_team_style_<?php echo $ids ?>_designation {
    display: <?php echo ($cssData['twss_fun_template_designation'])?'block':'none'; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    color: <?php echo $cssData['designation_font_color'] ?>;
    padding: 0 15px;
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;
    position: relative;
    z-index: 1;
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover .twss_6310_team_style_<?php echo $ids ?>_designation {
    color: <?php echo $cssData['designation_font_hover_color'] ?>;
  }
  

  .twss_6310_team_style_<?php echo $ids ?>_designation:before {
    content: "";
    display: block;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #27ae61;
    margin: 0 auto;
    position: relative;
    top: -1 + <?php echo $cssData['designation_margin_top'] ?>px;
    background-color: <?php echo $cssData['member_border_color'] ?>;
    margin-top: 7px;
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover .twss_6310_team_style_<?php echo $ids ?>_designation:before {
    background-color: <?php echo $cssData['member_border_hover_color'] ?>;
    
  }

  div.twss_6310_team_style_<?php echo $ids ?>_contact {
     
    float: left;
    width: 95% ;
    transform: translate(3%, 0%);
     display: <?php echo ($cssData['twss_fun_template_contact'])?'block':'none'; ?>;
     margin-top: <?php echo $cssData['contact_margin_top'] ?>px;
     margin-bottom:<?php echo $cssData['contact_margin_bottom'] ?>px;
   }
   
   

   div.twss_6310_team_style_<?php echo $ids ?>_contact div {

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
  div.twss_6310_team_style_<?php echo $ids ?>_contact  div:last-child {
     border-bottom: none;
   }
  .twss_6310_team_style_<?php echo $ids ?>:hover div.twss_6310_team_style_<?php echo $ids ?>_contact  div
   {
    color: <?php echo $cssData['contact_font_hover_color'] ?>;
  }

  div.twss_6310_team_style_<?php echo $ids ?>_contact div span{
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    margin-right: 4px;
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover div.twss_6310_team_style_<?php echo $ids ?>_contact div span{
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }



  .twss_6310_team_style_<?php echo $ids ?>_profile_details {
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
    width: 95% ;
    transform: translate(3%, 0%);
  }
  .twss_6310_team_style_<?php echo $ids ?>:hover .twss_6310_team_style_<?php echo $ids ?>_profile_details {
    color: <?php echo $cssData['details_font_hover_color'] ?>;
  } 

  .twss_6310_team_style_<?php echo $ids ?> .twss_6310_team_style_<?php echo $ids ?>_read_more
   {
    width:95% !important;
    transform:translate(3%, 0%);
  }






  .twss_6310_member_skills_wrapper_<?php echo $ids ?>{
    float:left ;
    width: 95% !important;
    transform: translate(3%, 0%);
    margin-top: <?php echo $cssData['progress_bar_margin_top'];?>px;
    margin-bottom:<?php echo $cssData['progress_bar_margin_bottom'];?>px;
  }
  .twss_6310_team_style_<?php echo $ids ?>,
  .twss_6310_team_style_<?php echo $ids ?>_title,
  .twss_6310_team_style_<?php echo $ids ?>_designation,
  .twss_6310_team_style_<?php echo $ids ?>_designation:before,
  .twss_6310_team_style_<?php echo $ids ?>_profile_details,
  
  ul.twss_6310_team_style_<?php echo $ids ?>_contact  li,
  .twss_6310_team_style_<?php echo $ids ?>,
  .twss_6310_team_style_<?php echo $ids ?>_caption {
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }
  
 
</style>