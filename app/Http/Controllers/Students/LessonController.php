<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student.lessons.index');
    }

}
