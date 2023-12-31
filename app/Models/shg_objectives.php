<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_objectives extends Model
{
    use HasFactory;

    protected $table = 'shg_objectives';

    protected $fillable = [
        'objective_name',
        'description',
        'status',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];
}
