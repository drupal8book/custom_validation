<?php

namespace Drupal\custom_validation\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use ZipCodeValidator\Constraints\ZipCodeValidator;
/**
 * Validates zip codes.
 */
class ZipCodeConstraintValidator extends ZipCodeValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($field, Constraint $constraint) {
    $value = $field->value;
    parent::validate($value, $constraint);
  }
}
