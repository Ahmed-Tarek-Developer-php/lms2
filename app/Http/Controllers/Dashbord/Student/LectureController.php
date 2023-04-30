<?php

namespace App\Http\Controllers\Dashbord\Student;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LectureController extends Controller
{
    public function index() {
        $lectures = Lecture::where('classroom_id', Auth::user()->classroom_id)
            ->where('grade_id', Auth::user()->grade_id)
            ->where('section_id', Auth::user()->section_id)
            ->get();
        return view('dashboard.Students.Dashboard.Lectures.index', compact('lectures'));
    }
}
