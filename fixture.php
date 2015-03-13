<?php

require_once "conexao.php";

echo "Dados de acesso a área restrita: <br>";
echo "url: <a href='login'>/login</a> <br>";
echo "email: admin@sitesimples.com.br <br>";
echo "senha: root <br><br>";
echo "### Executando Fixture ### <br>";

$conexao = conexaoDB();

echo "Removendo tabela paginas <br>";
$conexao->query("DROP TABLE IF EXISTS paginas;");
echo " - OK <br>";

echo "Criando tabela paginas <br>";
$conexao->query("CREATE TABLE paginas (
  id INT NOT NULL AUTO_INCREMENT,
  url VARCHAR(60) CHARACTER SET 'utf8' NULL,
  conteudo TEXT CHARACTER SET 'utf8' NULL,
  PRIMARY KEY (id));");
echo " - OK <br>";

echo "Inserindo dados paginas <br>";

    $dados['url'] = ["home","empresa","produtos","servicos","contato","login"];
    $dados['conteudo'] = [
        file_get_contents ("conteudo_fixture/home.php"),
        file_get_contents ("conteudo_fixture/empresa.php"),
        file_get_contents ("conteudo_fixture/produtos.php"),
        file_get_contents ("conteudo_fixture/servicos.php"),
        file_get_contents ("conteudo_fixture/contato.php"),
        file_get_contents ("conteudo_fixture/login.php")
    ];

    $i = 0;
    foreach ($dados['url'] as $pagina){

        $stmt = $conexao->prepare("INSERT INTO paginas (url,conteudo) VALUE (:url,:conteudo);");
        $stmt->bindParam(":url", $pagina);
        $stmt->bindParam(":conteudo", $dados['conteudo'][$i]);
        $stmt->execute();
        $i++;

    }
echo " - OK <br>";


echo "Removendo tabela usuarios <br>";
$conexao->query("DROP TABLE IF EXISTS usuarios;");
echo " - OK <br>";


echo "Criando tabela usuarios<br>";
$conexao->query("CREATE TABLE usuarios (
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  senha VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  nome VARCHAR(60) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (id));");
echo " - OK <br>";

echo "Inserindo dados usuarios <br>";
$hash = '$2y$10$r0yzIOQqcbnDhHPrCcykneFCV3F7o.cVAZkHdmXwRwFV/ZTiwz9Ke';
$stmt = $conexao->prepare("INSERT INTO usuarios (email,senha,nome) VALUE (
  'admin@sitesimples.com.br',
  '$hash',
  'John Doe'
  );");
echo $stmt->queryString;
$stmt->execute();
echo " - OK <br>";

