<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('student-search', [
            'students' => Student::filter(request(['id', 'name', 'class']))->orderBy('id', 'DESC')->get()
        ]);
    }
}
