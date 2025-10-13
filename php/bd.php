


<?php
session_start();
function Cadastrarcli() {
    
    $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');


    $sql = $pdo->prepare("INSERT INTO `cadcli`
    VALUES (null,?,?,?)");

    
    $sql->execute( array( $_POST['nome'],
                          $_POST['email'],
                          sha1($_POST['senha']), 

    ) 
    );
}
<<<<<<< HEAD
    
    $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');


    $sql = $pdo->prepare("INSERT INTO `cadpais`
    VALUES (null,?,?,?,?)");

    
    $sql->execute( array( $_POST['pais'],
                          $_POST['continente'],
                          $_POST['regiao_continente'],
                          $_POST['evento'], 

    ) 
    );
=======
function login(){
    $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');

    $sql = $pdo -> prepare("SELECT * FROM `cadcli` WHERE email=? AND senha=?");

    $sql->execute(array($_POST['email'], sha1($_POST['senha'])));

    $dados = $sql ->fetchALL(PDO::FETCH_ASSOC);
    print_r($dados);
  
    if (!empty($dados)) {
        $usuario = $dados[0];
        $_SESSION['nome'] = $usuario['nome'];
        header("Location: ../index.html");
    } else {
        header("Location: login.php");

    }

}


>>>>>>> 0f95f3af3a47d286055b24117c5d1b0729449461
CadastrarBanco()



?>