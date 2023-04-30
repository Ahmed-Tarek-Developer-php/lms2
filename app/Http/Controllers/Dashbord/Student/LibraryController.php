<?php

namespace App\Http\Controllers\Dashbord\Student;

use App\Http\Controllers\Controller;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\String\b;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Library::where('classroom_id', Auth::user()->classroom_id)
            ->where('grade_id', Auth::user()->grade_id)
            ->where('section_id', Auth::user()->section_id)
            ->get();
        return view('dashboard.Students.Dashboard.Library.index', compact('books'));
    }

    public function download($file_name) {
        return response()->download(public_path('attachments/library/' . $file_name));
    }
}
