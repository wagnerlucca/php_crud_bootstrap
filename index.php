<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

 <!-- Bootstrap e CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  

</head>
  <body>
  
 <!-- Barra de Navegação -->

 <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=novo">Novo Usuário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar Usuários</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Corpo da Página -->

    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
            include("config.php");

            switch(@$_REQUEST["page"])
            {
                case "novo":
                  include("novo-usuario.php");
                break;
                case "listar":
                  include("listar-usuario.php");
                break;
                case "salvar":
                  include("salvar-usuario.php");
                break;
                case "editar":
                  include("editar-usuario.php");
                break;
                default:
                  print "<h1>Bem vindos!</h1>";
            }
          ?>
        </div>
      </div>    
    </div>
  </body>
</html>