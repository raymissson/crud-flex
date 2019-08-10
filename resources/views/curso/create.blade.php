@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Cadastrar Curso
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
      <form method="post" action="{{ route('cursos.store') }}">
        @csrf
          <div class="form-group">
              <label for="name">Nome Curso</label>
              <input type="text" class="form-control" name="curso_nome"/>
          </div>
          <div class="form-group">
              <label for="price">Professor:</label>
              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="prof_id">
                <option selected>Escolha...</option>
                @foreach($professor as $professor)
                <option value="{{$professor->id}}">{{$professor->prof_nome}}</option>
                @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
</div>
@endsection
