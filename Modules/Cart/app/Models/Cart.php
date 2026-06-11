<?php

namespace Modules\Cart\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cart\Database\Factories\CartFactory;
use Modules\User\Models\User;

#[Fillable(['session_id' , 'expires_at'])]
class Cart extends Model
{
    use HasFactory;
    
    protected static function newFactory(): CartFactory
    {
        return CartFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
}
