<?php
session_start();

 if (isset($_SESSION['nome'])) {
    echo $_SESSION['nome'];
 } else {
    header("Location:login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <form action="bd.php?gt=caduser" method="post" class="d-flex flex-column gap-3
         justify-content-center align-items-center vh-100 ">
            <h1>Cadastro</h1>
            <p>Preencha todas as informações:</p>
            <input type="text" class="form-control" name="nome" id="" placeholder="Digite o seu nome..." >
            <input type="text" class="form-control" name="email" id="" placeholder="Digite o seu email...">
            <input type="text" class="form-control" name="senha" id="" placeholder="Digite a  sua senha...">
            <input type="submit" class="btn btn-primary btn-lg" value="Cadastrar">
                <!--envia para login-->
               
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>







