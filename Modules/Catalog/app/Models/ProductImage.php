<?php

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Catalog\Database\Factories\ProductImageFactory;

#[Fillable(['path' , 'sort_order' , 'is_primary'])]
class ProductImage extends Model
{
    use HasFactory;

    protected static function newFactory(): ProductImageFactory
    {
        return ProductImageFactory::new();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
