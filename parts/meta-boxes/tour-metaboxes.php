<?php
/*
Title: Tour Extra Fields
Description: Add extra fields for your tours
Post Type: tour
*/

piklist('field', array(
	'type' => 'editor'
	,'field' => 'tour_overview'
	,'label' => 'Tour Overview'
    ,'template'=>'full-width'
    ,'description' => 'Add an overview for this tour.'
    ,'help' => 'Some instructions for this field.'
	,'options' => array (
		'media_buttons' => false
		,'teeny' => false
        ,'wpautop'=>false
	)
));

piklist('field', array(
	'type' => 'editor'
	,'scope' => 'post_meta'
	,'field' => 'tour_itinerary'
	,'label' => 'Tour Itinerary'
    ,'template'=>'full-width'
    ,'description' => 'Add an itinerary for this tour.'
    ,'help' => 'Some instructions for this field.'
	,'options' => array (
		'media_buttons' => false
		,'teeny' => false
        ,'wpautop'=>false
	)
));

piklist('field', array(
    'type' => 'file'
    ,'field' => 'tour_map'
    ,'scope' => 'post_meta'
    ,'label' => __('Tour Map','piklist')
    ,'template'=>'full-width'
    ,'description' => 'Add a map specific to this tour.'
    ,'help' => 'Aprox. size: 1300x700. The width shouldnt be smaller than 1300px.'
    ,'options' => array(
      'modal_title' => __('Add Image(s)','piklist')
      ,'button' => __('Add','piklist')
    )
  ));

piklist('field', array(
    'type' => 'file'
    ,'field' => 'tour_images'
    ,'label' => __('Tour Photo Gallery','piklist')
    ,'template'=>'full-width'
    ,'description' => __('Add images for your Tour.','piklist')
    ,'help' => 'You should choose a multiple of 4 images. Best is 8 or 12.'
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist')
      ,'button' => __('Add Images','piklist')
    )
));