<?php
/*
Title: Tour Types Flaticon Class
Description: Add a Flaticon to your tour category.
Taxonomy: tour_type
Capability: manage_options
Locked: true
Collapse: true
*/

piklist('field', array(
    'type' => 'select'
    ,'field' => 'tour_types_flaticon_class'
    ,'label' => 'Flaticon'
    ,'description' => 'Choose from the drop-down.'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
    ,'choices' => array(
        'lotus'         => 'Cultural Tours'
        ,'motorbike'    => 'Motorbike Tours'
        ,'walk'         => 'Trekking'
        ,'camera'       =>  'Photo Tours'
        ,'group'        =>  'Group Tours'
    )
  ));