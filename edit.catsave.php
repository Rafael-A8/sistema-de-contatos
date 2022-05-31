<?php

include('includes/conexao.php');

    $id = $_POST['id'];
    $cat_nome = $_POST['cat_nome'];

$alt = [
    'id' => $id,
    'cat_nome' => $cat_nome

];

$sql = "UPDATE tb_categorias SET cat_nome=:cat_nome WHERE id=:id";
$sqlAlter = $conexao->prepare($sql);
$sqlAlter->execute($alt);

header('location: categoria.php');
