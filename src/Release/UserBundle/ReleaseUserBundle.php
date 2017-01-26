<?php

namespace Release\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ReleaseUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
