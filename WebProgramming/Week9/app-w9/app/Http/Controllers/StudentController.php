<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {

        $data = [
            ['nim' => '001', 'nama' => 'Hu Tao', 'prodi' => 'Teknik Mondstat'],
            ['nim' => '002', 'nama' => 'Keqing', 'prodi' => 'Teknik Liyue'],
            ['nim' => '003', 'nama' => 'Furina', 'prodi' => 'Teknik Fontaine'],
        ];

        return view('students.index')->with('data', $data);
    }
}
