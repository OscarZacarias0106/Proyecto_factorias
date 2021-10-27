<?php

namespace App\Http\Controllers;


use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function sList(){
        $data['students'] =student ::paginate(5);

        return view('estudiantes.listar', $data);
    }
}
