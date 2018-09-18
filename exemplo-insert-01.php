<?php
// Iremos inserir Dados utilizando o PDO com PARAMETROS

$conexao = new PDO("mysql:dbname=dbphp7; host=localhost;", "root","");

$stmt = $conexao->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUE (:LOGIN, :PASSWORD)");

// ESTES SÃO OS DADOS QUE O PARAMETRO VAI BUSCAR PARA INSERIR
$login = "rodrigo";
$password = '00';

// ESTES SÃO OS DADOS DO PARAMETRO PARA FAZER A LIGAÇÃO/JUNÇÃO
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();
    echo 'Dados Inseridos OK'; 

?>