<?php

namespace Modules\Catalog;

use Modules\Catalog\States\Draft;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

class ProductState extends State
{
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Draft::class)
            ->registerStatesFromDirectory(__DIR__ . '\States')
            ->allowAllTransitions();
    }
}