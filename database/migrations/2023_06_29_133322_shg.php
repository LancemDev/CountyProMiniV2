<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('shg', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->String('group_name', 255);
            $table->String('group_number', 50);
            $table->String('email_address', 50);
            $table->String('physical_location', 255);
            $table->unsignedBigInteger('sub_county_id');
            $table->unsignedBigInteger('ward_id');
            $table->unsignedBigInteger('town_id');
            $table->String('postal_address', 50);
            $table->int('postal_code', 50);
            $table->String('postal_town', 50);
            $table->unsignedBigInteger('shg_category_id', 11);
            $table->unsignedBigInteger('shg_objectives_id', 11);
            $table->unsignedBigInteger('shg_source_of_fund_id', 11);
            $table->String('current_activities', 100);
            $table->String('future_activities', 100);
            $table->String('meeting_frequency', 100);
            $table->String('supervising_officer_name', 50);
            $table->String('supervising_officer_title', 50);
            $table->date('committee_election_date');
            $table->date('registration_date');
            $table->date('expiry_date');
            $table->String('status', 50);
            $table->date('created');
            $table->String('created_by', 50);
            $table->date('updated');
            $table->String('updated_by', 50);

            $table->foreign('sub_county_id')->references('id')->on('sub_county');
            $table->foreign('ward_id')->references('id')->on('ward');
            $table->foreign('town_id')->references('id')->on('town');
            $table->foreign('shg_category_id')->references('id')->on('shg_category');
            $table->foreign('shg_objectives_id')->references('id')->on('shg_objectives');
            $table->foreign('shg_source_of_fund_id')->references('id')->on('shg_source_of_fund');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shg');
    }
};
