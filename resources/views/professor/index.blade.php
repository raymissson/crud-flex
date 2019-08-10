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
          <td colspan="2">Opções</td>
        </tr>
    </thead>
    <tbody>
        @foreach($professor as $professor)
        <tr>
            <td>{{$professor->id}}</td>
            <td>{{$professor->prof_nome}}</td>
            <td>{{$professor->prof_nasc}}</td>
            <td><a href="{{ route('professors.edit',$professor->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('professors.destroy', $professor->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a class="nav-link btn btn-success pequeno" href="\professors\create">Novo</a>
<div>
@endsection
