<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GuardianConsent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Student_ID', 'Guardian_ID', 'Access_Granted', 'Consent_Date', 'Expiry_Date'
    ];

    // Relationship: A Guardian Consent belongs to one Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'Student_ID');
    }

    // Relationship: A Guardian Consent belongs to one Kin (Guardian)
    public function guardian()
    {
        return $this->belongsTo(Kin::class, 'Guardian_ID');
    }
}

