<?php

namespace Drupal\custom_validation\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MissingOptionsException;

/**
 * Prevent anon nodes from being created.
 *
 * @Constraint(
 *   id = "ShirtSize",
 *   label = @Translation("Shirt size constraint", context = "Validation"),
 * )
 */
class ShirtSizeConstraint extends Constraint {

  /**
   * @var array
   */
  public $sizes;

  /**
   * Message shown when shirt size is incorrect.
   *
   * @var string
   */
  public $message = '(%shirt_size) is an invalid shirt size.';

    /**
     * ShirtSize constructor.
     * @param mixed $options
     */
    public function __construct($options = null)
    {
        if (null !== $options && !is_array($options)) {
            $options = array(
                'sizes' => $options
            );
        }
        parent::__construct($options);
        if (null === $this->sizes) {
            throw new MissingOptionsException(sprintf('The option "sizes" must be given for constraint %s', __CLASS__), ['sizes']);
        }
    }
}
