<?php

namespace Modules\User\States;

use Modules\User\UserState;

class Active extends UserState
{
    public function color()
    {
        return 'green';
    }
}