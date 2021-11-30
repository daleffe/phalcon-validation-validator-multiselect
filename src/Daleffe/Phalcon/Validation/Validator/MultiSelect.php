<?php

namespace Daleffe\Phalcon\Validation\Validator;

use Phalcon\Messages\Message;
use Phalcon\Validation;
use Phalcon\Validation\AbstractValidator;

class MultiSelect extends AbstractValidator
{
  /**
   * Executes the validation
   *
   * @param Validation $validation
   * @param mixed      $field
   *
   * @return boolean
   */
  public function validate(Validation $validation, $field): bool
  {
    $value = $validation->getValue(strpos($field,'[]') ? str_replace('[]','',$field) : $field);

    if (empty($value)) {
      $message = $this->hasOption('message') === false ? "Select at least one item" : $this->getOption('message');

      $validation->appendMessage(new Message($message, $field, 'MultiSelect'));

      return false;
    }

    return true;
  }
}
?>
