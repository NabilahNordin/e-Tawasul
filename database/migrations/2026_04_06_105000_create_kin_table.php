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
        Schema::create('kin', function (Blueprint $table) {
            $table->id('Kin_ID'); // Primary key
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Relationship_to_student');
            $table->string('Email')->nullable();
            $table->string('Access_Level')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kin');
    }
};
