<?php
/*
Title: Tour Types Featured Image
Description: Add a featured image to your tour Category. How cool is that?
Taxonomy: tour_type
Capability: manage_options
Locked: true
Collapse: true
*/
 
piklist('field', array(
    'type' => 'file'
    ,'field' => 'tour_types_featured_image'
    ,'label' => 'Add File'
    ,'description' => 'Upload only one file.'
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist')
      ,'button' => __('Add','piklist')
    )
  ));