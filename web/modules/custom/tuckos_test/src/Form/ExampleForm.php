<?php

namespace Drupal\tuckos_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends FormBase {
/**
* {@inheritdoc}
*/
public function getFormId()
{
return 'example_form';
}
/**
* {@inheritdoc}
*/
public function buildForm(array $form, FormStateInterface $form_state)
{
$form['user_name'] = array (
  '#type' => 'textfield',
  '#title' => t('User Name and Surname:'),
  '#required' => TRUE,
);
$form['user_mail'] = array (
  '#type' => 'textfield',
  '#title' => t('User Mail:'),
  '#required' => TRUE,
);
$form['user_password'] = array (
  '#type' => 'password',
  '#title' => t('User Password:'),
  '#required' => TRUE,
);
$form['submit'] = array (
  '#type' => 'submit',
  '#value' => t('Save'),
);
return $form;
}
/**
* {@inheritdoc}
*/
public function validateForm(array &$form, FormStateInterface $form_state)
  {
  }
/**
* {@inheritdoc}
*/
public function submitForm(array &$form, FormStateInterface $form_state)
  {
  }
}