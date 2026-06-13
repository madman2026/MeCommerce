<?php

namespace Modules\User\States;

use Modules\User\UserState;

class Inactive extends UserState
{
    public function color()
    {
        return 'red';
    }
}