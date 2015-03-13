<?php
    $code = filter_input(INPUT_GET,"msg");
    switch($code){
        case 01:
            echo "<script>alert('Dados de autenticação inválidos!')</script>";
        break;

        case 02:
            echo "<script>alert('É preciso estar logado para ter acesso a área restrita!')</script>";
        break;

        case 03:
            echo "<script>alert('Página atualizada com sucesso!')</script>";
        break;

        case 04:
            echo "<script>alert('Erro ao atualizar página!')</script>";
        break;
    }
