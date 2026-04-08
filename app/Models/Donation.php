<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Donation extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'Donation_ID'; // Specify the primary key
    protected $table = 'donations'; // Specify the table name

    protected $fillable = [
        'Crisis_ID',
        'User_ID',
        'LDMS_ID',
        'Donation_Amount',
        'Donation_Date',
        'Payment_Method',
    ];

    protected $dates = ['Donation_Date', 'deleted_at']; // Automatically cast these columns to Carbon instances

}
