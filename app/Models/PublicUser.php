<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PublicUser extends Model
{                                           
    use HasFactory;

    protected $primaryKey = 'User_ID'; // Specify the primary key
    protected $table = 'public_users'; // Specify the table name

    protected $fillable = [
        'First_Name',
        'Last_Name',
        'Email',
        'View_Public_Dashboard',
        'Makes_Donation',
    ];
}
