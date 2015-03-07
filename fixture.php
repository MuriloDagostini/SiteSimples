<?php

require_once "conexao.php";

echo "### Executando Fixture ###\n";

$conexao = conexaoDB();

echo "Removendo tabela";
$conexao->query("DROP TABLE IF EXISTS teste;");
echo " - OK\n";

echo "Criando tabela";
$conexao->query("CREATE TABLE teste (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) CHARACTER SET 'utf8' NULL,
  PRIMARY KEY (id));");
echo " - OK\n";

echo "Inserindo dados";
for($x = 0; $x <= 9; $x++){

    $nome = "Teste {$x}";
    $stmt = $conexao->prepare("INSERT INTO teste (nome) VALUE (:nome);");
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

}
echo " - OK\n";


