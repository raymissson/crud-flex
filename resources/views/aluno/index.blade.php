@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Nascimento</td>
          <td>CEP</td>
          <td>Curso</td>
          <td colspan="2">Opções</td>
        </tr>
    </thead>
    <tbody>
        @foreach($aluno as $aluno)
        <tr>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->aluno_nome}}</td>
            <td>{{$aluno->aluno_nasc}}</td>
            <td>{{$aluno->aluno_cep}}</td>
            <td>{{$aluno->curso_id}}</td>
            <td><a href="{{ route('alunos.edit',$aluno->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('alunos.destroy', $aluno->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="container">
    <div class="row">
      <div class="col-5">
          <a class="nav-link btn btn-success pequeno" href="\alunos\create">Novo</a>
      </div>
      <div class="col-7">
        <a class="nav-link btn btn-secondary pequeno" href="{{ route('pdf') }}">Gerar Relatório</a>
      </div>
    </div>
  </div>
</div>
@endsection
