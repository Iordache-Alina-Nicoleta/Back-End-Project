<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationRack extends Model
{
    protected $fillable = [
        "Location_Rack",
        "Status",
        "Created_On",
        "Updated_On",
        
      ];
      protected $dates = [
        "Created_On",
        "Updated_On",
        
      ];

      public function book(){
        return $this->hasMany(Book::class, "location_id");
      }

      public function issue(){
        return $this ->hasMany(IssueBook::class, "location_id");
      }
}
