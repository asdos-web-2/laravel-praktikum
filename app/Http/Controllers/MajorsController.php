<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index()
    {
        return view('majors.index');
    }

    public function show(string $id)
    {
        return view('majors.show');
    }

    public function create()
    {
        return view('majors.create');
    }

    public function edit(string $id)
    {
        return view('majors.edit');
    }
}
