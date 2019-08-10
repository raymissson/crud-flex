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
<div>
@endsection
