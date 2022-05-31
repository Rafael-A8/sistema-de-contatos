<?php
    
require "includes/conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $categoria_id = $_POST['categoria_id'];
    

    $campos = [
        'nomex' => $nome,
        'email' => $email,
        'phone' => $phone,
        'cpf' => $cpf,
        'rg' => $rg,
        'categoria_id' => $categoria_id
        
    ];
    //INSERINDO DADOS AO BANCO DE DADOS ATRAVES DO FORMULARIO
    $sql = "INSERT INTO tb_usuarios(nome, email, phone, cpf, rg, categoria_id) VALUES (:nomex, :email, :phone, :cpf, :rg, :categoria_id)";

    $query = $conexao->prepare($sql);

    $query->execute($campos);

header('location: index.php');