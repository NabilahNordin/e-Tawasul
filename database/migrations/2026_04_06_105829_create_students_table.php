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
        Schema::create('students', function (Blueprint $table) {

            $table->id('Student_id'); // Primary Key
            $table->string('Last_Name')->nullable();
            $table->string('Email')->nullable();
            $table->string('Status')->nullable();
            $table->date('Date_Report')->nullable();
            $table->string('Emergency_Contact')->nullable();
            $table->unsignedBigInteger('Guardian_ID')->nullable();
            $table->foreign('Guardian_ID')->references('Kin_ID')->on('kin')->onDelete('set null');
            $table->softDeletes(); // Soft delete column
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
