<?php

/**
 * @file
 * Describes API functions for tour module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Allow modules to alter tour items before render.
 *
 * @param array $tour
 *   Array representing a single tour.
 */
function hook_hopscotch_tour_alter(array &$tour, array &$tour_options) {
  if ($tour['machine_name'] == 'test-tour') {
    
    // Prevent the tour from automatically starting
    $tour['auto_start'] = 0;
    
    // Hide the close button. See http://linkedin.github.io/hopscotch/#setting-tour-options
    // for all available tour options settings
    $tour_options['showCloseButton'] = FALSE;
  }
}

/**
 * @} End of "addtogroup hooks".
 */
