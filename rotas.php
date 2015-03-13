<?php

function roteamento(){

    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    $path = ltrim($url['path'],"/");

    $rotas = ['','home','empresa','produtos','servicos','contato','busca','login','loginPost'];

    if(in_array($path,$rotas)){
        if($path=='') {
            return "home";
        }
        if($path=="loginPost"){
            #logica de login
           if(isset($_POST["email"])){
              include_once "autentica.php";
              $email = filter_input(INPUT_POST,"email");
              $senha = filter_input(INPUT_POST,"senha");
              login($email,$senha);
           }
        }

        return $path;
    }else{
        $location = "http://".$_SERVER['HTTP_HOST'];
        header("location: $location/404.php");
        return true;
    }
}