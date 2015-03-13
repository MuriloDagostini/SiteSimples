<?php

include_once ("conexao.php");
include_once ("rotas.php");
include_once("msg.php");

$url = roteamento();

$conexao = conexaoDB();

//conteúdo da página
$sql = "select conteudo from paginas where url = :url";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("url",$url);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

//inicio html
include_once ("head.php");

include_once ("menu.php");

echo $result['conteudo'];

include_once ("footer.php");

?>

