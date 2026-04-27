<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crisis extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'Crisis_ID';

    protected $fillable = [
        'Reported_By',
        'Matric_No',
        'Crisis_Type',
        'Sub_Type',
        'Crisis_Description',
        'Crisis_Severity',
        'Impact_level',
        'Location',
        'Date_Reported',
        'Incident_DateTime',
        'Hospital_Name',
        'Medical_Letter',
        'Supporting_Documents',
        'Consent_Share',
        'Status',
    ];

    protected $casts = [
        'Supporting_Documents' => 'array',
        'Consent_Share' => 'boolean',
        'Date_Reported' => 'datetime',
    ];

    // Relationship: Crisis belongs to a Kin (who reported it)
    public function reportedByKin(): BelongsTo
    {
        return $this->belongsTo(Kin::class, 'Reported_By', 'Kin_ID');
    }
}
