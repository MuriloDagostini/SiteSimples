<?php

include "conexao.php";

$conexao = conexaoDB();

$busca = filter_input(INPUT_POST, "busca");
$sql = "select url from paginas where conteudo like :busca ";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("busca", "%" . $busca . "%");
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $msg = "Páginas encontradas:";
} else {
    $msg = "Nenhuma página foi encontrada";
}
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//inicio html
include("head.php");

include("menu.php");

?>

<div class="jumbotron">
    <div class="container">
        <h3><?=$msg?></h3>
    </div>
</div>
<div class="container">
    <div class="row">
            <div class="col-md-4">
                <?
                foreach ($result as $value) {
                ?>
                   <h3><a href="/<?=$value['url']?>"><?=ucfirst($value['url'])?></a></h3>

                <?
                }
                ?>
            </div>
    </div>
<?
    include ("footer.php");
?>