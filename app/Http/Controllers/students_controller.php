<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students_model;

class students_controller extends Controller
{
    //
    public function list(){
    // echo "code here.";
    $student_list = students_model::all();
    return view('students',['students_array'=>$student_list]);
    }
}
