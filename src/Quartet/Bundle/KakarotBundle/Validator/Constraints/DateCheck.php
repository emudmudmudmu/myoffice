<?php

namespace Quartet\Bundle\KakarotBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class DateCheck extends Constraint
{
    public $message = '開始日と終了日が正しくありません。';

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}

