<?php

namespace Modules\Catalog\DTO;

use Spatie\LaravelData\Data;

class CategoryData extends Data
{
    public function __construct(
        public string $name,
        public string $slug,
        public ?string $description,
        public ?int $parentId,
    ) {}
}