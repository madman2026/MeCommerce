<?php

namespace Modules\Order\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Catalog\States\OrderState;
use Modules\Order\Database\Factories\OrderFactory;
use Modules\Payment\Models\Payment;
use Modules\User\Models\Address;
use Modules\User\Models\User;

#[Fillable(['state' , 'order_number' , 'discount_total' , 'shipping_cost' , 'subtotal' , 'notes' , 'total' , 'placed_at' , ''])]
class Order extends Model
{
    use HasFactory;
    
    protected static function newFactory(): OrderFactory
    {
        return OrderFactory::new();
    }

    protected function casts()
    {
        return [
            'state' => OrderState::class
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
}
