<?php

$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conexao->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); 

// Percorrer Linha por Linha
foreach ($results as $row) {
           //Resultado  //Coluna //Valor do campo da coluna
    foreach ($row as $key => $value) {
        echo "<strong>".$key.":</strong>".$value."<br>";
    }

    echo "------------------------------- <br>";
}

?>
