<?php

namespace Modules\Order;

use Modules\Order\States\Cancelled;
use Modules\Order\States\Delivered;
use Modules\Order\States\Paid;
use Modules\Order\States\PendingPayment;
use Modules\Order\States\Processing;
use Modules\Order\States\Shipped;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

class OrderState extends State
{
    public static function config(): StateConfig
    {
        return parent::config()
            ->registerState(Cancelled::class)
            ->registerState(Delivered::class)
            ->registerState(Paid::class)
            ->registerState(PendingPayment::class)
            ->registerState(Processing::class)
            ->registerState(Shipped::class)
            ->default(Processing::class)
            ->allowAllTransitions();
    }
}