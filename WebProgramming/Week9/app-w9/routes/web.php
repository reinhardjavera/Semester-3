<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts', 'store')->name('posts.store');

    Route::get('/posts/test', 'test')->name('posts.test');
    Route::get('/posts/{id}', 'show')->name('posts.show');

    Route::get('/posts/edit/{id}', 'edit')->name('posts.edit');
    Route::get('/posts/update', 'update')->name('posts.update');
    Route::post('/posts/{id}', 'destroy')->name('posts.destroy');
});


//Tugas 

// Route::get('/students', 'StudentController@index')->name('students.index');
Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'index')->name('students.index');
});
