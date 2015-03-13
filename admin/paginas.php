<?php
    $conexao = conexaoDB();

    $sql = "SELECT url FROM paginas where url <> 'login' and url <> 'contato' ";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $msg = "Páginas disponíveis:";
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="jumbotron">
    <div class="container">
        <h2><?=$msg?></h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?
            if ($result) {
                foreach ($result as $value) {
                    ?>
                    <h3><a href="editarPaginas?pag=<?= $value['url'] ?>"><?= ucfirst($value['url']) ?></a></h3>

                <?
                }
            }
            ?>
        </div>
    </div>