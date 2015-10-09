<?php

function hopscotch_preprocess_hopscotch_start_link(&$vars) {
  if(empty($vars['options'])) $vars['options'] = array();

  if(!isset($vars['options']['attributes']['class'])) $vars['options']['attributes']['class'] = array();
  $vars['options']['attributes']['class'][] = 'hopscotch-start-link';
  $vars['options']['attributes']['id'][] = 'hoplink-' . $vars['tour_name'];

  $vars['options']['external'] = TRUE;

  if(empty($vars['link_title'])) $vars['link_title'] = t('Start the tour!');
  
  backdrop_add_js(backdrop_get_path('module', 'hopscotch') . '/inc/js/hopscotch_start_link.js');
}