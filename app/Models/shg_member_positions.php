<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_member_positions extends Model
{
    use HasFactory;

    protected $table = 'shg_member_positions';

    protected $fillable = [
        'position_name',
        'description',
        'status',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];
}
