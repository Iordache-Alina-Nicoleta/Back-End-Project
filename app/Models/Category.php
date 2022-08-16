<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        "Category_Name",
        "Status",
        "description",
        "Created_On",
        "Updated_On",
        
      ];
      protected $dates = [
        "Created_On",
        "Updated_On",
        "deleted_at"
      ];
      

      public function book(){
        return $this->hasMany(Book::class);
    }

}