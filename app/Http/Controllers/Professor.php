<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{

    public function index()
    {
        return view('professores');
    }


    public function insereProfessor(Request $request)
    {
        return back();
    }

    public function atualizaProfessor(Request $request, $id)
    {
        return back();
    }


    public function deletaProfessor($id)
    {
        return back();
    }
}
