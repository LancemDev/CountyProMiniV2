<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_application_bills extends Model
{
    use HasFactory;

    protected $fillable = [
        'shg_application_id',
        'bills_id',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];
    

    public function shg_application()
    {
        return $this->belongsTo(shg_applications::class, 'id');
    }

    // public function bills()
    // {
    //     return $this->belongsTo(shg_bills::class, 'id');
    // }
}
