<?php

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function sList(){
        $data['Students'] =Student ::paginate(5);

        return view('estudiantes.listar', $data);
    }
}
