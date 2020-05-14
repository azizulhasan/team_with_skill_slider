<style type="text/css">

.twss_6310_team_style_<?php echo $ids; ?>{
    text-align: center;
    overflow: hidden;
    transition:all 0.3s ease 0s;
    cursor: pointer;
    font-family: 'Shanti';
    -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-radius: <?php echo $cssData['image_radius'] ?>px;
    box-shadow: 0 0 <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_color'] ?>;
}
.twss_6310_team_style_<?php echo $ids; ?>:hover {
    box-shadow: 0 0 <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['hover_box_shadow_color'] ?>; 
}

.twss-6310-row .twss-6310-col-3,
.twss-6310-row .twss-6310-col-2,
.twss-6310-row .twss-6310-col-4,
.twss-6310-row .twss-6310-col-5,
.twss-6310-row .twss-6310-col-6
{
   width: calc(33.33% - 20px);
   margin-right: 10px !important;
   padding-left: 0px !important; 
   padding-right: 0px !important;
}

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1),
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_first_color'] ?> 80%, <?php echo $cssData['box_background_first_hover_color'] ?> 20% );
     
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2),
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_second_color'] ?> 80%, <?php echo $cssData['box_background_second_hover_color'] ?> 20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3),
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_third_color'] ?> 80%, <?php echo $cssData['box_background_third_hover_color'] ?> 20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4),
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
    background: linear-gradient(to top, <?php echo $cssData['box_background_fourth_color'] ?> 80%, <?php echo $cssData['box_background_fourth_hover_color'] ?> 20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5),
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_five_color'] ?> 80%, <?php echo $cssData['box_background_five_hover_color'] ?> 20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6),
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_six_color'] ?> 80%, <?php echo $cssData['box_background_six_hover_color'] ?> 20% );
  }



  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>):hover .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
    
     background: linear-gradient(to top, <?php echo $cssData['box_background_first_hover_color'] ?>  80%, <?php echo $cssData['box_background_first_color'] ?>  20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>):hover .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_second_hover_color'] ?>  80%, <?php echo $cssData['box_background_second_color'] ?>  20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>):hover .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_third_hover_color'] ?>  80%, <?php echo $cssData['box_background_third_color'] ?>  20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>):hover .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_fourth_hover_color'] ?>  80%, <?php echo $cssData['box_background_fourth_color'] ?>  20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>):hover .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_five_hover_color'] ?>  80%, <?php echo $cssData['box_background_five_color'] ?>  20% );
  }
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6),
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_<?php echo $ids; ?>
  {
     background: linear-gradient(to top, <?php echo $cssData['box_background_six_hover_color'] ?>  80%, <?php echo $cssData['box_background_six_color'] ?>  20% );
  }





  .twss_6310_team_style_<?php echo $ids; ?>_img{
     position: relative;
     text-align: center;
     float: left;
     width: 100%;
  }
  .twss_6310_team_style_<?php echo $ids; ?>_img img{
      margin-top: 20px;
       border-radius: 50%;
       transition: all 0.3s ease 0s;
       width: calc(100% - 20px) ;
       height:auto;
  }

  img.twss_hover_image {
    display: none;
  }
  .twss_6310_team_style_<?php echo $ids; ?>:hover img.twss_hover_image {
    display: initial;
  }
  .twss_6310_team_style_<?php echo $ids; ?>:hover img.twss_front_image {
    display: none;
  }



  .twss_6310_team_style_<?php echo $ids; ?>_title {
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?> ;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    line-height: <?php echo $cssData['member_line_height'] ?>px;
    margin-top: <?php echo $cssData['member_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['member_margin_bottom'] ?>px;

    float: left;
    width: 100%;
    text-align: center;
     height: 45px;
    z-index: 1;
    z-index: 1;
  }


  .twss_6310_team_style_<?php echo $ids; ?>_caption{
    position: relative;
    float: left;
    width: 100%;
  }


  .twss_6310_team_style_<?php echo $ids; ?>_designation {
    overflow: hidden;
    display: block;
    width: 100%;
    display: <?php echo ($cssData['twss_fun_template_designation'])?'block':'none'; ?>;
    font-family: <?php echo $cssData['designation_font_family'] ?>;
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    color: <?php echo $cssData['designation_font_color'] ?> ;
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;
    margin-top: <?php echo $cssData['designation_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['designation_margin_bottom'] ?>px;
    z-index: 1;
    height: 45px;
      transition: all 0.3s ease 0s;  
  }



.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_designation {
   color: <?php echo $cssData['designation_font_hover_color'] ?> ;
}
.twss_6310_team_style_<?php echo $ids; ?>_profile_details {
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
  transform: translate(3%, 0%);
}
.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_profile_details {
  color: <?php echo $cssData['details_font_hover_color'] ?>;
}
.twss_6310_team_style_<?php echo $ids; ?>_contact {
  padding: 0;
  width: 90% !important;
  float: left !important;
  transform: translate(4%, 1%);
  display: <?php echo ($cssData['twss_fun_template_contact'])?'block':'none'; ?>;
  margin: <?php echo $cssData['contact_margin_top'] ?>px 0 <?php echo $cssData['contact_margin_bottom'] ?>px 0;
 
}
 div.twss_6310_team_style_<?php echo $ids; ?>_contact div {
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
.twss_6310_member_skills_wrapper_<?php echo $ids; ?>{
   margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px !important;
  margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px !important; 

  width: 90% !important;
  float: left !important;
  transform: translate(3%, 1%);
}
div.twss_6310_team_style_<?php echo $ids; ?>_social{
   list-style: none;
   padding: 0;
   text-align: <?php echo $cssData['icon_text_align']?>;
   position: relative;
   margin-top: <?php echo $cssData['social_margin_top'] ?>px;
   margin-bottom: <?php echo $cssData['social_margin_bottom'] ?>px;

}
div.twss_6310_team_style_<?php echo $ids; ?>_social div{
   display: inline-block;
   margin-right: 8px;
}
.twss_6310_team_style_<?php echo $ids; ?>_social div:last-child{
   margin-right: 0;
}
.twss_6310_team_style_<?php echo $ids; ?>_social div a{
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
  -ms-border-radius: <?php echo $cssData['social_border_radius'] ?>px;s
}
div.twss_6310_team_style_<?php echo $ids; ?>_social div a i{
  padding:<?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 8) ?>px;
}


.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_img img{
   border-color: #F43662;
}
.twss_6310_team_style_<?php echo $ids; ?> .twss_6310_team_style_<?php echo $ids; ?>_read_more{
  width:92%;
  transform:translate(4%, 0%);
}
.twss_6310_team_style_<?php echo $ids; ?>,
.twss_6310_team_style_<?php echo $ids; ?>_title,
.twss_6310_team_style_<?php echo $ids; ?>_designation,
.twss_6310_team_style_<?php echo $ids; ?>_border,
.twss_6310_team_style_<?php echo $ids; ?>_border:after,
.twss_6310_team_style_<?php echo $ids; ?>_profile_details,
.twss_6310_team_style_<?php echo $ids; ?>_contact,
.twss_6310_team_style_<?php echo $ids; ?>,
.twss_6310_team_style_<?php echo $ids; ?>_social,
div.twss_6310_team_style_<?php echo $ids; ?>_social div a,
.twss_6310_team_style_<?php echo $ids; ?>_caption {
  -webkit-transition: all 0.6s ease 0s;
  -moz-transition: all 0.6s ease 0s;
  -ms-transition: all 0.6s ease 0s;
  -o-transition: all 0.6s ease 0s;
  transition: all 0.6s ease 0s;
}



/*===================twss_6310_team_style_<?php echo $ids; ?> end=======================================*/



</style>







