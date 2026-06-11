<?php

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Catalog\Database\Factories\CategoryFactory;

#[Fillable(['is_active' , 'description' , 'name' , 'slug' , 'sort_order'])]
class Category extends Model
{
    use HasFactory;

    protected static function newFactory(): CategoryFactory
    {
        return CategoryFactory::new();
    }

    public function parent()
    {
        return $this->belongsTo(self::class , 'parent_id');
    }

    public function chlids()
    {
        return $this->hasMany(self::class , 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
