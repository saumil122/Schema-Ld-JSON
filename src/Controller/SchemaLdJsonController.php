<?php
namespace Drupal\schema_ldjson\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class SchemaLdJsonController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function settingsPage() {
    $form = \Drupal::formBuilder()->getForm('Drupal\schema_ldjson\Form\SchemaSettingsForm');
    $data['form'] = $form;
    return $data;
  }

}