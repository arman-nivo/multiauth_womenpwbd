<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lawservices extends Model
{
    use HasFactory;

    protected $fillable = [
        'l_name',
        'law_img',
        'service_provider',
        'service_price',
        'service_provider_review',
        'service_provider_details',
        'service_procedure',
    ];
}
