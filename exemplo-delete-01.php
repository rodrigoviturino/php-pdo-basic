<?php

// Lembrando: Para excluir só precisar pegar algo que seja UNICO da LINHA DA TABELA, no caso ID

$conexao = new PDO("mysql:dbname=dbphp7; host=localhost;", "root","");

$stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

// ESTES SÃO OS DADOS QUE O PARAMETRO VAI BUSCAR PARA DELETAR
$id = '6';

// ESTES SÃO OS DADOS DO PARAMETRO PARA FAZER A LIGAÇÃO/JUNÇÃO
$stmt->bindParam(":ID",$id);

$stmt->execute();
    echo 'Dados DELETE OK'; 

?>