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

  /*  public function storeAluno(Request $request){

      $aluno_novo = new Aluno;

      $aluno_novo->nome = $request->nome;
      $aluno_novo->faltas = $request->faltas;
      $aluno_novo->registro = $request->registro;
      $aluno_novo->media = $request->media;
      $aluno_novo->serie = $request->serie;
      $aluno_novo->turma = $request->turma;

      $aluno_novo->save();

      return back();

    } */

    public function insereAluno(Request $request){

      $aluno_novo = new Aluno;

      $aluno_novo->nome = $request->nome;
      $aluno_novo->faltas = $request->faltas;
      $aluno_novo->registro = $request->registro;
      $aluno_novo->media = $request->media;
      $aluno_novo->serie = $request->serie;
      $aluno_novo->turma = $request->turma;

      $aluno_novo->save();

      return back();


    }


    public function atualizaAluno(Request $request, $id)
    {

      $aluno_novo = Aluno::find($id)->update($request->all());

      return back();
    }

    public function deletaAluno($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return back();
    }


    //exemplo de como chamar uma função da model
    public function getAluno(Request $request){

        $aluno = new Aluno;

        $resposta = $aluno->exemplo($request->id);

        dd($resposta);

    }
}
