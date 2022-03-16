<?php

use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/get-all-worker", [WorkerController::class, "getAllWorker"]);
Route::get("/search", function(){
    return view("search");
});

Route::get("/search-worker", [WorkerController::class, "showCertainWorker"]);
Route::delete("/delete-worker/{worker}",[WorkerController::class, "deleteCertainWorker"])->name("delete");

Route::put("/edit-worker/{worker}", [WorkerController::class, "editCertainWorker"])->name("edit");
Route::get("/modify-worker/{worker}", [WorkerController::class, "openModifiedMenu"])->name("modify");