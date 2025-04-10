<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
    public function index()
    {
        if (! Gate::allows('view-student')) {
            abort(401);
        }
        $students = Student::with('majors')->get();
        return view('students.index', ['students' => $students]);
    }

    public function show(string $id)
    {
        if (! Gate::allows('view-student')) {
            abort(401);
        }
        $student = Student::with('majors')->find($id);
        return view('students.show', ['student' => $student]);
    }

    public function create()
    {
        if (! Gate::allows('store-student')) {
            abort(401);
        }
        $majors = Majors::all();
        return view('students.create', ['majors' => $majors]);
    }

    public function store(Request $request)
    {
        if (! Gate::allows('store-student')) {
            abort(401);
        }
        $validated = $request->validate([
            'name' => 'required',
            'student_id_number' => 'required|unique:students|max:9',
            'email' => 'required|email|unique:students',
            'phone_number' => 'required',
            'birth_date' => 'required|date',
            'gender' => 'required|in:female,male',
            'majors' => 'required',
            'status' => 'required|in:active,on leave,graduated,dropped out',
        ]);

        Student::create([
            'name' => $validated['name'],
            'student_id_number' => $validated['student_id_number'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'birth_date' => $validated['birth_date'],
            'gender' => $validated['gender'],
            'status' => $validated['status'],
            'major_id' => $validated['majors'],
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    public function edit(string $id)
    {
        if (! Gate::allows('edit-student')) {
            abort(401);
        }

        $student = Student::with('majors')->find($id);
        $majors = Majors::all();
        return view('students.edit', ['student' => $student, 'majors' => $majors]);
    }

    public function update(Request $request, string $id)
    {
        if (! Gate::allows('edit-student')) {
            abort(401);
        }
        $validated = $request->validate([
            'name' => 'required',
            'student_id_number' => "required|unique:students,student_id_number,$id|max:9",
            'email' => "required|email|unique:students,email,$id",
            'phone_number' => 'required',
            'birth_date' => 'required|date',
            'gender' => 'required|in:female,male',
            'majors' => 'required',
            'status' => 'required|in:active,on leave,graduated,dropped out',
        ]);

        $student = Student::find($id);

        $student->update([
            'name' => $validated['name'],
            'student_id_number' => $validated['student_id_number'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'birth_date' => $validated['birth_date'],
            'gender' => $validated['gender'],
            'status' => $validated['status'],
            'major_id' => $validated['majors'],
        ]);

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(string $id)
    {
        if (! Gate::allows('destroy-student')) {
            abort(401);
        }
        Gate::authorize('delete-student');
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
