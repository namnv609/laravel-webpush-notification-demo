<?php

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

Route::get("/", "HomesController@index");
Route::get("/posts/{id}", "PostsController@post")->where("id", "^[0-9]+$");

/**
 * Session routes
 */
Route::get("/login", function() {
    return view("sessions/index");
});
Route::post("/login", "SessionsController@doLogin");
Route::get("/logout", "SessionsController@doLogout");

/**
 * Admin routes
 */
Route::group(["namespace" => "Admin", "prefix" => "admin", "middleware" => ["admin"]], function() {
    Route::get("/", "AdminsController@index");
});
