<?php
namespace Drupal\schema_ldjson\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a resource to get view modes by entity and bundle.
 *
 * @RestResource(
 *   id = "schema_resource",
 *   label = @Translation("Schema Rest Resource"),
 *   uri_paths = {
 *     "canonical" = "/schema_ldjson/schema_resource"
 *   }
 * )
 */
class SchemaResource extends ResourceBase {

  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    try {
      $config = \Drupal::config('schema_ldjson.settings');

      $response = [
        'content' => [
          'sitelinks_schema' => $config->get('sitelinks_schema'),
          'product_schema' => $config->get('product_schema'),
          'local_business_schema' => $config->get('local_business_schema')
        ],
        'success' => TRUE,
        'code' => 200
      ];
    
      return new ResourceResponse($response);

    } catch (\Exception $e) {
      watchdog_exception('advisor_form', $e);
      // return [$error, 404];
      return [$e->getMessage(), $e->getCode()];
    }
  }
}