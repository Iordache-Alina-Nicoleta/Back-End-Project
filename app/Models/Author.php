<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{   use HasFactory;
    protected $fillable = [
        "Author_Name",
        "Status",
        "description",
        "Created_On",
        "Updated_On",
        
      ];
      protected $dates = [
        "Created_On",
        "Updated_On",
        
      ];

      public function book(){
        return $this->hasMany(Book::class);
    }
   
    public function issue(){
      return $this->hasMany(IssueBook::class, "Author_Name");
  }
}
