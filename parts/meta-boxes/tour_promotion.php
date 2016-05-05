<?php
/*
Title: Popular Tours
Description: Popular tours will be promoted to the Homepage under "Most Popular Tours"
Post Type: tour
Context: side
*/

piklist('field', array(
'type' => 'checkbox'
,'field' => 'popular_tour'
,'value' => '' // Sets default to Option 2
,'label' => 'Is this a popular tour?'
,'description' => 'Check this button if you want this tour to be promoted to the Homepage'
,'attributes' => array(
  'class' => 'text'
)
,'choices' => array(
  'yes' => 'Popular Tour'
)
));
