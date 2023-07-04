<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShgCategory extends Model
{
    use HasFactory;

    protected $table = 'shg_category';

    protected $fillable = [
        'category_name',
        'description',
        'created_by',
        'updated_by'
    ];
}
