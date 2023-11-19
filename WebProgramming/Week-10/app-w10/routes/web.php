<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Student;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function () {
    DB::insert(
        "INSERT INTO posts(title, content) VALUES(?,?)",
        ['PHP with Laravel', 'Laravel is the best thing that happen to PHP']
    );
});

Route::get('read', function () {
    $results = DB::select("SELECT * FROM posts WHERE id = ?", [1]);
    //    foreach ($results as $post) {
    //        return $post->title;
    //    }
    return $results;
});

Route::get('/update', function () {
    $updated = DB::update("UPDATE posts SET title = ? WHERE id = ?", ["Updated title", 1]);
});

Route::get('/delete', function () {
    $deleted = DB::delete("DELETE FROM posts WHERE id = ?", [1]);
});

Route::get('/read', function () {
    $posts = Post::all();
    $str = "";
    foreach ($posts as $post) {
        $str .= $post->title . "<br />";
    }
    return $str;
});

/*
 * DATABASE Raw SQL Queries
 */

Route::get('/find/{id}', function ($id) {
    $post = Post::find($id);
    return $post->title;
});

Route::get('/findwhere', function () {
    $posts = Post::where('is_admin', false)->orderBy('id', 'desc')->take(1)->get();
    return $posts;
});

Route::get('/basicinsert', function () {
    $post = new Post;
    $post->title = "New Eloquent Title";
    $post->content = "Wow Eloquent content is really cool";
    $post->is_admin = true;
    $post->save();
});

Route::get('/create', function () {
    Post::create([
        'title' => 'Title with Create Method',
        'content' => 'Saya belajar banyak hari ini',
        'is_admin' => false
    ]);
});

Route::get('/basicupdate', function () {
    $post = Post::find(5);
    $post->title = 'Updated Eloquent Title';
    $post->content = 'Updated Eloquent Content';
    $post->save();
});

Route::get('/update', function () {
    Post::where('id', 5)->where('is_admin', false)->update([
        'title' => 'NEW PHP TITLE',
        'content' => 'I love Learning Laravel'
    ]);
});

Route::get('/delete', function () {
    $post = Post::find(5);
    $post->delete();
});

Route::get('/delete2', function () {
    Post::destroy([2, 3]);
});

Route::get('/delete3', function () {
    Post::where('is_admin', 0)->delete();
});

Route::get('/softdelete', function () {
    Post::find(6)->delete();
});

Route::get('/readsoftdelete', function () {
    //    $post = Post::find(6);
    //    return $post;
    //    $post = Post::withTrashed()->where('id', 6)->get();
    //    return $post;
    //    $post = Post::withTrashed()->get();
    //    return $post;
    $post = Post::onlyTrashed()->get();
    return $post;
});

Route::get('/restore', function () {
    Post::withTrashed()->where('id', 6)->restore();
});

Route::get('forcedelete', function () {
    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
});


//Tugas

Route::get('students/read', function () {
    $students = Student::all();
    $str = "";
    foreach ($students as $student) {
        $str .= $student->nim . "<br />" . $student->name . "<br />" . $student->prodi . "<br /><br />";
    }
    return $str;
});

Route::get('students/readall', function () {
    $students = Student::withTrashed()->get();
    $str = "";
    foreach ($students as $student) {
        $str .= $student->nim . "<br />" . $student->name . "<br />" . $student->prodi . "<br /><br />";
    }
    return $str;
});

Route::get('students/readdeleted', function () {
    $students = Student::onlyTrashed()->get();
    $str = "";
    foreach ($students as $student) {
        $str .= $student->nim . "<br />" . $student->name . "<br />" . $student->prodi . "<br /><br />";
    }
    return $str;
});

Route::get('students/create', function () {
    Student::create([
        'nim' => '001',
        'name' => 'Hu Tao',
        'prodi' => 'Teknik Liyue'
    ]);
    Student::create([
        'nim' => '002',
        'name' => 'Furina',
        'prodi' => 'Teknik Fontaine'
    ]);
    Student::create([
        'nim' => '003',
        'name' => 'Nilou',
        'prodi' => 'Teknik Sumeru'
    ]);
});

Route::get('students/update', function () {
    Student::where('id', 2)->update([
        'name' => 'Keqing',
        'prodi' => 'Teknik Mondstat'
    ]);
});

Route::get('students/delete', function () {
    Student::destroy(2);
});

Route::get('students/restore', function () {
    Student::withTrashed()->where('id', 2)->restore();
});

Route::get('students/forcedelete', function () {
    Student::onlyTrashed()->where('id', 2)->forceDelete();
});
