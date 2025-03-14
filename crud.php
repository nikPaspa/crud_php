<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Crud</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuário</a>
        </li>        
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
        include("config.php");
switch(@$_REQUEST["page"]){
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


<script scr="js/bootstrap.bundle.min.js"></script>
</body>
</html>