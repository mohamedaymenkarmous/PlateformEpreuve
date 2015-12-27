<?php

namespace Securinets\UsersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SecurinetsUsersBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
