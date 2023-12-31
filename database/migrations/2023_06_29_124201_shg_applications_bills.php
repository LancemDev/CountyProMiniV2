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
        if (Schema::hasTable('shg_application_bills')) {
            return;
        }
        Schema::table('shg_application_bills', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shg_application_id');
            $table->unsignedBigInteger('bills_id');
            $table->dateTime('created');
            $table->String('createdBy', 50);
            $table->dateTime('updated');
            $table->String('updatedBy', 50);

            $table->foreign('shg_application_id')->references('id')->on('shg_applications');
            // $table->foreign('bills_id')->references('id')->on('shg_bills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shg_applications_bills');
    }
};
