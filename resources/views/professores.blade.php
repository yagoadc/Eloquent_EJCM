@extends('Layouts.layout')



@section('content')
       

<div class="well panel col-xs-12 col-md-12">


  <div class="panel panel-default col-xs-12 col-md-12">


    <div class="text-center">
        <h1>Novo Professor</h1>
    </div>

    <div class="">

      <form class="form-horizontal" action="" enctype="multipart/form-data" method="POST">
          {{ csrf_field() }}
          {{method_field('POST')}}

          <!-- credencial-nome-disciplina -->
          <div class="form-group">
            <label for="credencial" class="col-xs-2 control-label">Credencial:</label>
            <div class="col-xs-1">
              <input type="integer" class="form-control" name="credencial" id="credencial" placeholder="80000000">
            </div>
          
          
            <label for="nome" class="col-xs-2 control-label">Nome:</label>
            <div class="col-xs-2">
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Joel Santana">
            </div>


            <label for="disciplina" class="col-xs-1 control-label">Disciplina:</label>
            <div class="col-xs-1">
              <input type="integer" class="form-control" name="disciplina" id="disciplina" placeholder="1-12">
            </div>
          </div>

          <!-- turmas-totalAlunos-aprovados -->
          <div class="form-group">
            <label for="quantidade_turmas" class="col-xs-2 control-label">Qnt de Turmas:</label>
            <div class="col-xs-1">
              <input type="integer" class="form-control" name="quantidade_turmas" id="quantidade_turmas" placeholder="7">
            </div>


            <label for="total_alunos" class="col-xs-2 control-label">Total de Alunos:</label>
            <div class="col-xs-1">
              <input type="integer" class="form-control" name="total_alunos" id="total_alunos" placeholder="250">
            </div>

         
            <label for="aprovados" class="col-xs-2 control-label">Aprovados:</label>
            <div class="col-xs-1">
              <input type="integer" class="form-control" name="aprovados" id="aprovados" placeholder="0 - 50">
            </div>
          </div>
      
          <br>
        <!-- horas-salario-email -->
          <div class="form-group">
            <label for="horas_aula" class="col-xs-2 control-label">Horas/Aula:</label>
            <div class="col-xs-1">
              <input type="integer" class="form-control" name="horas_aula" id="horas_aula" placeholder="120">
            </div>


            <label for="salario" class="col-xs-2 control-label">Salário:</label>
            <div class="col-xs-1">
              <input type="float" class="form-control" name="salario" id="salario" placeholder="3250.00">
            </div>

         
            <label for="email" class="col-xs-2 control-label">Email:</label>
            <div class="col-xs-3">
              <input type="text" class="form-control" name="email" id="email" placeholder="exemplo@exemplo.com">
            </div>
          </div>

          <br><br><br>

          <div class="text-right">
              <button type="submit" class="btn btn-success waves-effect waves-light">Inserir Professor</button>
          </div>
        </form>
        <br>
      </div>
    </div>

    <div class="panel panel-default col-xs-12 col-md-12">
      <div class="text-center">
          <h1>Professores</h1>
      </div>

      <div class="table-responsive col-xs-12 col-md-12">
        <table class="table table-bordered table-hover dt-responsive nowrap">
          <thead class="thead-inverse">
            <tr>
              <th>ID</th>
              <th>Credencial</th>
              <th>Nome</th>
              <th>Disciplina</th>
              <th>Nº Turmas</th>
              <th>Total Alunos</th>
              <th>Aprovados</th>
              <th>Horas/Aula</th>
              <th>Salário</th>
              <th>Email</th>
              <th></th>
            </tr>
          </thead>

          <tbody class="">
            
              
                <tr>
                  <td>id</td>
                  <td>credencial</td>
                  <td>Nome</td>
                  <td>Disciplina</td>
                  <td>Qnt de Turmas</td>
                  <td>Total Alunos</td>
                  <td>Aprovados</td>
                  <td>Horas/Aula</td>
                  <td>Salário</td>
                  <td>Email@email.com</td>
                  <td class="col-xs-2">
                     
                      <form class="col-xs-12" action="" method="POST">
                          <a class="btn btn-md btn-info" data-toggle="modal" data-target="#modal-editar-aluno-id">
                            <i class="material-icons" data-toggle="tooltip" data-placement="top" data-title="Editar">edit</i>
                          </a>

                          {{method_field('DELETE')}}
                          {{csrf_field()}}
                          <button class="btn btn-md btn-danger" type="submit">
                              <i class="material-icons" data-toggle="tooltip" data-placement="top" data-title="Deletar" data-original-title="" title="">
                                delete_forever
                              </i>
                          </button>
                      </form>

                      
                    </td>
                  </tr>
             
            
          </tbody>
        </table>
      </div>
    </div>


    <!--Modal editar aluno  -->
    
        <div id="modal-editar-aluno-id" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close material-icons" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Atualizar Aluno</h4>
                    </div>
                    <form class="form-horizontal form-label-left input_mask" action="" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="modal-body">
                            <div class="col-md-12 has-feedback">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" name="nome" id="inputSuccess2" value="">
                            </div>
                            <br><br><br>
                            <div class="col-md-12 has-feedback">
                                <label for="">Série</label>
                                <input type="integer" class="form-control" name="disciplina" id="inputSuccess2" value="">
                            </div>
                            <br><br><br>
                            <div class="col-md-12 has-feedback">
                                <label for="">Turma</label>
                                <input type="integer" class="form-control" name="turma" id="inputSuccess2" value="">
                            </div>
                            <br><br><br>
                            <div class="col-md-12 has-feedback">
                                <label for="">Média</label>
                                <input type="float" class="form-control" name="media" id="inputSuccess2" value="">
                            </div>
                            <br><br><br>

                            <div class="col-md-12 has-feedback">
                                <label for="">Aprovados</label>
                                <input type="integer" class="form-control" name="aprovados" id="inputSuccess2" value="">
                            </div>
                            <br><br><br>

                        </div>
                        <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-success waves-effect waves-light">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    

{!! csrf_field() !!}

  


</div>
@endsection