<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_upload',
        'user_name',
        "password",
        "email_address",
        "user_address",
        "contact no",
    ];

    protected $dates = [
        'created_on',
        'updated_on'
    ];

   
}
