<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\LocationRackController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\IssueBookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserBookController;
use App\Models\Profile;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GuestController::class, "welcome"])->name("welcome");

Route::group(["middleware"=> "auth"], function(){
    Route::group(["prefix"=>"dashboard"], function(){
        Route::get('/', [DashboardController::class, "getDashboard"])->name('dashboard');
    });
    Route::group(["prefix"=>"Category"], function(){
        Route::get('/', [CategoryController::class, "index"])->name('Category');
        Route::post('/', [CategoryController::class, "store"])->name("store-category");
        Route::get('/add', [CategoryController::class, "add"])->name("add-category-page");
        Route::get("/edit/{category}", [CategoryController::class, "edit"])->name("edit-category-page");
        Route::put("/update/{category}", [CategoryController::class, "update"])->name("update-category");
        Route::post('/search', [CategoryController::class, "search"])->name('search-category');
        Route::put('/restore', [CategoryController::class, "restore"])->name('restore-category');
        Route::get("/{category}", [CategoryController::class, "view"])->name("view-category");
        Route::delete("/{category}", [CategoryController::class, "destroy"])->name("delete-category");
        
   
    });
    Route::group(["prefix"=>"Author"], function(){
        Route::get('/', [AuthorController::class, "index"])->name('Author');
        Route::post('/', [AuthorController::class, "store"])->name("store-author");
        Route::get('/add', [AuthorController::class, "add"])->name("add-author-page");
        Route::get("/edit/{author}", [AuthorController::class, "edit"])->name("edit-author-page");
        Route::put("/update/{author}", [AuthorController::class, "update"])->name("update-author");
        Route::post('/search', [AuthorController::class, "search"])->name('search-author');
        Route::get("/{author}", [AuthorController::class, "view"])->name("view-author");
        Route::delete("/{author}", [AuthorController::class, "destroy"])->name("delete-author");
    });
    Route::group(["prefix"=>"LocationRack"], function(){
        Route::get('/', [LocationRackController::class, "index"])->name('LocationRack');
        Route::post('/', [LocationRackController::class, "store"])->name("store-location");
        Route::get('/add', [LocationRackController::class, "add"])->name("add-location-page");
        Route::get("/edit/{location}", [LocationRackController::class, "edit"])->name("edit-location-page");
        Route::put("/update/{location}", [LocationRackController::class, "update"])->name("update-location");
        Route::post('/search', [LocationRackController::class, "search"])->name('search-location');
        Route::get("/{location}", [LocationRackController::class, "view"])->name("view-location");
        Route::delete("/{location}", [LocationRackController::class, "destroy"])->name("delete-location");
    });
    Route::group(["prefix"=>"Book"], function(){
        Route::get('/', [BookController::class, "index"])->name('Book');
        Route::post('/', [BookController::class, "store"])->name("store-book");
        Route::get('/add', [BookController::class, "add"])->name("add-book-page");
        Route::get("/edit/{book}", [BookController::class, "edit"])->name("edit-book-page");
        Route::put("/update/{book}", [BookController::class, "update"])->name("update-book");
        Route::post('/search', [BookController::class, "search"])->name('search-book');
        Route::get("/{book}", [BookController::class, "view"])->name("view-book");
        Route::delete("/{book}", [BookController::class, "destroy"])->name("delete-book");
    });

    Route::group(["prefix"=>"IssueBook"], function(){
        Route::get('/', [IssueBookController::class, "index"])->name('IssueBook');
        Route::post('/', [IssueBookController::class, "store"])->name("store-issue-book");
        Route::get('/add', [IssueBookController::class, "add"])->name("add-issue-book-page");
        Route::get("/edit/{issue}", [IssueBookController::class, "edit"])->name("edit-issueBook-page");
        Route::put("/update/{issue}", [IssueBookController::class, "update"])->name("update-issueBook");
        Route::post('/search', [IssueBookController::class, "search"])->name('search-issue');
        Route::get("/{issue}", [IssueBookController::class, "view"])->name("view-issue");
        Route::delete("/{issue}", [IssueBookController::class, "destroy"])->name("delete-issueBook");
    });

    Route::group(["prefix"=>"Client"], function(){
        Route::get('/', [ClientController::class, "index"])->name('Client');
        Route::post('/search', [ClientController::class, "search"])->name('search-client');
        Route::post('/', [ClientController::class, "store"])->name("store-client");
        Route::get('/add', [ClientController::class, "add"])->name("add-client");
        Route::get("/{client}", [ClientController::class, "view"])->name("view-client");
        Route::get("/edit/{client}", [ClientController::class, "edit"])->name("edit-client");
        Route::put("/update/{client}", [ClientController::class, "update"])->name("update-client");
        Route::delete("/{client}", [ClientController::class, "destroy"])->name("delete-client");

    });


    Route::group(["prefix"=>"setting"], function(){
        Route::get("/settings", [SettingController::class, "index"])->name("settings");
        Route::put('/settings',[SettingController::class,'save'])->name('save-settings');
      
    });
    
    Route::group(["prefix"=>"profile"], function(){
        Route::get("/", [ProfileController::class, "index"])->name("profile");
        Route::get('/add',[ProfileController::class,'add'])->name('add-profile');
        Route::post('/', [ProfileController::class, "store"])->name("store-profile");
        Route::get('/download',[ProfileController::class,'downloadProfileFile'])->name('download-profile-file');
    });
    
});

require __DIR__.'/auth.php';
