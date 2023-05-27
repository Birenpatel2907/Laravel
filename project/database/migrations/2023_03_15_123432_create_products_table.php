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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('p_name');
            $table->unsignedBigInteger('brand_id');            
            $table->unsignedBigInteger('st_id');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('clr_id');
            $table->integer('price');
            $table->integer('qty');
            $table->integer('discount');
            $table->integer('disc_amt');
            $table->string('img');
            $table->string('des');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('st_id')->references('id')->on('sub_types')->onDelete('cascade');
            $table->foreign('clr_id')->references('id')->on('colors')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
