<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;

    protected $table = 'test';

    protected $fillable = [
        'name',
        'email',
        'password',
        'created_at',
        'updated_at'
    ];
}
