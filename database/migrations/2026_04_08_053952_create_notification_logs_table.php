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
        Schema::create('notification_logs', function (Blueprint $table) {
            $table->id('Notification_ID');
            $table->unsignedBigInteger('Kin_ID')->nullable();
            $table->unsignedBigInteger('Lecturer_ID')->nullable();
            $table->unsignedBigInteger('Crisis_ID')->nullable();
            $table->unsignedBigInteger('LDMS_ID')->nullable();
            $table->string('Notification_Type')->nullable();
            $table->string('Notification_Message')->nullable();
            $table->string('Timestamp')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_logs');
    }
};
