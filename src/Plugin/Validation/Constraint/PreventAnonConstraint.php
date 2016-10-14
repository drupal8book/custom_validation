<?php

namespace Drupal\custom_validation\Plugin\Validation\Constraint;

use Drupal\Core\Entity\Plugin\Validation\Constraint\CompositeConstraintBase;

/**
 * Prevent anon nodes from being created.
 *
 * @Constraint(
 *   id = "PreventAnon",
 *   label = @Translation("Prevent nodes being created by anon users", context = "Validation"),
 *   type = "entity:node"
 * )
 */
class PreventAnonConstraint extends CompositeConstraintBase {

  /**
   * Message shown when an anonymous node is being created.
   *
   * @var string
   */
  public $message = 'Cannot create a node that does not belong to any user.';

  /**
   * {@inheritdoc}
   */
  public function coversFields() {
    return ['uid'];
  }
}
