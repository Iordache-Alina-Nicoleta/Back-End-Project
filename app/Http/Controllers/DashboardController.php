<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\IssueBook;
use App\Models\LocationRack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function getDashboard() {
    return view("dashboard", [
       "returned_book" => IssueBook::where("Status", "returned")->count(),
       "not_returned_book" => IssueBook::where("Status", "not returned")->count(),
       "total_books" => Book::all()->count(),
       "total_authors" => Author::all()->count(),
       "total_categories" => Category::all()->count(),
       "total_locations" => LocationRack::all()->count(),
       "total_issues" => IssueBook::all()->count()
    ]);
   }

}
