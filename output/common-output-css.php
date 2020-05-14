<?php
   twss_fun_template_read_more_style($cssData, $ids);
   twss_fun_template_read_more_script($cssData, $ids);
?>
<style type="text/css">
.twss_main_template, .twss_main_template a{
  box-shadow: none !important;
}
.twss-6310-row{
  width: 100%;
  clear: both;
  display: table;
  text-align: center;
  margin-left: -15px;
  margin-right: -15px;
}
.twss-6310-img-responsive{
  width: 100%;
  height: auto;
}
.twss_6310_team_style_<?php echo $ids ?> figcaption{
  padding: 0;
  margin: 0;
  border: none;
}
.twss-6310-owl-carousel .twss-6310-item-<?php echo $ids ?>{
  padding: 5px 0;
}
.twss_6310_team_member_info{
  cursor: pointer;
}
.twss-6310-col-1{
  width: 100%;
  margin-bottom: 30px;
  float: left;
  position: relative;
}
.twss-6310-col-2, .twss-6310-col-3, .twss-6310-col-4, .twss-6310-col-5, .twss-6310-col-6{
  margin-right: auto;
  margin-bottom: 30px;
  display: inline-block;
  padding-left: 15px;
  padding-right: 15px;
}
.twss-6310-col-2{
  width: calc(50% - 4px);
}
.twss-6310-col-3{
  width: calc(33.33% - 4px);
}
.twss-6310-col-4{
  width: calc(25% - 4px);
}
.twss-6310-col-5{
  width: calc(20% - 4px);
}
.twss-6310-col-6{
  width: calc(16.6667% - 4px);
}
.twss-6310-col-2:nth-child(2n), .twss-6310-col-3:nth-child(3n), .twss-6310-col-4:nth-child(4n), .twss-6310-col-5:nth-child(5n), .twss-6310-col-6:nth-child(6n){
  margin-right: 0;
}
.twss_6310_modal_social a.twss-popup-link {
   width: <?php echo $cssData['social_icon_width'] + ($cssData['social_border_width'] * 2) ?>px !important;
  height: <?php echo $cssData['social_icon_height'] + ($cssData['social_border_width'] * 2) ?>px !important;

}
ul.twss_6310_team_style_<?php echo $ids ?>_social i[class*="fa-"]{
  line-height: <?php echo ($cssData['social_icon_height'] - 3) ?>px !important;
  width: <?php echo $cssData['social_icon_width'] ?>px !important;
  height: <?php echo $cssData['social_icon_height'] ?>px !important;
}
@media screen and (max-width: 767px) {
  .twss-6310-col-2, .twss-6310-col-3, .twss-6310-col-4, .twss-6310-col-5, .twss-6310-col-6{
    width: 100%;
    margin-right: 0;
  }
}

<?php
if ($cssData['twss_fun_template_slider'] == 1) {
  ?>
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div {
    position: absolute;
    top: calc(50% - <?php echo ($cssData['slider_prev_next_icon_size'] * 2) ?>px);
    background: <?php echo $cssData['slider_prev_next_bgcolor'] ?>;
    color: <?php echo $cssData['slider_prev_next_color'] ?>;
    margin: 0;
    transition: all 0.3s ease-in-out;
    text-align: center;
    padding: 0;
  }
  #twss-6310-slider-<?php echo $ids;?> .twss-6310-owl-nav div:hover{
    background: <?php echo $cssData['slider_prev_next_hover_bgcolor'];?>;
    /* color: <?php echo $cssData['slider_prev_next_hover_color'] ?>!important; */
  }
  #twss-6310-slider-<?php echo $ids;?> .twss-6310-owl-nav div:hover i{
    color: <?php echo $cssData['slider_prev_next_hover_color'] ?> !important;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-prev {
    left: 0;
    border-radius: 0 <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>% <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>% 0;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-next {
    right: 0; 
    border-radius: <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>% 0 0 <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>%;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-prev i[class*="fa-"], #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-next i[class*="fa-"]{
    color: <?php echo $cssData['slider_prev_next_color'] ?>;
    top: 0;
    font-size: <?php echo $cssData['slider_prev_next_icon_size'] ?>px;
    line-height: <?php echo ($cssData['slider_prev_next_icon_size'] + 15 ) ?>px;
    height: <?php echo ($cssData['slider_prev_next_icon_size'] + 15) ?>px;
    width: <?php echo ($cssData['slider_prev_next_icon_size'] + 15) ?>px;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-prev:hover .fa, #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-next:hover .fa{
    color: <?php echo $cssData['slider_prev_next_hover_color'] ?>;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-twss-6310-owl-dots {
    text-align: center;
    padding-top: 15px;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-twss-6310-owl-dots div {
    width: <?php echo $cssData['slider_indicator_width'] ?>px;
    height: <?php echo $cssData['slider_indicator_height'] ?>px;
    border-radius: <?php echo $cssData['slider_indicator_border_radius'] ?>%;
    display: inline-block;
    background-color: <?php echo $cssData['slider_indicator_color'] ?>;
    margin: 0 <?php echo $cssData['slider_indicator_margin'] ?>px;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-twss-6310-owl-dots div.active {
    background-color: <?php echo $cssData['slider_indicator_active_color'] ?>;
  }
  <?php
}
else if ($cssData['twss_fun_template_slider'] == 2) {
?>
#twss-6310-category-filter-<?php echo $ids ?> .twss_6310_category{
  width: 100%;
  text-align: center;
  position: relative;
  height: <?php echo $cssData['category_menu_height'] ?>px;
  line-height: <?php echo $cssData['category_menu_height'] ?>px;
  margin-bottom: <?php echo $cssData['category_margin_bottom']?>px;
  }
 #twss-6310-category-filter-<?php echo $ids ?> .twss_6310_category .twss_6310_category_list {
    display: inline-block;
    padding: 0 <?php echo $cssData['category_padding_right_left'] ?>px;
    position: relative;
    margin-right: <?php echo $cssData['category_margin_right'] ?>px;
    cursor: pointer;
    font-weight: <?php echo $cssData['category_font_weight'] ?>;
    color: <?php echo $cssData['category_font_color'] ?>; 
    border: <?php echo $cssData['category_border_width'] ?>px solid <?php echo $cssData['category_border_color'] ?>;
    font-family: <?php echo $cssData['category_font_family'] ?>;
    background-color: <?php echo $cssData['category_background_color'] ?> ;
    font-size: <?php echo $cssData['category_font_size'] ?>px;

  }

  #twss-6310-category-filter-<?php echo $ids ?> .twss_6310_category .twss_6310_category_list:hover{
    color: <?php echo $cssData['category_font_hover_color'] ?>;
    background-color: <?php echo $cssData['category_background_hover_color'] ?> ;
  }
  #twss-6310-category-filter-<?php echo $ids ?> .twss_6310_category .twss_6310_category_list_active{
    background-color: <?php echo $cssData['category_active_background_color'];?> !important;
    color:<?php echo $cssData['category_active_font_color'];?> !important;
    border-color:<?php echo $cssData['category_active_border_color'];?> !important;
  } 
<?php
}
?>





.twss_6310_member_skills_wrapper_<?php echo $ids ?> {
  margin: 0;
  width: 100%;
  float: left;
   margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px;
  margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px; 
}

.twss_6310_skills_label_<?php echo $ids ?> {
  font-size: <?php echo $cssData['skills_font_size'] ?>px;
  text-transform: <?php echo $cssData['skills_text_transform'] ?>;
  color: <?php echo $cssData['skills_font_color'] ?>;
  font-weight: <?php echo $cssData['skills_font_weight'] ?>;
  font-family: '<?php echo str_replace("+", " ", $cssData['skills_font_family']); ?>';
  line-height: <?php echo $cssData['skills_line_height'] ?>px;
  margin-bottom: 2px;
  text-align: left;
  display: block;
}

.twss_6310_team_style_01:hover .twss_6310_member_skills_wrapper_ .twss_6310_skills_label_{
  color: <?php echo $cssData['skills_font_hover_color'] ?>;
}

.twss_6310_skills_prog_<?php echo $ids ?> {
  overflow: hidden;
  height: <?php echo $cssData['progress_bar_height'] ?>px;
  margin-bottom: 6px;
  border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
  -webkit-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
  -moz-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
  -o-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
  border: <?php echo $cssData['progress_bar_border_size'] ?>px solid <?php echo $cssData['progress_bar_border_color'] ?>;
  background-color: <?php echo $cssData['progress_bar_background_color'] ?>;
  box-shadow: none;
  -o-box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-sizing: content-box;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;

}

.twss_6310_fill_<?php echo $ids ?> {
  background-color: <?php echo $cssData['progress_bar_color'] ?>;
  height: 100%;
  background-size: 20px 20px;
  <?php
      if ($cssData['progress_bar_type']) {
        ?>background-image: linear-gradient(135deg, <?php echo $cssData['progress_bar_alternate_color'] ?> 25%, transparent 25%,
      transparent 50%, <?php echo $cssData['progress_bar_alternate_color'] ?> 50%, <?php echo $cssData['progress_bar_alternate_color'] ?> 75%,
      transparent 75%, transparent);
  <?php
      }
      ?>
} 
</style>














<div id="twss_6310_loading">
  <img src="<?php echo $loading; ?>" />
</div>
<script>
var $ = jQuery;
jQuery(document).ready(function (e) {
  jQuery("body").on("click", ".twss-6310-close", function () {
    jQuery("#mytwss_6310_modal").remove();
    jQuery("body").css({
      "overflow": "initial"
    });
  });

  jQuery(window).click(function (event) {
    if (event.target == document.getElementById('mytwss_6310_modal')) {
      jQuery("#mytwss_6310_modal").remove();
      jQuery("body").css({
        "overflow": "initial"
      });
    }
  });
  <?php
  if ($cssData['twss_fun_template_slider'] == 1) {
    ?>
    var owlVar = jQuery("#twss-6310-slider-<?php echo $ids ?>");
    owlVar.twss6310OwlCarousel({
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 30,
      autoplayTimeout: <?php echo $cssData['effect_duration'] ?>,
      autoplayHoverPause: false,
      responsiveClass: true,
      autoHeight: true,
      nav: <?php echo $cssData['prev_next_active'] ?>,
      dots: <?php echo $cssData['indicator_activation'] ?>,
      navText: ["<i class='<?php echo $cssData['slider_icon_style'] ?>-left'></i>", "<i class='<?php echo $cssData['slider_icon_style'] ?>-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: <?php echo ($cssData['item_per_row'] > 2) ? 2 : $cssData['item_per_row']; ?>
        },
        1024: {
          items: <?php echo $cssData['item_per_row'] ?>
        },
        1366: {
          items: <?php echo $cssData['item_per_row'] ?>
        }
      }
    });
    owlVar.on('mouseleave', function () {
      owlVar.trigger('stop.owlVar.autoplay'); //this is main line to fix it
      owlVar.trigger('play.owlVar.autoplay', [<?php echo $cssData['prev_next_active'] ?>]);
    });

    <?php
  }
  if ($cssData['twss_fun_template_slider'] == 1) {
    echo "jQuery('#twss-6310-noslider-{$ids}, #twss-6310-category-filter-{$ids}').hide();";
    echo "jQuery('#twss-6310-slider-{$ids}').show();";
  }else if ($cssData['twss_fun_template_slider'] == 2) {
    echo "jQuery('#twss-6310-noslider-{$ids}, #twss-6310-slider-{$ids}').hide();";
    echo "jQuery('#twss-6310-category-filter-{$ids}').show();";
  } else {
    echo "jQuery('#twss-6310-slider-{$ids}, #twss-6310-category-filter-{$ids}').hide();";
    echo "jQuery('#twss-6310-noslider-{$ids}').show();";
  }

  if ($cssData[3] == 'true') {
    echo ' jQuery(".twss_6310_prev_next_act, #twss_6310_prev, #twss_6310_next, #twss_6310_prev_font_icon, #twss_6310_next_font_icon").show();';
  } else {
    echo ' jQuery(".twss_6310_prev_next_act, #twss_6310_prev, #twss_6310_next, #twss_6310_prev_font_icon, #twss_6310_next_font_icon").hide();';
  }

  if ($cssData['prev_next_active'] == 'true') {
    echo 'jQuery(".twss_6310_indicator_act, #twss_6310_carousel_indicators").show();';
  } else {
    echo 'jQuery(".twss_6310_indicator_act, #twss_6310_carousel_indicators").hide();';
  }
  ?>
});

</script>

<style type="text/css">
.twss_6310_modal, #twss_6310_loading {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 99999; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  font-family: sans-serif;
  letter-spacing: .02em;

}


/* twss_6310_modal Content */
.twss_6310_modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 75%;
  padding: 20px 15px 40px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  border-radius: 5px;
  -webkit-animation-duration: 0.4s;
  animation-duration: 0.4s;
  margin-bottom: 50px;
}

/* Add Animation */
@-webkit-keyframes twss-animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
@keyframes twss-animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes twss-animatebottom {
  from {bottom:-300px; opacity:0}
  to {bottom:0; opacity:1}
}

@-webkit-keyframes twss-animatebottom {
  from {bottom:-300px; opacity:0}
  to {bottom:0; opacity:1}
}

@keyframes twss-animateleft {
  from {left:-300px; opacity:0}
  to {left:0; opacity:1}
}

@-webkit-keyframes twss-animateleft {
  from {left:-300px; opacity:0}
  to {left:0; opacity:1}
}

@keyframes twss-animateright {
  from {right:-300px; opacity:0}
  to {right:0; opacity:1}
}

@-webkit-keyframes twss-animateright {
  from {right:-300px; opacity:0}
  to {right:0; opacity:1}
}
/* The Close Button */
.twss-6310-close {
  color: #000;
  float: right;
  font-size: 28px;
  font-weight: bold;
  line-height: 28px;
  padding: 0;
  margin: 0;
  position: absolute;
  right: 20px;
  top: 15px;
}

.twss-6310-close:hover,
.twss-6310-close:focus {
  color: #878787;
  text-decoration: none;
  cursor: pointer;
}
.twss_6310_modal_body_picture {
  float: left;
  width: 300px;
  padding-right: 15px;}
  .twss_6310_modal_body_content{
    width: calc(100% - 315px);
    float: left;
  }
  .twss_6310_modal_body_picture img{
    width: calc(100% - 12px) !important;
    height: auto;
    border: 1px solid #ccc;
    padding: 5px;
  }
  #twss_6310_modal_designation{
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 300;
    color: #727272
  }
  #twss_6310_modal_name{
    text-transform: capitalize;
    font-size: 22px;
    line-height: 30px;
    margin: 0 0 25px;
    font-weight: 600;
    color: #272727;
  }
  #twss_6310_modal_details, #twss_6310_modal_details p{
    font-size: 14px;
    line-height: 20px;
    color: #272727;
    padding: 0;
    margin: 0 0 10px 0;
  }
  .twss_6310_modal_social a{
    width: 35px;
    height: 35px;
    line-height: 35px;
    float:  left;
    margin: 15px 10px 0 0;
    font-size: 18px;
    border-radius: 3px;
    text-align: center;
    cursor: pointer;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    padding: 0;
    box-shadow: none;
    text-decoration: none;
  }
  .twss_6310_modal_social a:hover{
    box-shadow: none;
  }

  .twss_6310_modal-footer {
    padding: 10px 15px;
    color: white;
  }
  br.twss_6310_clear{
    clear: both;
  }
  #twss_6310_loading{
    padding-top: 170px; /* Location of the box */
    text-align: center;
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
  }
  #twss_6310_loading img{
    border-radius: 50%;
    width: 200px;
    height: 200px;
    position: fixed;
    left: calc(50% - 100px);
    top: calc(50% - 120px);
  }
  @media only screen and (max-width: 600px) {
    .twss_6310_modal-content{
      width: 90%;
    }
    .twss_6310_modal_body_content, .twss_6310_modal_body_picture img{
      width: 100% !important;
    }
    .twss_6310_modal_body_picture{
      width: 100%;
      padding: 0;
    }
  }
</style>
<!-- #####################  Slider Section Start #################### -->


<?php
if (!function_exists('twss6310_common_output_css')) {
  function twss6310_common_output_css($ids)
  {
    ?>
    <style type="text/css">
    ul.twss_6310_team_style_<?php echo $ids ?>_social{
      padding: 0 !important;
      list-style: none !important;
    }
    ul.twss_6310_team_style_<?php echo $ids ?>_social li{
      display: inline-block ;
      padding: 0 !important;
    }
    ul.twss_6310_team_style_<?php echo $ids ?>_social li a{
      display: inline-block !important;
      box-shadow: none !important;
      text-decoration: none !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    ul.twss_6310_team_style_<?php echo $ids ?>_social li a:hover{
      box-shadow: none !important;
      text-decoration: none !important;
    }
    </style>
    <?php
  }
}
?>
<style>
   .twss-6310-category-filter-row{
      display: table;
   }
   .twss-6310-category-filter-row .twss-6310-row{
      display: inline-block !important;
   }
   .twss-6310-category-filter-row .twss-6310-col-2{
      width: 50% !important;
   }
   .twss-6310-category-filter-row .twss-6310-col-3{
      width: 33.3333% !important;
   }
   .twss-6310-category-filter-row .twss-6310-col-4{
      width: 25% !important;
   }
   .twss-6310-category-filter-row .twss-6310-col-6{
      width: 16.6667% !important;
   }

   .twss-6310-category-filter-row .twss-6310-col-2,
   .twss-6310-category-filter-row .twss-6310-col-3,
   .twss-6310-category-filter-row .twss-6310-col-4,
   .twss-6310-category-filter-row .twss-6310-col-6{
      /* margin-left: 15px !important;
      margin-right: 15px !important; */
      float: left;
   }
</style>
<script>
  jQuery(document).ready(function() {  
    //Category Filter
    jQuery("body").on("click", ".twss_main_template_<?php echo $ids ?> .twss_6310_category_list", function() {
      let attr = jQuery(this).attr('twss-data-filter');
      jQuery('.twss_main_template_<?php echo $ids ?> .twss_6310_category_list').removeClass('twss_6310_category_list_active');
      jQuery(this).addClass('twss_6310_category_list_active');
      if (attr != 'all') {
        jQuery('.twss_main_template_<?php echo $ids ?> #twss-6310-category-filter-<?php echo $ids ?>')
          .find('.twss-6310-category-filter-items')
          .hide();
        jQuery('.' + attr).show();
      } else {
        jQuery('.twss_main_template_<?php echo $ids ?> #twss-6310-category-filter-<?php echo $ids ?>')
          .find('.twss-6310-category-filter-items')
          .show();
      }
    });
  });
</script>
