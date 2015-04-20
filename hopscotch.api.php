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
function hook_hopscotch_tour_alter(array &$tour) {
  if ($tour['machine_name'] == 'test-tour') {
    $tour['auto_start'] = 0;
  }
}

/**
 * @} End of "addtogroup hooks".
 */
