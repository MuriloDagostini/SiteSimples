<?php

require_once "conexao.php";

echo "### Executando Fixture ###\n";

$conexao = conexaoDB();

echo "Removendo tabela";
$conexao->query("DROP TABLE IF EXISTS paginas;");
echo " - OK\n";

echo "Criando tabela";
$conexao->query("CREATE TABLE paginas (
  id INT NOT NULL AUTO_INCREMENT,
  url VARCHAR(60) CHARACTER SET 'utf8' NULL,
  conteudo TEXT CHARACTER SET 'utf8' NULL,
  PRIMARY KEY (id));");
echo " - OK\n";

echo "Inserindo dados";

    $dados['url'] = ["home","empresa","produtos","servicos","contato"];
    $dados['conteudo'] = [
        file_get_contents ("conteudo_fixture/home.php"),
        file_get_contents ("conteudo_fixture/empresa.php"),
        file_get_contents ("conteudo_fixture/produtos.php"),
        file_get_contents ("conteudo_fixture/servicos.php"),
        file_get_contents ("conteudo_fixture/contato.php")
    ];

    $i = 0;
    foreach ($dados['url'] as $pagina){

        $stmt = $conexao->prepare("INSERT INTO paginas (url,conteudo) VALUE (:url,:conteudo);");
        $stmt->bindParam(":url", $pagina);
        $stmt->bindParam(":conteudo", $dados['conteudo'][$i]);
        $stmt->execute();
        $i++;

    }
echo " - OK\n";


