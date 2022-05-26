<?php

include('includes/conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];

$alt = [
    'id' => $id,
    'nome' => $nome

];

$sql = "UPDATE tb_categorias SET nome=:nome WHERE id=:id";
$sqlAlter = $conexao->prepare($sql);
$sqlAlter->execute($alt);

header('location: categoria.php');
