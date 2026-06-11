<?php

namespace Modules\Cart\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cart\Database\Factories\CartItemFactory;
use Modules\Catalog\Models\Product;

#[Fillable(['unit_price' , 'quantity'])]
class CartItem extends Model
{
    use HasFactory;

    protected static function newFactory(): CartItemFactory
    {
        return CartItemFactory::new();
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
