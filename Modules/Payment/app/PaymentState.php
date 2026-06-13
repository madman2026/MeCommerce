<?php

namespace Modules\Payment;

use Modules\Payment\States\Draft;
use Modules\Payment\States\Failed;
use Modules\Payment\States\Paid;
use Modules\Payment\States\Refound;
use Modules\User\States\Pending;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

class PaymentState extends State
{
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Pending::class)
            ->registerState(Failed::class)
            ->registerState(Paid::class)
            ->registerState(Refound::class)
            ->registerState(Pending::class)
            ->allowAllTransitions();
    }
}