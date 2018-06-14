<?php

namespace PortfolioBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PortfolioBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
