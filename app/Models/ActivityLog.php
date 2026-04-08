<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'Log_ID';

    protected $fillable = [
        'User_ID',
        'Action',
        'Timestamp',
        'IP_Address',
        'Action_Description',
    ];

    protected $casts = [
        'Timestamp' => 'date',
    ];
}
