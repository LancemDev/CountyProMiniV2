<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_docs extends Model
{
    use HasFactory;

    protected $table = 'shg_docs';

    protected $fillable = [
        'shg_id',
        'doc_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];

    public function shg() {
        return $this->belongsTo(shg::class, 'id');
    }
}
