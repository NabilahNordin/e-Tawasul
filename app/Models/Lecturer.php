<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'Lecturer_ID';

    protected $fillable = [
        'First_Name',
        'Last_Name',
        'Email',
        'Department',
    ];
}
