<?php

include('includes/conexao.php');

    $cat_nome = $_POST['cat_nome'];

$inserir = [

    'cat_nome' => $cat_nome

];

    $sql ="INSERT INTO tb_categorias (cat_nome) VALUE (:cat_nome)";
    $result = $conexao->prepare($sql);

    $result->execute($inserir);

header('location: categoria.php');


