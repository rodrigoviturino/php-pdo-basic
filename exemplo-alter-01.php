<?php
// Iremos inserir Dados utilizando o PDO com PARAMETROS

$conexao = new PDO("mysql:dbname=dbphp7; host=localhost;", "root","");

$stmt = $conexao->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

// ESTES SÃO OS DADOS QUE O PARAMETRO VAI BUSCAR PARA INSERIR
$login = "rodrigo";
$password = '00';
$id = '6';

// ESTES SÃO OS DADOS DO PARAMETRO PARA FAZER A LIGAÇÃO/JUNÇÃO
                // CHAVE e VALOR
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID",$id);

$stmt->execute();
    echo 'Dados Alterados OK'; 

?>