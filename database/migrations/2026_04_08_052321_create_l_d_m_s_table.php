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
        Schema::create('ldms', function (Blueprint $table) {
            $table->id('LDMS_ID');
            $table->unsignedBigInteger('Confirmation_ID')->nullable();
            $table->unsignedBigInteger('Student_ID')->nullable();
            $table->date('Date_Triggered')->nullable();
            $table->string('Triggered_By_Kin')->nullable();
            $table->string('Message_Content')->nullable();
            $table->string('Media_Type')->nullable();
            $table->string('Media_File_Path')->nullable();
            $table->string('Media_File_Name')->nullable();
            $table->string('Media_File_Size')->nullable();
            $table->boolean('Encrypted')->nullable();
            $table->string('Blockchain_Reference')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldms');
    }
};
