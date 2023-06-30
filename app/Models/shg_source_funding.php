<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_source_funding extends Model
{
    use HasFactory;

    protected $fillable = [
        'source_of_funding',
        'description',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];
}
