<?php

namespace Modules\Payment\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Catalog\States\PaymentState;
use Modules\Order\Models\Order;
use Modules\Payment\Database\Factories\PaymentFactory;
use Modules\User\Models\User;
use Spatie\ModelStates\HasStates;

#[Fillable(['transaction_id' , 'getway' , 'amount' , 'ref_number' , 'state' , 'paid_at'])]
class Payment extends Model
{
    use HasFactory , HasStates;

    protected function casts()
    {
        return [
            'state' => PaymentState::class
        ];
    }

    protected static function newFactory(): PaymentFactory
    {
        return PaymentFactory::new();
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
