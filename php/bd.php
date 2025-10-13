


<?php
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
CadastrarBanco()
?>