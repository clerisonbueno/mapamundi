<?php
    session_start();

    session_destroy();
    //$_SESSION['nome'] = "";

    header("Location: ../index.php");

?>