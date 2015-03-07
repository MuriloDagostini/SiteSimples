<?php

function roteamento(){

    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    $path = ltrim($url['path'],"/");

    $rotas = ['','home','empresa','produtos','servicos','contato','busca'];

    if(in_array($path,$rotas)){
        if($path=='') {
            return "home";
        }
        return $path;
    }else{
        return header("location: 404.php");
    }
}