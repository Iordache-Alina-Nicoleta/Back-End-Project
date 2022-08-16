<?php

namespace App\Http\Controllers;

use App\General\Concretes\CategStatus;
use App\Http\Requests\AddAuthorRequest;
use App\Http\Requests\EditAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index () {
    $author = Author::all();
    $author = Author::orderBy('Author_Name')->get();
    return view("pages.author.index", [
        "author"=> $author]);
    }

    public function search(Request $request)
    {
        if($request->isMethod("post")) 
        {
            $name =$request->post("name");
            $author = Author::where ("Author_Name", "LIKE", "%".$name."%")->get();
        }
        return view("pages.author.index", compact("author"));
     
    }

    public function Add() {
        $statuss = CategStatus::getEnumm();
        return view("pages.author.add", [
            "statuss" => $statuss
        ]);
    }

    public function store (AddAuthorRequest $request) {
        if($request ->validated()){
            $args = $request -> only([
                "Author_Name", "Status","description", "Created_On", "Updated_On"
            ]);

            $author = new Author($args);

            if ($author ->save()) {
                return redirect()->route("add-author-page") -> with("success", "Author added!");
            }
        }
            return redirect()-> route("add-author-page")->with("failed", "We have a problem!");
    }

    public function view(Author $author) {
        return view("pages.author.view", [
            "author"=>$author
        ]);
    }

    public function destroy (Author $author) {
        if($author->delete()){
            return redirect()->route("Author")->with ("success", "Author deleted succesfully!");
        }
    }

    public function edit(Author $author){
        $statuss =CategStatus::getEnumm();
        return view("pages.author.edit", [
            "author"=>$author,
            "statuss" => $statuss
        ]);
    }
    public function update (EditAuthorRequest $request, Author $author)
    {      
        if($request ->validated()){
            $args = $request -> only([
                "Author_Name", "Status","description", "Created_On", "Updated_On"
            ]);

        if ($author ->update($args)) {
            return redirect()->route("add-author-page", $author->id) -> with("success", "Author updated");
            }
        }
            else {
                return redirect()-> route("add-author-page", $author->id)->with("failed", "Oops, we have an error!"); 
        }
   
    }
}

