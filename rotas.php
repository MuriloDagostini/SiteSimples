<?php

function roteamento(){

    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    $path = ltrim($url['path'],"/");

    $rotas = ['','home','empresa','produtos','servicos','contato'];

    if(in_array($path,$rotas)){
        if($path==''){
            return "home.php";
        }else{
            if (is_file($path.".php")) {
                return $path . ".php";
            }else{
                return "404.php";
            }
        }
    }else{
        return "404.php";
    }
}