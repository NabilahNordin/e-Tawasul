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
            $table->foreignId('Guardian_ID')->nullable()->constrained('guardians')->onDelete('set null'); // Example of foreign key to `guardians` table
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
