<?php

include ("rotas.php");
$url = roteamento();

//inicio html
include ("head.php");

include ("menu.php");

//conteúdo da página
require_once $url;

include ("footer.php");

?>

