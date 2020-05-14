<style type="text/css">

/*===================twss_6310_team_style_18 start=======================================*/
.twss_6310_team_style_18{
  text-align: center;
  overflow: hidden;
  border: 2px solid rgba(244, 54, 98, 1);
  transition:all 0.3s ease 0s;
  cursor: pointer;
  font-family: 'Shanti';

  -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
  -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
  -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
  -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
  border-radius: <?php echo $cssData['image_radius'] ?>px;
  background-color: <?php echo $cssData['box_background_color'] ?>;
  border: <?php echo $cssData['border_width'] ?>px solid <?php echo $cssData['border_color'] ?>;
  box-shadow: 0 0 <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_color'] ?>;

}

.twss_6310_team_style_18_img {
  float: left;
  width: 100%;
  height: auto;
  position: relative;
}


.twss_6310_team_style_18_img img{
   border: <?php echo $cssData['box_img_border_width'] ?>px solid <?php echo $cssData['box_img_border_color'] ?>;
   border-radius: 50%;
   box-shadow: 0 0 10px #ccc;
  -webkit-filter: grayscale(100%);
  -webkit-transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -ms-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
  width: 80%;
  height: calc(100% - 38px);
  margin-top: 10px;
}
.twss_6310_team_style_18:hover .twss_6310_team_style_18_img img{
  border: <?php echo $cssData['box_img_border_width'] ?>px solid <?php echo $cssData['box_img_hover_border_color'] ?>;
}

.twss-6310-owl-carousel .twss-6310-owl-item img {
 display: inline !important;
 width: 80% !important;
}

.twss_6310_team_style_18_caption{
  float:left;
}






.twss_6310_team_style_18_title {
  position: relative;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
  font-size: <?php echo $cssData['member_font_size'] ?>px;
  color: <?php echo $cssData['member_font_color'] ?> ;
  font-weight: <?php echo $cssData['member_font_weight'] ?>;
  text-transform: <?php echo $cssData['member_text_transform']; ?>;
  font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
  
  line-height: <?php echo $cssData['member_line_height'] ?>px;
  margin-bottom: <?php echo $cssData['member_margin_bottom'] ?>px;
  margin-top: <?php echo $cssData['member_margin_top'] ?>px;

}
.twss_6310_team_style_18:hover .twss_6310_team_style_18_title {
  color: <?php echo $cssData['member_font_hover_color'] ?> ;
}

.twss_6310_team_style_18_border{
   width: 100px;
   border-bottom: 3px solid <?php echo $cssData['designation_border_color'] ?>;
   display: block;
   margin: 0 auto;
   transition: all 0.3s ease 0s;
}
.twss_6310_team_style_18:hover .twss_6310_team_style_18_border{
   border-bottom: 3px solid <?php echo $cssData['designation_border_hover_color'] ?>;
}

.twss_6310_team_style_18_border:after{
   content: "";
   width: 34px;
   display: block;
   position: relative;
   top:3px;
   border-bottom: 3px solid <?php echo $cssData['designation_border_after_color'] ?>;
   margin: auto;
}
.twss_6310_team_style_18:hover .twss_6310_team_style_18_border:after{
   border-bottom: 3px solid <?php echo $cssData['designation_border_after_hover_color'] ?>;
}

.twss_6310_team_style_18_designation {
   overflow: hidden;
  opacity: 1;
  padding-top: 10px;
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
  -webkit-transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -ms-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
  
  
}




.twss_6310_team_style_18_profile_details {
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
  
  width: 95% !important;
  float: left !important;
  transform: translate(3%, 0%);
}
.twss_6310_team_style_18:hover .twss_6310_team_style_18_profile_details {
  color: <?php echo $cssData['details_font_hover_color'] ?>;
}



.twss_6310_team_style_18_contact {
  padding: 0;
  width: 95% !important;
  float: left !important;
  transform: translate(3%, 1%);
  display: <?php echo ($cssData['twss_fun_template_contact'])?'block':'none'; ?>;
  margin: <?php echo $cssData['contact_margin_top'] ?>px 0 <?php echo $cssData['contact_margin_bottom'] ?>px 0;
 
}
 div.twss_6310_team_style_18_contact div {
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
 div.twss_6310_team_style_18_contact div:last-child {
   border-bottom: none;
 }


.twss_6310_team_style_18:hover div.twss_6310_team_style_18_contact div
 {
  color: <?php echo $cssData['contact_font_hover_color'] ?>;
}
div.twss_6310_team_style_18_contact div span{
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    margin-right: 4px;
  }
  .twss_6310_team_style_18:hover div.twss_6310_team_style_18_contact div span{
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }
.twss_6310_member_skills_wrapper_18{
   margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px !important;
  margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px !important; 

  width: 95% !important;
  float: left !important;
  transform: translate(3%, 1%);
}

.twss_6310_team_style_18 div.twss_6310_team_style_18_social{
   padding: 0;
   list-style: none;
   float: left;
   width: 100%;   
   text-align: <?php echo $cssData['icon_text_align']?>;
    display:none;
    -webkit-transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -ms-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
   
}
.twss_6310_team_style_18:hover .twss_6310_team_style_18_designation {
  display:none;
  
  
}
.twss_6310_team_style_18:hover .twss_6310_team_style_18_social{
  display:block;
  margin-top:15px;
  margin-bottom:15px;
  margin: <?php echo $cssData['social_margin_top'] ?>px 0 <?php echo $cssData['social_margin_bottom'] ?>px;
  
  
}

.twss_6310_team_style_18 div.twss_6310_team_style_18_social div{
   display: inline-block;
   margin-right: 8px;
}
.twss_6310_team_style_18 div.twss_6310_team_style_18_social div:last-child{
   margin-right: 0;
}

.twss_6310_team_style_18 div.twss_6310_team_style_18_social div a{
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
.twss_6310_team_style_18 div.twss_6310_team_style_18_social div a:hover{
   background: #fff;
   color: #d4434d
}
div.twss_6310_team_style_18_social div a i{
  padding:<?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 8) ?>px;
}


.twss_6310_team_style_18 .twss_6310_team_style_18_read_more{
  width:95%;
  transform:translate(3%, 0%);
}
.twss_6310_team_style_18:hover {
  box-shadow: 0 0 <?php echo ($cssData['twss_hover_box_shadow_color'] * 2) ?>;
  box-shadow: 0px 3px <?php echo ($cssData['box_shadow_blur'] + 5) ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
  background: <?php echo $cssData['image_hover_background'] ?>;
}


.twss_6310_team_style_18,
.twss_6310_team_style_18_title,
.twss_6310_team_style_18_designation,
.twss_6310_team_style_18_border,
.twss_6310_team_style_18_border:after,
.twss_6310_team_style_18_profile_details,
.twss_6310_team_style_18_contact,
.twss_6310_team_style_18,
.twss_6310_team_style_18_social,
div.twss_6310_team_style_18_social div a,
.twss_6310_team_style_18_caption {
  -webkit-transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -ms-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
}

/*===================twss_6310_team_style_18 end=======================================*/



</style>







