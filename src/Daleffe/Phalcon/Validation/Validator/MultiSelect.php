<?php

namespace Daleffe\Phalcon\Validation\Validator;

use Phalcon\Validation\Validator;
use Phalcon\Validation\Message;
use Phalcon\Validation\Exception as ValidationException;
use Phalcon\Validation;

class MultiSelect extends Validator
{
    /**
     * Class constructor.
     *
     * @param  array $options
     * @throws ValidationException
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
    }

    /**
     * Executes the multiple select validation
     *
     * @param \Phalcon\Validation $validator
     * @param string $attribute
     * @return boolean
     */
    public function validate(Validation $validator, $attribute)
    {
    }
}
?>
