<?php

include_once "conexao.php";

$conexao = conexaoDB();

$busca = filter_input(INPUT_POST, "busca");
$sql = "SELECT url FROM paginas WHERE conteudo LIKE :busca ";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("busca", "%" . $busca . "%");
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $msg = "Páginas encontradas:";
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $msg = "Nenhuma página foi encontrada";
    $result = false;
}

//inicio html
include("head.php");

include("menu.php");

?>

    <div class="jumbotron">
        <div class="container">
            <h3><?= $msg ?></h3>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?
            if ($result) {
                foreach ($result as $value) {
                ?>
                    <h3><a href="/<?= $value['url'] ?>"><?= ucfirst($value['url']) ?></a></h3>

                <?
                }
            }
            ?>
        </div>
    </div>
<?
include("footer.php");
?>