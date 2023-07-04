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
        if(Schema::hasTable('shg_category')){
            return;
        }
        Schema::create('shg_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('category_name', 100);
            $table->text('description');
            $table->String('created_by', 50)->default('admin');
            $table->String('updated_by', 50)->default('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shg_category');
    }
};
