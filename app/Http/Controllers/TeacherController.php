<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function viewdashboard(){
        return view('AdminPanel.teacher_dashboard');
    }
}
