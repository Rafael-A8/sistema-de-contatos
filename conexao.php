<?php

//banco de dados

    //atributos
    $host = 'localhost';
    $dbname = 'db_contatos';
    $user = 'root';
    $pass = '123';
    
    //metodo de conexao pdo
    
        try {

            $conexao = new PDO("mysql:dbname=".$dbname."; host=".$host, $user, $pass);
                echo 'conectado';
            
        //para detectar erros
        } catch (PDOException $e) {
            echo '<p>' .$e->getMessage(). '</p>';
        }

