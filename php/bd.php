
<?php
session_start();


if ($_GET['gt'] == "caduser"){
    Cadastrarcli();
}elseif ($_GET['gt'] == "cadpais"){
    Cadastrarpais();
}elseif ($_GET['gt'] == "login"){
    login();
}elseif ($GET['gt'] == "alterar") {
    atualizar();

}



function consulta(){ 
        $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');
    $sql = $pdo->prepare("SELECT * FROM `cadpais`");
    $sql->execute(array());
    $dados = $sql->fetchALL(PDO::FETCH_ASSOC);
    return $dados;
}

function Cadastrarcli() {
    
    $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');


    $sql = $pdo->prepare("INSERT INTO `cadcli`
    VALUES (null,?,?,?)");

    
    $sql->execute( array( $_POST['nome'],
                          $_POST['email'],
                          sha1($_POST['senha']), 

    ) 
    );
    header("Location: login.php");
}
    function Cadastrarpais() {
    $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');


    $sql = $pdo->prepare("INSERT INTO `cadpais`
    VALUES (null,?,?,?,?)");

    
    $sql->execute( array( $_POST['pais'],
                          $_POST['continente'],
                          $_POST['regiao_continente'],
                          $_POST['evento'], 

    ) 
    );
    header("Location: ../index.html");
}  

function atualizar(){
    $alteração = $_POST['alterar'];

     $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');
     $sql = $pdo->prepare("UPDATE `usuarios` SET
                                            nome=?,
                                            rua=?,
                                            WHERE id=?");




    $sql->execute(array($alteração['nome'],
                        $alteração['rua'],
                        
));

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





?>