<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="card-group">
                  <div class="col-sm-12 d-flex justify-content-center">
                    <h1>Bem vindo ao sistema de gerenciamento</h1>
                  </div>
                  <br>
                  <div class="col-sm-4 d-flex justify-content-center">
                    <div class="card" style="max-width: 18rem;">
                        <a class="nav-link" href="\professors">
                            <img class="card-img-top" src="{!! asset('img/professor.jpg') !!}" width="200"
                                height="200" alt="Imagem de capa do card">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Professor</h5>
                            <p class="card-text">Mantenha os dados dos professores.</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-4 d-flex justify-content-center">
                    <div class="card" style="max-width: 18rem;">
                          <a class="nav-link" href="\cursos">
                              <img class="card-img-top" src="{!! asset('img/curso.jpg') !!}" width="200"
                                  height="200" alt="Imagem de capa do card">
                          </a>
                          <div class="card-body">
                              <h5 class="card-title">Curso</h5>
                              <p class="card-text">Mantenha os dados dos cursos.</p>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-4 d-flex justify-content-center">
                      <div class="card" style="max-width: 18rem;">
                          <a class="nav-link" href="\alunos">
                              <img class="card-img-top" src="{!! asset('img/aluno.png') !!}" width="200"
                                  height="200" alt="Imagem de capa do card">
                          </a>
                          <div class="card-body">
                              <h5 class="card-title">Aluno</h5>
                              <p class="card-text">Mantenha os dados dos alunos.</p>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </body>
</html>
