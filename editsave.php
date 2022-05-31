<?php
include('includes/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$id = $_POST['id'];
$categoria_id = $_POST['categoria_id'];

$campos = [
    'nome' => $nome,
    'email' => $email,
    'phone' => $phone,
    'cpf' => $cpf,
    'rg' => $rg,
    'id' => $id,
    'categoria_id' => $categoria_id
];

$sql = "UPDATE tb_usuarios SET nome=:nome, email=:email, phone=:phone, cpf=:cpf, rg=:rg, categoria_id=:categoria_id WHERE id=:id";
$sqlUpdate = $conexao->prepare($sql);
$sqlUpdate->execute($campos);

header('location: index.php');
