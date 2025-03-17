<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        return view("student.index");
    }

    public function create()
    {
        return view("student.create");
    }

    public function store(Request $request)
    {
        return $request;
    }

    public function show(string $id)
    {
        return view("student.detail", ["id" => $id]);
    }

    public function edit(string $id)
    {
        return view("student.edit", ["id" => $id]);
    }

    public function update(Request $request, string $id)
    {
        return $request;
    }

    public function destroy(string $id)
    {
        return $id;
    }
}
