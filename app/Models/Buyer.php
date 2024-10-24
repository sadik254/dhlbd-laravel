<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $table = 'buyers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'building',
        'street',
        'suburb',
        'city',
        'state',
        'postcode',
        'country',
        'instructions',
    ];

    
}
