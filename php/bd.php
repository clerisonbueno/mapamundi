<?php
  session_start();
function CadastrarBanco() {
    
    $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');


    $sql = $pdo->prepare("INSERT INTO `cadcli`
    VALUES (null,?,?,?)");

    
    $sql->execute( array( $_POST['nome'],
                          $_POST['email'],
                          sha1($_POST['senha']), 

    ) 
    );
}
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


CadastrarBanco()
?>