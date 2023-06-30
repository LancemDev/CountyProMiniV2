<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg_members extends Model
{
    use HasFactory;

    protected $table = 'shg_members';

    protected $fillable = [
        'client_id',
        'shg_id',
        'shg_member_position_id',
        'is_bank_signatory',
        'date_from',
        'date_to',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];

    public function client()
    {
        return $this->belongsTo(clients::class, 'id');
    }

    public function shg(){
        return $this->belongsTo(shg::class, 'id');
    }

    public function shg_member_position(){
        return $this->belongsTo(shg_member_positions::class, 'id');
    }
}
