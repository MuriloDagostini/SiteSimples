<?php

include ("conexao.php");
include ("rotas.php");

$url = roteamento();

$conexao = conexaoDB();

//conteúdo da página
$sql = "select conteudo from paginas where url = :url";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("url",$url);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

//inicio html
include ("head.php");

include ("menu.php");

echo $result['conteudo'];

include ("footer.php");

?>

