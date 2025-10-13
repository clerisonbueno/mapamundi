<?php
session_start();
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
        <h1>Cadastro</h1>
        <p>Preencha todas as informações:</p>
        <form action="bd.php" method="post">
            <!-- Criação da primeira linha -->
            <div class="column gap-3">
                <!-- criação da primeira coluna ocupando todo o espaço = 12 -->
                <div class="col-md-4">
                    <input type="text" class="form-control" name="nome" id="" placeholder="Digite o nome...">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="email" id="" placeholder="Digite o email...">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="senha" id="" placeholder="Digite a senha...">
                </div>
            </div>

            <div class="row mt-3 text-center">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-lg" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>







