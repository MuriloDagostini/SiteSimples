<?php
    function login($email,$senha){

        include_once "conexao.php";

        $conexao = conexaoDB();

        $sql = "select * from usuarios where email = :email";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue("email",$email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($senha,$result['senha'])){
                session_start();
                $_SESSION['auth'] = true;
                $_SESSION['usuario'] = $result['nome'];
                header("location: /admin/");
            }else{
                header("location: /login?msg=01");
            }

        } else {
            header("location: /login?msg=01");
        }

    }