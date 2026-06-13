<?php

namespace Modules\User\States;

use Modules\User\UserState;

class Pending extends UserState
{
    public function color()
    {
        return 'yellow';
    }
}