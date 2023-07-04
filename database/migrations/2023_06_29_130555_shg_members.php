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
        if (Schema::hasTable('shg_members')) {
            return;
        }
        Schema::table('shg_members', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('shg_id');
            $table->unsignedBigInteger('shg_member_position_id');
            $table->tinyInteger('is_bank_signatory', 1);
            $table->date('date_from');
            $table->date('date_to');
            $table->dateTime('created');
            $table->String('createdBy', 50);
            $table->dateTime('updated');
            $table->String('updatedBy', 50);

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('shg_id')->references('id')->on('shg');
            $table->foreign('shg_member_position_id')->references('id')->on('shg_member_positions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
