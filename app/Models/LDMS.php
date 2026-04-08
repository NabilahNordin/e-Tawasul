<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LDMS extends Model
{
    use SoftDeletes;

    protected $table = 'ldms';

    protected $primaryKey = 'LDMS_ID';

    protected $fillable = [
        'Confirmation_ID',
        'Student_ID',
        'Date_Triggered',
        'Triggered_By_Kin',
        'Message_Content',
        'Media_Type',
        'Media_File_Path',
        'Media_File_Name',
        'Media_File_Size',
        'Encrypted',
        'Blockchain_Reference',
    ];

    protected $casts = [
        'Date_Triggered' => 'date',
        'Encrypted' => 'boolean',
    ];
}
