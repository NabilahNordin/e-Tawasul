<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kin extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'Kin_ID'; // Specify the primary key column

    protected $fillable = [
        'First_Name', 'Last_Name', 'Relationship_to_student', 'Email', 'Access_Level'
    ];

    // Relationship: One Kin (Guardian) can have many Guardian Consents
    public function guardianConsents(): HasMany
    {
        return $this->hasMany(GuardianConsent::class, 'Guardian_ID');
    }

    // Relationship: One Kin can report many Crisis reports
    public function crisisReports(): HasMany
    {
        return $this->hasMany(Crisis::class, 'Reported_By', 'Kin_ID');
    }
}
