<?php

namespace Modules\User\States;

use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

class UserState extends State
{
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Pending::class)
            ->allowAllTransitions();
    }
}