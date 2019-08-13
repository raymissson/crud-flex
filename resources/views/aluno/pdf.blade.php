<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Documento PDF</title>
  </head>
  <body>
    <h3>Relatório Aluno</h3>

    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Nascimento</td>
            <td>CEP</td>
            <td>Curso</td>
            <td>Professor</td>
          </tr>
      </thead>
      <tbody>
          @foreach($aluno as $aluno)
          <tr>
              <td>{{$aluno->id}}</td>
              <td>{{$aluno->aluno_nome}}</td>
              <td>{{$aluno->aluno_nasc}}</td>
              <td>{{$aluno->aluno_cep}}</td>
              @php
              $curso = DB::table('cursos')->where('id', $aluno->curso_id)->value('curso_nome');
              $id = DB::table('cursos')->where('id', $aluno->curso_id)->value('prof_id');
              @endphp
              <td>{{$curso}}</td>
              @php
              $professor = DB::table('professors')->where('id', $id)->value('prof_nome');
              @endphp
              <td>{{$professor}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
