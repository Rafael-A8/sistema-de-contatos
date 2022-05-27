<?php

include('includes/conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['cat_nome'];

$alt = [
    'id' => $id,
    'cat_nome' => $nome

];

$sql = "UPDATE tb_categorias SET cat_nome=:nome WHERE id=:id";
$sqlAlter = $conexao->prepare($sql);
$sqlAlter->execute($alt);

header('location: categoria.php');
