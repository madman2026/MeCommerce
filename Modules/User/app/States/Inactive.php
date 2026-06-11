<?php

namespace Modules\User\States;

class Inactive extends UserState
{
    public function color()
    {
        return 'red';
    }
}