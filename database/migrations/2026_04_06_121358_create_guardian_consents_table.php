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
        Schema::create('guardian_consents', function (Blueprint $table) {
            $table->id('Consent_ID'); // Primary key
            $table->unsignedBigInteger('Student_ID');
            $table->foreign('Student_ID')->references('Student_id')->on('students')->onDelete('cascade'); // FK to the students table
            $table->unsignedBigInteger('Guardian_ID');
            $table->foreign('Guardian_ID')->references('Kin_ID')->on('kin')->onDelete('cascade'); // FK to the kin table (next of kin)
            $table->boolean('Access_Granted')->default(false); // Whether access is granted
            $table->date('Consent_Date'); // The date the consent was given
            $table->date('Expiry_Date'); // The date the consent expires
            $table->timestamps();
            $table->softDeletes(); // Soft delete column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardian_consents');
    }
};
