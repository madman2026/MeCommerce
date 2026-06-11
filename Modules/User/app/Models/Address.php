<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Database\Factories\AddressFactory;

#[Fillable(['title' , 'address' , 'receiver_name' , 'receiver_mobile' , 'province' , 'city' , 'is_default' , 'postal_code'])]
class Address extends Model
{
    use HasFactory;

    protected static function newFactory(): AddressFactory
    {
        return AddressFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
