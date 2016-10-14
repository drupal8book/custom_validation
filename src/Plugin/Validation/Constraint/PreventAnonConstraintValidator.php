<?php

namespace Drupal\custom_validation\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the PreventAnon constraint.
 */
class PreventAnonConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($entity, Constraint $constraint) {
    if (!isset($entity)) {
      return;
    }
    if (!$entity->getOwnerId()) {
      $this->context->addViolation($constraint->message);
    }
  }
}
