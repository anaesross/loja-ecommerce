<?php
    //chamar a sessão que está em aberto
    session_start();
    //destruir a sessão que está logada - logout
    session_destroy();
    // redirecionar após o logout para a página index.
    header('location:index.php');

?>