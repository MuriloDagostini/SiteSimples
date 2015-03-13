<?php

function roteamentoAdmin(){

    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    $path = str_replace("/admin/","",$url['path']);
    $rotas = ['','inicio','paginas','usuarios','logout','editarPaginas','updatePagina'];

    if(in_array($path,$rotas)){
        if($path=='') {
            return "inicio";
        }
        return $path;
    }else{
        $location = "http://".$_SERVER['HTTP_HOST'];
        header("location: $location/404.php");
        return true;
    }
}