<?php
    session_start();
    include_once "../conexao.php";
    include_once ("rotas.php");
    include_once("../msg.php");
    include_once ("restrito.php");

    $path = roteamentoAdmin();

    //inicio html
    include_once ("head.php");

    include_once ("menu.php");

    include_once ($path.".php");

    include_once ("footer.php");