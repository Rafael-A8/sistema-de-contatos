<?php
    
require "includes/conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $campos = [
        'nomex' => $nome,
        'email' => $email,
        'phone' => $phone,
    ];

    $sql = "INSERT INTO tb_usuarios(nome, email, phone) VALUES (:nomex, :email, :phone)";

    $query = $conexao->prepare($sql);

    $query->execute($campos);

header('location: index.php');