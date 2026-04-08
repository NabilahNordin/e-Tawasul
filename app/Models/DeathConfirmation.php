<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeathConfirmation extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'Confirmation_ID';

    protected $fillable = [
        'Kin_ID',
        'Student_ID',
        'Date_Confirmed',
        'Verified_By_Kin',
        'Admin_Comments',
    ];

    protected $casts = [
        'Date_Confirmed' => 'date',
    ];
}
