<?php
include('includes/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$id = $_POST['id'];

$campos = [
    'nome' => $nome,
    'email' => $email,
    'phone' => $phone,
    'id' => $id,
];

$sql = "UPDATE tb_usuarios SET nome=:nome, email=:email, phone=:phone WHERE id=:id";
$sqlUpdate = $conexao->prepare($sql);
$sqlUpdate->execute($campos);

header('location: index.php');
