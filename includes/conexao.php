<?php
//banco de dados PDO COM OBJ

    //atributos
   $host = 'localhost';
   $dbname = 'db_contatos';
   $user = 'root';
   $pass = '123';

    //metodo de conexao pdo
    
        try {

            $conexao = new PDO(
                "mysql:host=$host;dbname=$dbname", 
                "$user", 
                "$pass"
            );

        //para detectar erros
        } catch (PDOException $e) {
            echo '<p>' .$e->getMessage(). '</p>';
        }