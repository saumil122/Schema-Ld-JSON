<?php

namespace Drupal\schema_ldjson\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure settings for Schema Ld+JSON.
 */
class SchemaSettingsForm extends ConfigFormBase {
  /** @var string Config settings */
  const SETTINGS = 'schema_ldjson.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'schema_ldjson_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);

    /* Sitelinks Schema */
    $form['sitelinks_schema'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Sitelinks Schema:'),
      '#required' => true,
      '#default_value' => $config->get('sitelinks_schema'),
      '#description' => $this->t('Please enter schema code e.g. &lt;script&gt;...&lt;/script&gt;.'),
    ];

    /* Product Schema */
    $form['product_schema'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Product Schema:'),
        '#required' => true,
        '#default_value' => $config->get('product_schema'),
        '#description' => $this->t('Please enter schema code e.g. &lt;script&gt;...&lt;/script&gt;.'),
    ];

    /* Local Business Schema */
    $form['local_business_schema'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Local Business Schema:'),
        '#required' => true,
        '#default_value' => $config->get('local_business_schema'),
        '#description' => $this->t('Please enter schema code e.g. &lt;script&gt;...&lt;/script&gt;.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    /*if (!Json::decode($form_state->getValue('json'))) {
      $form_state->setErrorByName('json', \Drupal::translation()->translate('JSON field value should be a valid JSON.'));
    }*/
  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
      // Retrieve the configuration
       $this->configFactory->getEditable(static::SETTINGS)

      // Set the submitted configuration setting
      ->set('sitelinks_schema', $form_state->getValue('sitelinks_schema'))
      ->set('product_schema', $form_state->getValue('product_schema'))
      ->set('local_business_schema', $form_state->getValue('local_business_schema'))
      ->save();

      parent::submitForm($form, $form_state);
  }
}
