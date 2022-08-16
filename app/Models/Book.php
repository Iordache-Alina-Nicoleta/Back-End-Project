<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Book extends Model
{
  use HasFactory;
  protected $fillable = [
        "Book_Name",
        "ISBN_no",
        "Category_Name",
        "Author",
        "Status",
        "no_of_copy",
        "description",
        "category_id",
        "author_id",
        "location_id",
        "Created_On",
        "Updated_On",
        
      ];
  protected $dates = [
      "Created_On",
      "Updated_On",
  ];

  public function category(){
    return $this->belongsTo(Category::class);
  }
  public function author(){
    return $this->belongsTo(Author::class);
  }
  public function location(){
    return  $this->belongsTo(LocationRack::class, "location_id");
  }
  public function issueBook(){
    return $this->hasMany(IssueBook::class);
  }

  public function getRemainingAttribute() {
    $issue = IssueBook:: where("Status", "not returned")->where("Book_Name", $this->Book_Name)->get()->count();
    return $this->no_of_copy - $issue;
  }
  
}
