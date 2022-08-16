<?php

namespace App\Http\Controllers;

use App\General\Concretes\BookStatus;
use App\Http\Requests\AddIssueBookRequest;
use App\Http\Requests\EditIssueBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Client;
use App\Models\IssueBook;
use App\Models\LocationRack;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use Carbon\Carbon;


class IssueBookController extends Controller
{
    public function index () {
        $borrow = Carbon::today();
        $due = Carbon::now();
        $issue = IssueBook::all();
        $books = Book::all();
        $issue = IssueBook::orderBy('Book_Name')->get();
        $client = Client::all();
        return view("pages.issueBook.index", [
            "issue"=> $issue,
            "books" => $books,
            "due" => $due,
            "borrow" =>$borrow,
            "client" =>$client
        ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod("post")) 
        {
            $name =$request->post("name");
            $issue = IssueBook::where ("Book_Name", "LIKE", "%".$name."%")
                                ->orwhere("Author_Name","LIKE", "%".$name."%" )                    
            ->get();
        }
        return view("pages.issueBook.index", compact("issue"));
     
    }

    public function Add(Request $request) {
        $authors = Author:: all();
        $books = Book::all();
        $statuses = BookStatus::getEnum();
        $locationId = $request ->get("LocationRack");
        $authorId = $request->get("IssueBook");
        $locations = LocationRack::all();
        $issue = IssueBook::all();
        $copy = Book::all();
        $borrow = Carbon::now();
        $client = Client::all();
        return view("pages.issueBook.add", [
            "books" => $books,
            "authors" => $authors,
            "locationId" => $locationId,
            'statuses' => $statuses,
            "locations" =>$locations,
            "issue" => $issue,
            "copy" => $copy,
            "authorId" =>$authorId,
            "borrow" =>$borrow,
            "client" =>$client
            
        ]);
    }

    public function store (AddIssueBookRequest $request) {
        if($request ->validated()){
            $args = $request -> only([
                "Book_Name",
                "Author_Name", 
                "Borrowed_Date", 
                "Status",
                "client_id"    
            ]);

            $issue = new IssueBook($args);

            if ($issue ->save()) {
                return redirect()->route("IssueBook") -> with("success", "Issue added!");
            }
        }
            return redirect()-> route("IssueBook")->with("failed", "We have a problem!");
    }

    public function view(IssueBook $issue){
        $location =LocationRack:: all();
        $book = Book::all();
        $due = Carbon::now();
        $client = Client::all();
        return view("pages.issueBook.view", [
            "issue"=>$issue, 
            "location" =>$location,
            "book" => $book, 
            "due" =>$due,
            "client" => $client
        ]);
    }

    public function destroy (IssueBook $issue) {
        if($issue->delete()){
            return redirect()->route("IssueBook")->with ("success", "Issue book deleted succesfully!");
        }
    }

    public function edit(IssueBook $issue) {
        $authors = Author::all();
        $statuses = BookStatus::getEnum();
        $locations = LocationRack::all();
        $books = Book::all();
        $client = Client::all();
        return view("pages.issueBook.edit", [
            "issue"=>$issue,
            "authors" =>$authors,
            'statuses' => $statuses,
            "locations" => $locations, 
            "book"=>$books,
            "client" => $client
        ]);
    }

    public function update (EditIssueBookRequest $request, IssueBook $issue)
    {      
        if($request ->validated()){
            $args = $request -> only([
                "Book_Name","Author_Name", "Borrowed_Date", "Due_Date", "Status", "client_id"
            ]);

        if ($issue ->update($args)) {
            return redirect()->route("IssueBook", $issue->id) -> with("success", "Issue Book updated");
            }
        }
            else {
                return redirect()-> route("IssueBook", $issue->id)->with("failed", "Oops, we have an error!"); 
        }
   
    }

    public function return_book(){
       
        return view("pages.issueBook.index");
          
    }

    

}
