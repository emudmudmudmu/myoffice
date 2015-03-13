<?php

namespace Quartet\Bundle\KakarotBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class DateCheckValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value->getStartDate() > $value->getEndDate()) {
            $this->context->addViolationAt('endDate', $constraint->message, array());
        }
    }
}

