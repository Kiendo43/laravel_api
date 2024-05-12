<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_customer',
        'name_customer',
        'phone_customer',
        'adress_customer',
        'email_customer',
        'city_customer',
    ];
}
