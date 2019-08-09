@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Cadastrar Professor
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
      <form method="post" action="{{ route('professors.store') }}">
        @csrf
          <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control" name="prof_nome"/>
          </div>
          <div class="form-group">
              <label for="price">Nascimento:</label>
              <input class="form-control" type="date" name="prof_nasc"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
</div>
@endsection
