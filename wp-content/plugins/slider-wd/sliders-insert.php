<?php

function wds_insert() {
  global $wpdb;
  $wdsslider = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wdsslider` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(127) NOT NULL,
    `published` tinyint(1) NOT NULL,
    `full_width` tinyint(1) NOT NULL,
    `auto_height` tinyint(1) NOT NULL,
    `width` int(4) NOT NULL,
    `height` int(4) NOT NULL,
    `align` varchar(8) NOT NULL,
    `effect` varchar(16) NOT NULL,
    `time_intervval` int(4) NOT NULL,
    `autoplay` tinyint(1) NOT NULL,
    `shuffle` tinyint(1) NOT NULL,
    `music` tinyint(1) NOT NULL,
    `music_url` mediumtext NOT NULL,
    `preload_images` tinyint(1) NOT NULL,
    `background_color` varchar(8) NOT NULL,
    `background_transparent` int(4) NOT NULL,
    `glb_border_width` int(4) NOT NULL,
    `glb_border_style` varchar(16) NOT NULL,
    `glb_border_color` varchar(8) NOT NULL,
    `glb_border_radius` varchar(32) NOT NULL,
    `glb_margin` int(4) NOT NULL,
    `glb_box_shadow` varchar(127) NOT NULL,
    `image_right_click` tinyint(1) NOT NULL,
    `layer_out_next` tinyint(1) NOT NULL,
    `prev_next_butt` tinyint(1) NOT NULL,
    `play_paus_butt` tinyint(1) NOT NULL,
    `navigation` varchar(16) NOT NULL,
    `rl_butt_style` varchar(16) NOT NULL,
    `rl_butt_size` int(4) NOT NULL,
    `pp_butt_size` int(4) NOT NULL,
    `butts_color` varchar(8) NOT NULL,
    `butts_transparent` int(4) NOT NULL,
    `hover_color` varchar(8) NOT NULL,
    `nav_border_width` int(4) NOT NULL,
    `nav_border_style` varchar(16) NOT NULL,
    `nav_border_color` varchar(8) NOT NULL,
    `nav_border_radius` varchar(32) NOT NULL,
    `nav_bg_color` varchar(8) NOT NULL,
    `bull_position` varchar(16) NOT NULL,
    `bull_style` varchar(20) NOT NULL,
    `bull_size` int(4) NOT NULL,
    `bull_color` varchar(8) NOT NULL,
    `bull_act_color` varchar(8) NOT NULL,
    `bull_margin` int(4) NOT NULL,
    `film_pos` varchar(16) NOT NULL,
    `film_small_screen` int(4) NOT NULL,
    `film_thumb_width` int(4) NOT NULL,
    `film_thumb_height` int(4) NOT NULL,
    `film_bg_color` varchar(8) NOT NULL,
    `film_tmb_margin` int(4) NOT NULL,
    `film_act_border_width` int(4) NOT NULL,
    `film_act_border_style` varchar(16) NOT NULL,
    `film_act_border_color` varchar(8) NOT NULL,
    `film_dac_transparent` int(4) NOT NULL,
    `built_in_watermark_type` varchar(16) NOT NULL,
    `built_in_watermark_position` varchar(16) NOT NULL,
    `built_in_watermark_size` int(4) NOT NULL,
    `built_in_watermark_url` mediumtext NOT NULL,
    `built_in_watermark_text` mediumtext NOT NULL,
    `built_in_watermark_font_size` int(4) NOT NULL,
    `built_in_watermark_font` varchar(16) NOT NULL,
    `built_in_watermark_color` varchar(8) NOT NULL,
    `built_in_watermark_opacity` int(4) NOT NULL,
    `css` mediumtext NOT NULL,
    `timer_bar_type` varchar(16) NOT NULL,
    `timer_bar_size` int(4) NOT NULL,
    `timer_bar_color` varchar(8) NOT NULL,
    `timer_bar_transparent` int(4) NOT NULL,
    `spider_uploader` tinyint(1) NOT NULL,
    `stop_animation`  tinyint(1) NOT NULL,
    `right_butt_url` varchar(255) NOT NULL,
    `left_butt_url` varchar(255) NOT NULL,
    `right_butt_hov_url` varchar(255) NOT NULL,
    `left_butt_hov_url` varchar(255) NOT NULL,
    `rl_butt_img_or_not` varchar(8) NOT NULL,
    `bullets_img_main_url` varchar(255) NOT NULL,
    `bullets_img_hov_url` varchar(255) NOT NULL,
    `bull_butt_img_or_not` varchar(8) NOT NULL,
    `play_paus_butt_img_or_not` varchar(8) NOT NULL,
    `play_butt_url` varchar(255) NOT NULL,
    `play_butt_hov_url` varchar(255) NOT NULL,
    `paus_butt_url` varchar(255) NOT NULL,
    `paus_butt_hov_url` varchar(255) NOT NULL,
    `start_slide_num` int(4) NOT NULL,
    `effect_duration` int(6) NOT NULL,
    `carousel` tinyint(1) NOT NULL,
    `carousel_image_counts` int(4) NOT NULL,
    `carousel_image_parameters` varchar(8) NOT NULL,
    `carousel_fit_containerWidth` tinyint(1) NOT NULL,
    `carousel_width` int(4) NOT NULL,
    `parallax_effect` tinyint(1) NOT NULL,
    `mouse_swipe_nav` tinyint(1) NOT NULL,
    `bull_hover` int(1) NOT NULL,
    `touch_swipe_nav` tinyint(1) NOT NULL,
    `mouse_wheel_nav` tinyint(1) NOT NULL,
    `keyboard_nav` tinyint(1) NOT NULL,
    `possib_add_ffamily` varchar(255) NOT NULL,
    `show_thumbnail` tinyint(1) NOT NULL,
    `thumb_size` varchar(8) NOT NULL,
    `fixed_bg` tinyint(1) NOT NULL,
    `smart_crop` tinyint(1) NOT NULL,
    `crop_image_position` varchar(16) NOT NULL,
    `javascript` text NOT NULL,
    `carousel_degree` int(4) NOT NULL,
    `carousel_grayscale` int(4) NOT NULL,
    `carousel_transparency` int(4) NOT NULL,
    `bull_back_act_color` varchar(8) NOT NULL,
    `bull_back_color` varchar(8) NOT NULL,
    `bull_radius` varchar(32) NOT NULL,
    `possib_add_google_fonts` tinyint(1) NOT NULL,
    `possib_add_ffamily_google` varchar(255) NOT NULL,
    `slider_loop` tinyint(1) NOT NULL,
    `hide_on_mobile` int(4) NOT NULL,
    `twoway_slideshow` tinyint(1) NOT NULL,
    `full_width_for_mobile` int(4) NOT NULL,
    `order_dir` varchar(4) NOT NULL,
    PRIMARY KEY (`id`)
  ) DEFAULT CHARSET=utf8;";
  $wpdb->query($wdsslider);
  $wdsslide = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wdsslide` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `slider_id` bigint(20) NOT NULL,
    `title` longtext NOT NULL,
    `type` varchar(128) NOT NULL,
    `image_url` mediumtext NOT NULL,
    `thumb_url` mediumtext NOT NULL,
    `published` tinyint(1) NOT NULL,
    `link` mediumtext NOT NULL,
    `order` bigint(20) NOT NULL,
    `target_attr_slide` tinyint(1) NOT NULL,
    `youtube_rel_video` tinyint(1) NOT NULL,
    `video_loop` tinyint(1) NOT NULL,
    `fillmode` varchar(10) NOT NULL,
    `mute` tinyint(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
  ) DEFAULT CHARSET=utf8;";
  $wpdb->query($wdsslide);
  $wdslayer = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wdslayer` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` longtext NOT NULL,
    `slide_id` bigint(20) NOT NULL,
    `type` varchar(8) NOT NULL,
    `depth` bigint(20) NOT NULL,
    `text` mediumtext NOT NULL,
    `link` mediumtext NOT NULL,
    `left` int(4) NOT NULL,
    `top` int(4) NOT NULL,
    `hide_on_mobile` int(4) NOT NULL,
    `start` bigint(20) NOT NULL,
    `end` bigint(20) NOT NULL,
    `published` tinyint(1) NOT NULL,
    `color` varchar(8) NOT NULL,
    `size` bigint(20) NOT NULL,
    `ffamily` varchar(32) NOT NULL,
    `fweight` varchar(8) NOT NULL,
    `padding` varchar(32) NOT NULL,
    `fbgcolor` varchar(8) NOT NULL,
    `transparent` int(4) NOT NULL,
    `border_width` int(4) NOT NULL,
    `border_style` varchar(16) NOT NULL,
    `border_color` varchar(8) NOT NULL,
    `border_radius` varchar(32) NOT NULL,
    `shadow` varchar(127) NOT NULL,
    `image_url` mediumtext NOT NULL,
    `image_width` int(4) NOT NULL,
    `image_height` int(4) NOT NULL,
    `image_scale` varchar(8) NOT NULL,
    `alt` varchar(127) NOT NULL,
    `imgtransparent` int(4) NOT NULL,
    `social_button` varchar(16) NOT NULL,
    `hover_color` varchar(8) NOT NULL,
    `layer_effect_in` varchar(32) NOT NULL,
    `duration_eff_in` bigint(20) NOT NULL,
    `layer_effect_out` varchar(32) NOT NULL,
    `duration_eff_out` bigint(20) NOT NULL,
    `target_attr_layer` tinyint(1) NOT NULL,
    `hotp_width` int(4) NOT NULL,
    `hotp_fbgcolor`  varchar(8) NOT NULL,
    `hotp_border_width` int(4) NOT NULL,
    `hotp_border_style` varchar(16) NOT NULL,
    `hotp_border_color` varchar(8) NOT NULL,
    `hotp_border_radius` varchar(32) NOT NULL,
    `hotp_text_position` varchar(6) NOT NULL,
    `google_fonts` int(1) NOT NULL,
    `add_class` varchar(127) NOT NULL,
    `layer_video_loop` tinyint(1) NOT NULL,
    `youtube_rel_layer_video` tinyint(1) NOT NULL,
    `hotspot_animation` tinyint(1) NOT NULL,
    `layer_callback_list` varchar(32) NOT NULL,
    `hotspot_text_display` varchar(8) NOT NULL,
    `hover_color_text` varchar(8) NOT NULL,
    `text_alignment` varchar(8) NOT NULL,
    `link_to_slide` int(4) NOT NULL,
    `align_layer` tinyint(1) NOT NULL,
    `static_layer` tinyint(1) NOT NULL,
    `infinite_in` int(4) NOT NULL DEFAULT '1',
    `infinite_out` int(4) NOT NULL DEFAULT '1',
    `min_size` int(4) NOT NULL,
    PRIMARY KEY (`id`)
  ) DEFAULT CHARSET=utf8;";
  $wpdb->query($wdslayer);
  $global_options = json_encode(WDW_S_Library::global_options_defults());
  update_option('wds_global_options', $global_options);

  if ( WDS()->is_free ) {
    if ( !$wpdb->get_var("SELECT * FROM " . $wpdb->prefix . "wdsslider") ) {
      $wpdb->insert($wpdb->prefix . 'wdsslider', array(
        'id' => 1,
        'name' => 'Default slider',
        'published' => 1,
        'full_width' => 0,
        'width' => 800,
        'height' => 300,
        'align' => 'center',
        'effect' => 'none',
        'time_intervval' => 5,
        'autoplay' => 1,
        'shuffle' => 0,
        'music' => 0,
        'music_url' => '',
        'preload_images' => 1,
        'background_color' => '000000',
        'background_transparent' => 100,
        'glb_border_width' => 0,
        'glb_border_style' => 'none',
        'glb_border_color' => 'FFFFFF',
        'glb_border_radius' => '',
        'glb_margin' => 0,
        'glb_box_shadow' => '',
        'image_right_click' => 0,
        'layer_out_next' => 1,
        'prev_next_butt' => 1,
        'play_paus_butt' => 0,
        'navigation' => 'hover',
        'rl_butt_style' => 'fa-angle',
        'rl_butt_size' => 40,
        'pp_butt_size' => 40,
        'butts_color' => 'FFFFFF',
        'butts_transparent' => 100,
        'hover_color' => 'CCCCCC',
        'nav_border_width' => 0,
        'nav_border_style' => 'none',
        'nav_border_color' => 'FFFFFF',
        'nav_border_radius' => '20px',
        'nav_bg_color' => 'FFFFFF',
        'bull_position' => 'bottom',
        'bull_style' => 'fa-square-o',
        'bull_size' => 20,
        'bull_color' => 'FFFFFF',
        'bull_act_color' => 'FFFFFF',
        'bull_margin' => 3,
        'film_pos' => 'none',
        'film_small_screen' => 0,
        'film_thumb_width' => 100,
        'film_thumb_height' => 50,
        'film_bg_color' => '000000',
        'film_tmb_margin' => 0,
        'film_act_border_width' => 0,
        'film_act_border_style' => 'none',
        'film_act_border_color' => 'FFFFFF',
        'film_dac_transparent' => 50,
        'timer_bar_type' => 'none',
        'timer_bar_size' => 5,
        'timer_bar_color' => 'FFFFFF',
        'timer_bar_transparent' => 50,
        'built_in_watermark_type' => 'none',
        'built_in_watermark_position' => 'middle-center',
        'built_in_watermark_size' => 15,
        'built_in_watermark_url' => WDS()->plugin_url . '/images/watermark.png',
        'built_in_watermark_text' => '10Web.io',
        'built_in_watermark_font_size' => 20,
        'built_in_watermark_font' => '',
        'built_in_watermark_color' => 'FFFFFF',
        'built_in_watermark_opacity' => 70,
        'css' => '',
        'stop_animation' => 0,
        'spider_uploader' => 0,
        'right_butt_url' => WDS()->plugin_url . '/images/arrow/arrow11/1/2.png',
        'left_butt_url' => WDS()->plugin_url . '/images/arrow/arrow11/1/1.png',
        'right_butt_hov_url' => WDS()->plugin_url . '/images/arrow/arrow11/1/4.png',
        'left_butt_hov_url' => WDS()->plugin_url . '/images/arrow/arrow11/1/3.png',
        'rl_butt_img_or_not' => 'style',
        'bullets_img_main_url' => WDS()->plugin_url . '/images/bullet/bullet1/1/1.png',
        'bullets_img_hov_url' => WDS()->plugin_url . '/images/bullet/bullet1/1/2.png',
        'bull_butt_img_or_not' => 'style',
        'play_butt_url' => WDS()->plugin_url . '/images/button/button4/1/1.png',
        'paus_butt_url' => WDS()->plugin_url . '/images/button/button4/1/3.png',
        'play_butt_hov_url' => WDS()->plugin_url . '/images/button/button4/1/2.png',
        'paus_butt_hov_url' => WDS()->plugin_url . '/images/button/button4/1/4.png',
        'play_paus_butt_img_or_not' => 'style',
        'start_slide_num' => 1,
        'effect_duration' => 800,
        'carousel' => 0,
        'carousel_image_counts' => 7,
        'carousel_image_parameters' => '0.85',
        'carousel_fit_containerWidth' => 0,
        'carousel_width' => 1000,
        'parallax_effect' => 0,
        'mouse_swipe_nav' => 0,
        'bull_hover' => 1,
        'touch_swipe_nav' => 1,
        'mouse_wheel_nav' => 0,
        'keyboard_nav' => 0,
        'possib_add_ffamily' => '',
        'show_thumbnail' => 0,
        'thumb_size' => '0.2',
        'fixed_bg' => 0,
        'smart_crop' => 0,
        'crop_image_position' => 'center center',
        'javascript' => '',
        'carousel_degree' => 0,
        'carousel_grayscale' => 0,
        'carousel_transparency' => 0,
        'bull_back_act_color' => '000000',
        'bull_back_color' => 'CCCCCC',
        'bull_radius' => '20px',
        'possib_add_google_fonts' => 0,
        'possib_add_ffamily_google' => '',
        'slider_loop' => 1,
        'hide_on_mobile' => 0,
        'twoway_slideshow' => 0,
        'full_width_for_mobile' => 0,
        'order_dir' => 'asc',
      ));
    }
    if ( !$wpdb->get_var("SELECT * FROM " . $wpdb->prefix . "wdsslide") ) {
      $wpdb->query('INSERT INTO `' . $wpdb->prefix . 'wdsslide` VALUES(1, 1, "Slide 1", "image", "' . WDS()->plugin_url . '/demo/1.jpg", "' . WDS()->plugin_url . '/demo/1-150x150.jpg", 1, "", 1, 0, 0, 0, "fill", 0)');
      $wpdb->query('INSERT INTO `' . $wpdb->prefix . 'wdsslide` VALUES(2, 1, "Slide 2", "image", "' . WDS()->plugin_url . '/demo/2.jpg", "' . WDS()->plugin_url . '/demo/2-150x150.jpg", 1, "", 2, 0, 0, 0, "fill", 0)');
      $wpdb->query('INSERT INTO `' . $wpdb->prefix . 'wdsslide` VALUES(3, 1, "Slide 3", "image", "' . WDS()->plugin_url . '/demo/3.jpg", "' . WDS()->plugin_url . '/demo/3-150x150.jpg", 1, "", 3, 0, 0, 0, "fill", 0)');
    }
  }

  return;
}
