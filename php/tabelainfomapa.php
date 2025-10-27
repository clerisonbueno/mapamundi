<?php
    error_reporting(E_ALL & ~E_WARNING);
    
    include_once('bd.php');
    $dados = consulta();

    if (!empty($_SESSION['nome'])) {
        //echo $_SESSION['nome'];
    } else {
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
 <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="../index.php">Mapa Mundi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex" role="search">
        
        <a class="btn btn-outline-primary" href="sair.php" type="submit">Sair</a>
      </form>
  </div>
</nav>

<div class="container mt-3"> 


  <table class="table table-hover">
    <tr>
      <td class="h4">País</td>
      <td class="h4">Continente</td>
      <td class="h4">Região do Continente</td>
      <td class="h4">Evento</td>
    </tr>
  <?php
  foreach ($dados as $key => $value) {

    echo"<tr>";
    echo   "<td>".$dados[$key]["pais"]."</td>";
    echo   "<td>".$dados[$key]["continente"]."</td>";
    echo   "<td>".$dados[$key]["regiao_continente"]."</td>";
    echo   "<td>".$dados[$key]["evento"]."</td>";
    echo  "<td> <a class='btn btn-warning' href='bd.php?id=".$dados[$key]['id']."&gt=alterar'>Alterar</a> </td>";;
    echo"</tr>";
  } 
  ?>
  </table>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>