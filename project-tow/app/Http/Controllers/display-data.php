<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class display_data extends Controller
{
    public function nahid () {
        return view('student.add-student');
    }
}
