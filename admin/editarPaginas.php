<?php
    $conexao = conexaoDB();

    $url = filter_input(INPUT_GET,"pag");

    $sql = "SELECT conteudo FROM paginas where url = :url ";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue("url",$url);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<script src="ckeditor/ckeditor.js"></script>
<div class="jumbotron">
    <div class="container">
        <h2>Editando Página: <?=ucfirst($url)?></h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="updatePagina" method="post" name="form">
                <input type="hidden" name="url" value="<?=$url?>"/>
                <label for="conteudo">Conteúdo:</label><br/>
                <textarea name="conteudo" id="conteudo" style="width:100%;height:250px;">
                    <?=$result['conteudo']?>
                </textarea>
                <script>
                    CKEDITOR.replace(
                        'conteudo',
                        config.allowedContent = true;
                    );
                </script>
                <br/>
                <input type="submit" style="padding:10px 30px" value="Atualizar" />
            </form>
        </div>
    </div>

