<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_applications extends Model
{
    use HasFactory;

    protected $table = 'shg_applications';

    protected $fillable = [
        'shg_id',
        'apllication_type',
        'application_no',
        'application_status',
        'approval_date',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];

    public function shg()
    {
        return $this->belongsTo(shg::class, 'id');
    }
}
