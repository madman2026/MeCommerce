<?php

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Catalog\Database\Factories\ProductFactory;
use Modules\Catalog\States\ProductState;
use Modules\Order\Models\OrderItem;
use Spatie\ModelStates\HasStates;

#[Fillable([
    'name' ,
    'price' ,
    'sale_price' ,
    'short_description' ,
    'description' ,
    'stock' ,
    'weight' ,
    'states' ,
    'slug' ,
    'published',
    'sku',
])]
class Product extends Model
{
    use HasFactory , HasStates;

    protected function casts()
    {
        return [
            'state' => ProductState::class
        ];
    }

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
}
