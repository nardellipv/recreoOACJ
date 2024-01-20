<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countStudentLevel1 = Student::where('user_id', userConnect()->id)
        ->where('level_student', 1)
        ->count();

        $countStudentLevel2 = Student::where('user_id', userConnect()->id)
        ->where('level_student', 2)
        ->count();

        return view('school.index', compact('countStudentLevel1','countStudentLevel2'));
    }
}
