<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsAlphanumericValidator extends ConstraintValidator{
    public function validate($value, Constraint $constraint){
        if(!$constraint instanceof ContainsAlphanumeric){
            throw new UnexpectedTypeException($constraint, ContainsAlphanumeric::class);
        }

        if(null === $value || '' === $value){
            return;
        }

        if(!is_string($value)){
            throw new UnexpectedTypeException($value, 'string');
        }

        if(!preg_match('/^[a-zA-Z0-9]+$/', $value, $matches)){
            $this->context->buildViolation($constraint->message)->setParameter('{{string}}', $value)->addViolation();
        }
    }
}