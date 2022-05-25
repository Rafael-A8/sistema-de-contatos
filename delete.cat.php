<?php
include('includes/conexao.php');

    $id = $_GET['id'];

$del = [

    'id' => $id

];

$sqlDel = "DELETE FROM tb_categorias WHERE id=:id";
$resultDel = $conexao->prepare($sqlDel);
$resultDel->execute($del);

header('location: categoria.php');