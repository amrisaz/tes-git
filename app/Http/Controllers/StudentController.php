<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all(); //select * from table        
        return view('student', ['studentList' => $student]);
    }
}
