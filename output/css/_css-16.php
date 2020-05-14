<style type="text/css">
/*=========================style-21 start======================== */

.twss_6310_team_style_<?php echo $ids; ?> {
    text-align: center;
    cursor: pointer;
    float: left;
    width: 100%;
    position: relative;
    z-index: 1;
    overflow: hidden;
    -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-radius: <?php echo $cssData['image_radius'] ?>px;
    background-color: <?php echo $cssData['box_background_color'] ?>;
    box-shadow: 0 0 <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_color'] ?>;
}
.twss_6310_team_style_<?php echo $ids; ?>:hover {
  box-shadow: 0 0 <?php echo ($cssData['twss_hover_box_shadow_color'] * 2) ?>;
  box-shadow: 0px 3px <?php echo ($cssData['box_shadow_blur'] + 5) ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
  background-color: <?php echo $cssData['image_hover_background'] ?>;
}
.twss_6310_team_style_<?php echo $ids; ?>:after {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    background-color: <?php echo $cssData['box_middle_background_color'] ?>;
    top: 0;
    left: 0;
    border-radius: 57% 0 0 0;
    z-index: -1;
    transition: all .5s
}
.twss_6310_team_style_<?php echo $ids; ?>:hover:after {      
    border-radius: 0 0 50% 0;
    background-color: <?php echo $cssData['box_middle_hover_background_color'] ?>;
}

.twss_6310_team_style_<?php echo $ids; ?>_caption {
    margin: 10px  0 0 5px;
    padding: 10px 0 10px 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    
}
.twss_6310_team_style_<?php echo $ids; ?>_img {
    height: 77px;
    width: 77px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #fff;
    background: #fff;
    position: relative;
    text-align: center;
    float: left;
    margin-top: <?php echo $cssData['member_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['member_margin_bottom'] ?>px;
    
}

  .twss_6310_team_style_<?php echo $ids; ?>_img img {
    width: 100%;
    height: auto;
    float: left;
  }

.twss_6310_team_style_<?php echo $ids; ?>_content_group {
    display: inline-block;
    margin-left:10px;
}




.twss_6310_team_style_<?php echo $ids; ?>_title {
  position: relative;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
  font-size: <?php echo $cssData['member_font_size'] ?>px;
  color: <?php echo $cssData['member_font_color'] ?> ;
  font-weight: <?php echo $cssData['member_font_weight'] ?>;
  text-transform: <?php echo $cssData['member_text_transform']; ?>;
  font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
  
  line-height: <?php echo $cssData['member_line_height'] ?>px;
  margin-top: <?php echo $cssData['member_margin_top'] ?>px;

}
.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_title {
  color: <?php echo $cssData['member_font_hover_color'] ?> ;
}



.twss_6310_team_style_<?php echo $ids; ?>_designation {
  display: <?php echo ($cssData['twss_fun_template_designation'])?'block':'none'; ?>;
  font-family: <?php echo $cssData['designation_font_family'] ?>;
  font-size: <?php echo $cssData['designation_font_size'] ?>px;
  color: <?php echo $cssData['designation_font_color'] ?> ;
  font-weight: <?php echo $cssData['designation_font_weight'] ?>;
  text-transform: <?php echo $cssData['designation_text_transform'] ?>;
  line-height: <?php echo $cssData['designation_line_height'] ?>px;
   
  margin-bottom: <?php echo $cssData['member_margin_bottom'] ?>px;
  z-index: 1;
  position: relative;
  float: left !important;
  
}
.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_designation {
  color: <?php echo $cssData['designation_font_hover_color'] ?> ;
}



.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_profile_details {
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
  
  width: 90% !important;
  float: left !important;
  transform: translate(4%, 0%);
}
.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_profile_details {
  color: <?php echo $cssData['details_font_hover_color'] ?>;
}




.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_caption:after {
    background: #fff;
    color:#0d72e5;
}
.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_details,
 .twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_title,
  .twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_designation {    
    
}

.twss_6310_team_style_<?php echo $ids; ?> div.twss_6310_team_style_<?php echo $ids; ?>_social{
   padding: 0;
   list-style: none;
   text-align: <?php echo $cssData['icon_text_align']?>;
   width: 90% !important;
   float: left !important;
   transform: translate(4%, 0%);
   margin: <?php echo $cssData['social_margin_top'] ?>px 0 <?php echo $cssData['social_margin_bottom'] ?>px;
    display: <?php echo ($cssData['twss_fun_template_social'])?'block':'none'; ?>;
}
.twss_6310_team_style_<?php echo $ids; ?> div.twss_6310_team_style_<?php echo $ids; ?>_social div{
   display: inline-block;
   margin-right: 8px;
}
.twss_6310_team_style_<?php echo $ids; ?> div.twss_6310_team_style_<?php echo $ids; ?>_social div:last-child{
   margin-right: 0;
}

.twss_6310_team_style_<?php echo $ids; ?> div.twss_6310_team_style_<?php echo $ids; ?>_social div a{
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
div.twss_6310_team_style_<?php echo $ids; ?>_social div a i{
  padding:<?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 8) ?>px;
}
div.twss_6310_team_style_<?php echo $ids; ?>_social div a:hover{
   background: #fff;
   color: #d4434d
}



.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_contact {
   padding: 0;
   width: 90% !important;
   float: left !important;
   transform: translate(4%, 1%);
   display: <?php echo ($cssData['twss_fun_template_contact'])?'block':'none'; ?>;
   margin: <?php echo $cssData['contact_margin_top'] ?>px 0 <?php echo $cssData['contact_margin_bottom'] ?>px 0;
  
 }

 .twss_6310_team_style_<?php echo $ids; ?> div.twss_6310_team_style_<?php echo $ids; ?>_contact div {
   font-size: <?php echo $cssData['contact_font_size'] ?>px;
   color: <?php echo $cssData['contact_font_color'] ?>;
   font-weight: <?php echo $cssData['contact_font_weight'] ?>;
   text-transform: <?php echo $cssData['contact_text_transform'] ?>;
   font-family: <?php echo str_replace("+", " ", $cssData['contact_font_family']); ?>;
   line-height: <?php echo $cssData['contact_line_height'] ?>px;
   text-align: <?php echo $cssData['contact_text_align'] ?>;
   border-bottom: <?php echo ($cssData['contact_border_bottom'] == 'none')?'none':"{$cssData['contact_border_bottom']} solid {$cssData['contact_border_bottom_color']}" ?> !important;
   float: left;
   width: 100%;
   text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
   padding: 2px 0;
   margin: 0;
   transition: all 0.6s ease 0s;
 }
 div.twss_6310_team_style_<?php echo $ids; ?>_contact div:last-child {
   border-bottom: none;
 }


.twss_6310_team_style_<?php echo $ids; ?>:hover div.twss_6310_team_style_<?php echo $ids; ?>_contact div
 {
  color: <?php echo $cssData['contact_font_hover_color'] ?>;
}

div.twss_6310_team_style_<?php echo $ids; ?>_contact div span{
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    margin-right: 4px;
  }
  .twss_6310_team_style_<?php echo $ids; ?>:hover div.twss_6310_team_style_<?php echo $ids; ?>_contact div span{
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }


.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_member_skills_wrapper_<?php echo $ids; ?>{
   margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px !important;
  margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px !important; 

  width: 90% !important;
  float: left !important;
  transform: translate(4%, 0%);
}





.twss_6310_team_style_<?php echo $ids; ?>_team_content {
  padding: 20px;
}

.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more{
    width:90% !important;
    transform:translate(5%, 0%);
  }





.twss_6310_team_style_<?php echo $ids; ?>,
.twss_6310_team_style_<?php echo $ids; ?>_title,
.twss_6310_team_style_<?php echo $ids; ?>_designation,
.twss_6310_team_style_<?php echo $ids; ?>_designation:after,
.twss_6310_team_style_<?php echo $ids; ?>_profile_details,
.twss_6310_team_style_<?php echo $ids; ?>_contact,
.twss_6310_team_style_<?php echo $ids; ?>,
div.twss_6310_team_style_<?php echo $ids; ?>_social div a,
.twss_6310_team_style_<?php echo $ids; ?>_caption {
  -webkit-transition: all 0.6s ease 0s;
  -moz-transition: all 0.6s ease 0s;
  -ms-transition: all 0.6s ease 0s;
  -o-transition: all 0.6s ease 0s;
  transition: all 0.6s ease 0s;
}
  /*=========================style-21======================== */


 
</style>