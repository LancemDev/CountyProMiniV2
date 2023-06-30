<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'description',
        'status',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];
}
