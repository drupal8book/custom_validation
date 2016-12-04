<?php

namespace Drupal\custom_validation\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the ShirtSize constraint.
 */
class ShirtSizeConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($field, Constraint $constraint) {
    $value = $field->value;
    if (!isset($value)) {
      return NULL;
    }
    if (!in_array($value, $constraint->sizes)) {
        $this->context->addViolation($constraint->message, array('%shirt_size' => $value));
    }
  }
}
