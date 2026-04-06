<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kin extends Model
{
    use HasFactory;

    protected $primaryKey = 'Kin_ID'; // Specify the primary key column

    protected $fillable = [
        'First_Name', 'Last_Name', 'Relationship_to_student', 'Email', 'Access_Level'
    ];

    // Relationship: One Kin (Guardian) can have many Guardian Consents
    public function guardianConsents()
    {
        return $this->hasMany(GuardianConsent::class, 'Guardian_ID');
    }
}
