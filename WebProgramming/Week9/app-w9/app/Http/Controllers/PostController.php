<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*
    public function index($id)
    {
        return "List of all posts will be here...";
    }
    */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create form will be here...";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return "Individual post will be here... Post ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return "Edit form will be here... Post ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /*
    public function test()
    {
        return view(
            'posts.test',
            [
                'nim' => '001',
                'nama' => 'John Thor',
                'prodi' => 'Informatika'
            ]
        );
    }
    */
    /*
    public function test()
    {
        return view('posts.test')
            ->with('nim', '001')
            ->with('nama', 'John Thor')
            ->with('prodi', 'Informatika');
    }
    */

    public function test()
    {
        $students = ['John Thor', 'John Wick', 'John Doel', 'John Jon'];
        return view('posts.test')->with('students', $students);
    }
}
