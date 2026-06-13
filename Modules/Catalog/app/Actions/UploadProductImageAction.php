<?php

namespace Modules\Catalog\Actions;

use Illuminate\Support\Facades\DB;
use Modules\Catalog\DTO\ProductData;
use Modules\Catalog\Events\ProductCreated;
use Modules\Catalog\Models\Product;
use Modules\User\Models\User;

class UploadProductImageAction
{
    public function execute($file): string
    {
        return $file->store('products', 'public');
    }
}