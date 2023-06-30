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
        Schema::table('shg_applications', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->foreign('shg_id')->references('id')->on('shg');
            $table->String('application_type', 50);
            $table->int('application_no', 20);
            $table->String('application_status', 50);
            $table->date('approval_date');
            $table->dateTime('created');
            $table->String('createdBy', 50);
            $table->dateTime('updated');
            $table->String('updatedBy', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shg_applications');
    }
};
