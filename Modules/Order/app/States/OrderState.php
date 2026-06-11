<?php

namespace Modules\Catalog\States;

use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

class OrderState extends State
{
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Draft::class)
            ->allowAllTransitions();
    }
}