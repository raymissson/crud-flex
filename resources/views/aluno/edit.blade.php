@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Aluno
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
      <form method="post" action="{{ route('alunos.update', $aluno->id) }}">
        <div class="form-group">
            @csrf
            @method('PATCH')
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="aluno_nome" value="{{$aluno->aluno_nome}}"/>
        </div>
        <div class="form-group">
            <label for="nascimento">Nascimento</label>
            <input class="form-control" type="date" name="aluno_nasc" value="{{$aluno->aluno_nasc}}"/>
        </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="tel" class="form-control" name="aluno_cep" id="cep" value="{{$aluno->aluno_cep}}"/>
        </div>
          <div class="form-group">
              <label for="logradouro">Logradouro</label>
              <input type="text" class="form-control" name="aluno_logra" id="endereco" value="{{$aluno->aluno_logra}}"/>
          </div>
          <div class="form-group">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" name="aluno_bairro" id="bairro" value="{{$aluno->aluno_bairro}}"/>
          </div>
          <div class="form-group">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" name="aluno_cidade" id="cidade" value="{{$aluno->aluno_cidade}}"/>
          </div>
          <div class="form-group">
              <label for="estado">Estado</label>
              <input type="text" class="form-control" name="aluno_estado" id="uf" value="{{$aluno->aluno_estado}}"/>
          </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="aluno_num" value="{{$aluno->aluno_num}}"/>
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="curso_id">
              @foreach($curso as $curso)
              <option value="{{$curso->id}}" {{($curso->id ===$aluno->curso_id) ? 'selected' : ''}}>{{$curso->curso_nome}}</option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection
