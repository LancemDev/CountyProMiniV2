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
        Schema::create('shg_objectives', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->String('objective', 100);
            $table->text('description');
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
        Schema::dropIfExists('shg_objectives');
    }
};
