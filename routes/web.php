<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view("admin-login","admin-logins");
Route::post("admin-login",[AdminController::class,"login"]);
Route::get("dashboard",[AdminController::class,"dashboard"]);
Route::get("admin-categories",[AdminController::class,"categories"]);
Route::get("admin-logout",[AdminController::class,"logout"]);
Route::post("add-category",[AdminController::class,"addCategories"]);
Route::get("edit-category/{id}",[AdminController::class,"editCategory"]);
Route::get("delete-category/{id}",[AdminController::class,"deleteCategory"]);
Route::get("add-quiz",[AdminController::class,"addQuiz"]);