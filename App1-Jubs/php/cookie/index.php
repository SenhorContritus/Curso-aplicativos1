<?php
    session_start();
    if(isset($_SESSION['sessaoConectado'])){
        $sessaoConectado = $_SESSION['sessaoConectado'];
        $login = $_SESSION['sessaoLogin'];
    }
    else{
        $sessaoConectado = false;
    }

    if($sessaoConectado){
        $idSessao = session_id();
        echo"<a href='cookie/logout.php'>Sair<a>
        <bre>Olá,  $login (id sessão: <b> $idSessao</b>
        <br>
        <a href ='cookie/produtos.php'>Produtos</a>
        <a href ='cookie/usuarios.php>Usuários</a>";
    }
    else{
        echo"<a href='cookie/login.php'>Login</a>";
    }
    echo"<hr>";

?>