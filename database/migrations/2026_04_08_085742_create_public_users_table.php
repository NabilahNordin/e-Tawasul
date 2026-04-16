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
         Schema::dropIfExists('public_users');
        Schema::create('public_users', function (Blueprint $table) {
            $table->id('User_ID');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Email')->unique();
            $table->boolean('View_Public_Dashboard')->default(false);
            $table->boolean('Makes_Donation')->default(false);
             $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_users');
    }
};
