<?php

// Lembrando: Para excluir só precisar pegar algo que seja UNICO da LINHA DA TABELA, no caso ID

$conexao = new PDO("mysql:dbname=dbphp7; host=localhost;", "root","");

// INICIANDO TRANSAÇÃO (Este é para o ROLLBACK ou COMMIT ter efeito)
$conexao->beginTransaction();

// Está INTERROGAÇÃO está ligada ao ARRAY do EXECUTE(), cada INTERROGAÇÃO é UM INDICE DO ARRAY
$stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

// ESTES SÃO OS DADOS QUE O PARAMETRO VAI BUSCAR PARA DELETAR
$id = '8';

$stmt->execute(array($id));

//$conexao->rollBack();
$conexao->commit();

    echo 'Dados DELETADO OK'; 
?>