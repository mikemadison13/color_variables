<?php

namespace Drupal\color_variables;

use Drupal\Core\Cache\CacheBackendInterface;

/**
 * Class ColorVariablesFlushCache.
 */
class ColorVariablesFlushCache implements ColorVariablesFlushCacheInterface {


  /**
   * The factory for configuration objects.
   *
   * @var \Drupal\Core\Cache\CacheBackendInterface
   */
  protected $cache;

  /**
   * Constructs a new ColorVariablesFlushCache object.
   *
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   The cache backend interface.
   */
  public function __construct(CacheBackendInterface $cache_backend) {
    $this->cache = $cache_backend;
  }

  /**
   * {@inheritdoc}
   */
  public function updateScss() {
    $this->cache->invalidateAll();
  }

}
