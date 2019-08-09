@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Professor
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('professors.update', $professor->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nome</label>
              <input type="text" class="form-control" name="prof_nome" value="{{$professor->prof_nome}}"/>
          </div>
          <div class="form-group">
              <label for="nasc">Nascimento</label>
              <input class="form-control" type="date" name="prof_nasc" value="{{$professor->prof_nasc}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection
