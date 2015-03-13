<?php
    $conexao = conexaoDB();

    $url = filter_input(INPUT_POST,"url");
    $conteudo = filter_input(INPUT_POST,"conteudo");

    $sql = "UPDATE paginas SET conteudo = :conteudo where url = :url ";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue("url",$url);
    $stmt->bindValue("conteudo",$conteudo);

    if($stmt->execute()){
        header("location: paginas?msg=03");
    }else{
        header("location: paginas?msg=04");
    }

?>


