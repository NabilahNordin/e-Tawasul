<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('crises', function (Blueprint $table) {
            $table->unsignedBigInteger('Reported_By')->nullable()->after('Crisis_ID');
            $table->string('Matric_No')->nullable()->after('Reported_By');
            $table->string('Sub_Type')->nullable()->after('Crisis_Type');
            $table->dateTime('Incident_DateTime')->nullable()->after('Location');
            $table->string('Hospital_Name')->nullable()->after('Incident_DateTime');
            $table->string('Medical_Letter')->nullable()->after('Hospital_Name');
            $table->json('Supporting_Documents')->nullable()->after('Medical_Letter');
            $table->boolean('Consent_Share')->default(false)->after('Supporting_Documents');
        });
    }

    public function down(): void
    {
        Schema::table('crises', function (Blueprint $table) {
            $table->dropColumn([
                'Reported_By',
                'Matric_No',
                'Sub_Type',
                'Incident_DateTime',
                'Hospital_Name',
                'Medical_Letter',
                'Supporting_Documents',
                'Consent_Share',
            ]);
        });
    }
};
