<?php

include('includes/conexao.php');

    $nome = $_POST['nome'];

$inserir = [

    'nome' => $nome

];

    $sql ="INSERT INTO tb_categorias (nome) VALUE (:nome)";
    $result = $conexao->prepare($sql);

    $result->execute($inserir);

header('location: categoria.php');


