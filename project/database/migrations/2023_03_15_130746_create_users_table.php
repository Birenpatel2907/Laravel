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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unm');
            $table->string('pass');
            $table->string('gen');
            $table->string('lang');
            $table->bigInteger('mobile');
            $table->unsignedInteger('cid');
            $table->string('file');
            $table->enum('status',['Blocked','Unblocked'])->default('Unblocked');
            $table->string('add');
            $table->timestamps();

           
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
