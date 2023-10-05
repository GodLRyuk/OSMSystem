<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewdashboard(){
        return view('AdminPanel.student_dashboard');
    }
}
