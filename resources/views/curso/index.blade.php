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
          <td>Curso</td>
          <td>Professor</td>
          <td colspan="2">Opções</td>
        </tr>
    </thead>
    <tbody>
        @foreach($curso as $curso)
        <tr>
            <td>{{$curso->id}}</td>
            <td>{{$curso->curso_nome}}</td>
            <td>{{$curso->prof_id}}</td>
            <td><a href="{{ route('cursos.edit',$curso->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('cursos.destroy', $curso->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a class="nav-link btn btn-success pequeno" href="\cursos\create">Novo</a>
<div>
@endsection
