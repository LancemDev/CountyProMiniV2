<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shg extends Model
{
    use HasFactory;

    protected $table = 'shg';

    private $fillable = [
        'group_name',
        'group_number',
        'email_address',
        'physical_location',
        'sub_county_id',
        'ward_id',
        'town_id',
        'postal_address',
        'postal_code',
        'postal_town',
        'shg_category_id',
        'shg_objectives_id',
        'shg_source_of_fund_id',
        'current_activities',
        'future_activities',
        'meeting_frequency',
        'supervising_officer_name',
        'supervising_officer_title',
        'committee_election_date',
        'registration_date',
        'expiry_date',
        'status',
        'created',
        'created_by',
        'updated',
        'updated_by'
    ];

    public function shg_category() {
        return $this->belongsTo(shg_category::class, 'id');
    }

    public function shg_objectives() {
        return $this->belongsTo(shg_objectives::class, 'id');
    }

    public function shg_source_of_fund() {
        return $this->belongsTo(shg_source_of_fund::class, 'id');
    }

    public function sub_county() {
        return $this->belongsTo(sub_county::class, 'id');
    }

    public function ward(){
        return $this->belongsTo(ward::class, 'id');
    }

    public function town(){
        return $this->belongsTo(town::class, 'id');
    }
}
