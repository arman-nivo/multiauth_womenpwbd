<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_start',
        'course_end',
        'service_provider',
        'service_price',
        'service_review',
        'service_details',
        'service_discount',
    ];


}
