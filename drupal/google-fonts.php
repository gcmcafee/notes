<?php

 // ADD REFERENCE TO EXTERNAL STYLESHEET
 function foresight_sub_preprocess_html(&$variables) {
    drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));
 }