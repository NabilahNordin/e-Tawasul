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
        Schema::create('uia_staff', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            // We use string for email because some might be missing or formatted weirdly
            // Unique is optional, but helps prevent duplicates during multiple scrapes
            $table->string('email')->nullable()->index(); 
            $table->string('department')->nullable(); // Stores the KCDIOM name
            $table->string('kcdiom_id')->nullable(); // Stores the ID (e.g., 237)
            $table->string('kcdiom_name')->nullable();

           $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uia_staff');
    }
};
