<?php
include('includes/conexao.php');

$id = $_GET['id'];

$del = [
    'id' => $id,
];

$sqlDelete = "DELETE FROM tb_usuarios WHERE id=:id";
$resultDelete = $conexao->prepare($sqlDelete);
$resultDelete->execute($del);

header('location: index.php');
