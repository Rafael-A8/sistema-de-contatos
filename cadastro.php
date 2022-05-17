<?php

require 'conexao.php'


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de contatos</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<body>
    <nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/img1.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
					Sistema de Contatos
				</a>
			</div>
		</nav>

        <form action="#" class="form" method="POST">
        <div class="caixa">
                <div class="card-top">
                <img src="#" alt="">
                <h2 class="title">Ficha de Cadastro</h2>
                <p>Faça aqui o seu cadastro</p>
            </div>
            </br>
            <div class="caixa-grup">
                <label for="nome">Nome</label>
                <input type="text" name="email" placeholder="Digite seu nome" required>
            </div>
            </br>
            <div class="caixa-grup">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Digite seu E-mail" required>
            </div>
            </br>
            <div class="caixa-grup">
                <label for="phone">Telefone</label>
                <input type="number" name="phone" placeholder="Digite seu nome" required>
            </div>
            </br>
             <div class="caixa-grup btn">
                <button type="submit">CADASTRAR</button>
            </div>
        </div>
        </form>
        
    
</body>
</html>