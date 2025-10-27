<?php
    include_once('bd.php');
    $dados = consulta();
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

<table class="table table-hover">
  <tr>
    <td>pais</td>
    <td>continente</td>
    <td>regiao_continente</td>
    <td>evento</td>
  </tr>
<?php
foreach ($dados as $key => $value) {

  echo"<tr>";
  echo   "<td>".$dados[$key]["pais"]."</td>";
  echo   "<td>".$dados[$key]["continente"]."</td>";
  echo   "<td>".$dados[$key]["regiao_continente"]."</td>";
  echo   "<td>".$dados[$key]["evento"]."</td>";
  echo"</tr>";
} 
?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>