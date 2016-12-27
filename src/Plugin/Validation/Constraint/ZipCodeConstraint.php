<?php

namespace Drupal\custom_validation\Plugin\Validation\Constraint;

use ZipCodeValidator\Constraints\ZipCode;

/**
 * Zipcode constraint.
 *
 * An example of using an external validation component for zip codes.
 *
 * @Constraint(
 *   id = "ZipCode",
 *   label = @Translation("Zipcode constraint", context = "Validation")
 * )
 */
class ZipCodeConstraint extends ZipCode {

  public $message = 'This zip code is not valid.';
}
