<?php

namespace Quartet\Bundle\KakarotBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class QuartetKakarotBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
