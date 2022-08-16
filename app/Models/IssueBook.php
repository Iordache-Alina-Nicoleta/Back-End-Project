<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueBook extends Model
{
    protected $fillable = [
        "Book_Name",
        "Author_Name",
        "client_name",
        "client_id",
        "Borrowed_Date",
        "Due_Date",
        "Status",
        "location_id"
      ];
      protected $dates = [
        "Borrowed_Date",
        "Due_Date",
      ];

      public function book(){
        return $this->belongsTo(Book::class);
    }
    public function author(){
      return $this ->belongsTo(Author::class, "Author_Name");
    }
    public function location(){
      return $this -> belongsTo(LocationRack::class, "location_id");
    }

    public function client(){
      return $this->belongsTo(Client::class);
    }
    
}
