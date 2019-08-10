@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Curso
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
      <form method="post" action="{{ route('cursos.update', $curso->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Curso</label>
              <input type="text" class="form-control" name="curso_nome" value="{{$curso->curso_nome}}"/>
          </div>
          <div class="form-group">
              <label for="nasc">Professor</label>
              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="prof_id" value="{{$curso->prof_id}}">
                @foreach($professor as $professor)
                <option value="{{$professor->id}}" {{($professor->id ===$curso->prof_id) ? 'selected' : ''}}> {{$professor->prof_nome}} </option>
                @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection
