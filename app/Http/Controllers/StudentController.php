<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return 'students data...';
    }

    public function show(string $id)
    {
        return 'Student ' . $id;
    }

    public function create()
    {
        return "create student data";
    }
}
