<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'Admin_ID';

    protected $fillable = [
        'Admin_Name',
        'Email',
        'Role',
        'Permissions',
    ];
}
