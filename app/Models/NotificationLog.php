<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotificationLog extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'Notification_ID';

    protected $fillable = [
        'Kin_ID',
        'Lecturer_ID',
        'Crisis_ID',
        'LDMS_ID',
        'Notification_Type',
        'Notification_Message',
        'Timestamp',
    ];
}
