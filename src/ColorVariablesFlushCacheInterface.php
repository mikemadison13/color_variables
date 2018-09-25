<?php

namespace Drupal\color_variables;

/**
 * Interface ColorVariablesFlushCacheInterface.
 */
interface ColorVariablesFlushCacheInterface {

  /**
   * This method flushes site caches to ensure most current variables are up to date.
   */
  public function updateScss();

}
