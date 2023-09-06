<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentProfile;

class StudentController extends Controller
{
    public function index()
    {
        $single = Student::with('profile')->find(1);
        echo $single->name. '<br>';
        echo $single->email. '<br>';
        echo $single->profile->country. '<br>';
    }
}
