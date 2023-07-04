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
        if (Schema::hasTable('shg_docs')) {
            return;
        }
        Schema::table('shg_docs', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shg_id', 11);
            $table->unsignedBigInteger('doc_id', 11);
            $table->dateTime('created');
            $table->String('createdBy', 50);
            $table->dateTime('updated');
            $table->String('updatedBy', 50);

            $table->foreign('shg_id')->references('id')->on('shg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shg_docs');
    }
};
