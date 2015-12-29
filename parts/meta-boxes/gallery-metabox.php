<?php
/*
Title: Gallery Images
Description: Add images to your gallery
Post Type: gallery
*/

piklist('field', array(
    'type' => 'file'
    ,'field' => 'gallery_images'
    ,'label' => __('Add File(s)','piklist')
    ,'description' => __('Add images for your Footer Gallery.','piklist')
    ,'help' => 'You should choose a multiple of 4 images. Best is 8 or 12.'
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist')
      ,'button' => __('Add','piklist')
    )
  ));