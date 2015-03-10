<?php
//inicio html
include("head.php");

include("menu.php");
?>

<div class="jumbotron">
    <div class="container">
        <h3>Entre em contato conosco através do formulário abaixo:</h3>
    </div>
</div>
<div class="container">
    <div class="row">
            <div class="col-md-12">
                <? if(filter_input(INPUT_POST,'nome') && filter_input(INPUT_POST,'nome')!=""){?>
                <div class="col-md-6">
                    <h3>Mensagem enviada com sucesso!</h3>
                    <p><b>abaixo seguem os dados que você enviou:</b></p>
                    <p><b>Nome:</b> <?=filter_input(INPUT_POST,'nome')?></p>
                    <p><b>Email:</b> <?=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL)?></p>
                    <p><b>Assunto:</b> <?=filter_input(INPUT_POST,'assunto')?></p>
                    <p><b>Mensagem:</b> <?=filter_input(INPUT_POST,'mensagem')?></p>
                </div>
                <?}?>
            </div>
    </div>
<?
include ("footer.php");
?>