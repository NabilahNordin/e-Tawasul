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
        Schema::create('donations', function (Blueprint $table) {
            $table->id('Donation_ID');
            $table->unsignedBigInteger('Crisis_ID')->nullable();
            $table->foreign('Crisis_ID')->references('Crisis_ID')->on('crises'); // Foreign key to 'crises' table
            $table->foreignId('User_ID')->nullable()->constrained('users'); // Foreign key to 'users' table
            $table->string('LDMS_ID')->nullable();
            $table->decimal('Donation_Amount', 10, 2)->nullable();
            $table->date('Donation_Date')->nullable();
            $table->string('Payment_Method')->nullable();
            $table->softDeletes(); // Enable soft deletes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
