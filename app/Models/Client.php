<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        "client_name",
        "email_address",
        "contact_no",
        "address",
        "created_on",
        "updated_on"
      ];
      protected $dates = [
        "created_at",
        "updated_at"
       
      ];

      public function issue(){
        return $this->hasMany(IssueBook::class);
    }
}
