<?php

namespace Modules\User;

use Modules\User\States\Active;
use Modules\User\States\Inactive;
use Modules\User\States\Pending;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

class UserState extends State
{
    public static function config(): StateConfig
    {
        return parent::config()
            ->registerState(Active::class)
            ->registerState(Inactive::class)
            ->registerState(Pending::class)
            ->default(Active::class);
    }
}