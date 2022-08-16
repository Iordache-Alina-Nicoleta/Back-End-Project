<?php

namespace App\Http\Controllers;

use App\General\Concretes\CategStatus;
use App\General\Concretes\Statuses;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class CategoryController extends Controller
{

    public function index (Request $request) {
        $category = Category::all();
        $category = Category::orderBy('Category_Name')->get();
        $category = Category::withTrashed()->get();
        return view("pages.category.index", [
            "category"=> $category]);
        }

        
    public function search(Request $request)
    {
        if($request->isMethod("post")) 
        {
            $name =$request->post("name");
            $category = Category::where ("Category_Name", "LIKE", "%".$name."%")->get();
        }
        return view("pages.category.index", compact("category"));
     
    }


    public function Add() {
        $statuss = CategStatus::getEnumm();
            return view("pages.category.add", [
                "statuss" => $statuss
            ]);
    }

    public function store (AddCategoryRequest $request) {
        if($request ->validated()){
            $args = $request -> only([
                "Category_Name", "Status","description", "Created_On", "Updated_On"
            ]);

        $category = new Category($args);

        if ($category ->save()) {
        return redirect()->route("Category") -> with("success", "Category added!");
            }
        }
        return redirect()-> route("Category")->with("failed", "We have a problem!");

    }

    public function view(Category $category) {
        return view("pages.category.view", [
            "category"=>$category
        ]);
    }

    public function destroy (Category $category) {
        if($category->delete()){
            return redirect()->route("Category")->with ("success", "Category deleted succesfully!");
        }
    }

    public function edit(Category $category) {
        $statuss = CategStatus::getEnumm();
        return view("pages.category.edit", [
            "category"=>$category,
            "statuss" => $statuss
        ]);
    }
    public function update (EditCategoryRequest $request, Category $category)
    {      
        if($request ->validated()){
            $args = $request -> only([
                "Category_Name", "Status","description", "Created_On", "Updated_On"
            ]);

        if ($category ->update($args)) {
            return redirect()->route("Category", $category->id) -> with("success", "Category updated");
            }
        }
            else {
                return redirect()-> route("Category", $category->id)->with("failed", "Oops, we have an error!"); 
        }
   
    }

    public function restore(Request $request)
    {
        $categoryId = $request->post('category_id');

        $category = Category::where('id',$categoryId)->withTrashed()->first();

        $category->restore();

        return redirect()->route('Category')->with("success","Category restored");
    }

   

}