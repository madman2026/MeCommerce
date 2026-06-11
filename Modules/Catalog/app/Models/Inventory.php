<?php

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Catalog\Database\Factories\InventoryFactory;

#[Fillable(['quantity' , 'reserved_quantity'])]
class Inventory extends Model
{
    use HasFactory;

    protected static function newFactory(): InventoryFactory
    {
        return InventoryFactory::new();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
