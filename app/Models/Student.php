<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    // Specify the table name if it's not the default (optional)
    protected $table = 'students';

    // Specify the primary key column
    protected $primaryKey = 'Student_id';

    // Specify the fillable columns
    protected $guarded = [];
    // protected $fillable = [
    //     'First_Name', 'Last_Name', 'Email', 'Status', 'Date_Report', 'Emergency_Contact', 'Guardian_ID'
    // ];

    // Specify the dates that should be mutated to Carbon instances
    protected $dates = ['deleted_at']; // Soft delete column
}
