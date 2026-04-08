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
        Schema::create('death_confirmations', function (Blueprint $table) {
            $table->id('Confirmation_ID');
            $table->unsignedBigInteger('Kin_ID')->nullable();
            $table->unsignedBigInteger('Student_ID')->nullable();
            $table->date('Date_Confirmed')->nullable();
            $table->string('Verified_By_Kin')->nullable();
            $table->string('Admin_Comments')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('death_confirmations');
    }
};
