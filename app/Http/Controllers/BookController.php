<?php

namespace App\Http\Controllers;

use App\General\Concretes\CategStatus;
use App\Http\Requests\AddBookRequest;
use App\Http\Requests\EditBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\IssueBook;
use App\Models\LocationRack;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index () {
        $book = Book::all();
        $book = Book::orderBy('Book_Name')->get();
        return view("pages.book.index", [
            "book"=> $book
          ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod("post")) 
        {
            $name =$request->post("name");
            $book = Book::where ("Book_Name", "LIKE", "%".$name."%")
               
                ->get();
        }
        return view("pages.book.index", compact("book"));
     
    }
    public function Add(Request $request) {
            $statuss = CategStatus::getEnumm();
            $categories = Category::all();
            $authors = Author:: all();
            $locations = LocationRack::all();
            $locationId = $request ->get("LocationRack");
            return view("pages.book.add", [
                "categories"=>$categories,
                "authors" => $authors,
                "locations" =>$locations,
                "locationId" => $locationId,
                "statuss" => $statuss
            ]);
    }

    
    
    public function store (AddBookRequest $request) {
        if($request ->validated()){
                $args = $request -> only([
                    'Book_Name',
                    "ISBN_no", 
                    'category_id', 
                    'author_id',
                    "location_id", 
                    'Status',
                    "no_of_copy", 
                    "description",
                    'Created_On', 
                    'Updated_On'
            ]);
        
            $book = new Book($args);
        
                if ($book ->save()) {
                    return redirect()->route("add-book-page") -> with("success", "Book added!");
                }
            }
            return redirect()-> route("add-book-page")->with("failed", "We have a problem!");    
        }
    public function view(Book $book){
            
            $copy = IssueBook::where('Status', 'not returned')->count();
            return view("pages.book.view", [
                "book"=>$book,
                "copy" => $copy
            ]);
        }

    public function destroy (Book $book) {
            if($book->delete()){
                return redirect()->route("Book")->with ("success", "Book deleted succesfully!");
            }
        }

    public function edit (Book $book) {
            $statuss = CategStatus::getEnumm();
            $categories = Category::all();
            $authors = Author:: all();
            $locations = LocationRack::all();
            return view("pages.book.edit", [
                "book"=>$book,
                "categories"=>$categories,
                "authors" => $authors,
                "locations" =>$locations,
                "statuss" => $statuss
            ]);
        }
    public function update (EditBookRequest $request, Book $book)
    {      
        if($request ->validated()){
            $args = $request -> only([
                "Book_Name", 
                "ISBN_no",
                "category_id", 
                "author_id", 
                "location_id",
                 "Status",
                 "no_of_copy",
                 "description", 
                 "Created_On", 
                 "Updated_On"
            ]);

        if ($book ->update($args)) {
            return redirect()->route("add-book-page", $book->id) -> with("success", "Book updated");
            }
        }
            else {
                return redirect()-> route("add-book-page", $book->id)->with("failed", "Oops, we have an error!"); 
        }
   
    }
}