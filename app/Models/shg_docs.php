<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_docs extends Model
{
    use HasFactory;

    private $fillable = [
        'shg_id',
        'doc_id',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];

    public function shg() {
        return $this->belongsTo(shg::class, 'id');
    }
}
