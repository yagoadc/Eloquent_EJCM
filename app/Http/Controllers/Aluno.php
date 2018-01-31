<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Aluno;

class AlunoController extends Controller
{

    public function index()
    {
        $alunos = Aluno::all();
      
        return view('alunos',['alunos' => $alunos]);
    }


    public function insereAluno(Request $request)
    {
        return back();
    }


    public function atualizaAluno(Request $request, $id)
    {
        return back();
    }

    public function deletaAluno($id) 
    {

        return back();
    }


    //exemplo de como chamar uma função da model
    public function getAluno(Request $request){

        $aluno = new Aluno;
        
        $resposta = $aluno->exemplo($request->id);

        dd($resposta);

    }
}
