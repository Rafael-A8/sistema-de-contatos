<?php




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
        <br>
        <div class="container pagina">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="cadastro.php">NOVO CADASTRO</a></li>
						<li class="list-group-item"><a href="#">TODOS OS CADASTROS</a></li>
					</ul>
				</div>
            </div>
            </br>
            <div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>TODOS OS CONTATOS</h4>
								<hr />
								<!--colocar um forech aqui para assim puxar do banco de dados as informacoes-->
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Favio Davel (E-Email) (Telefone)</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i><!--botao de remover-->
										<i class="fas fa-edit fa-lg text-info"></i><!--Atualizar-->
										
									</div>
								</div>

								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Rafael Alvarino (E-Email) (Telefone)</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i> <!--botao de remover-->
										<i class="fas fa-edit fa-lg text-info"></i><!--Atualizar-->
										
									</div>
								</div>
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Rafael Alvarino (E-Email) (Telefone)</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i> <!--botao de remover-->
										<i class="fas fa-edit fa-lg text-info"></i><!--Atualizar-->
										
									</div>
								</div>
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Rafael Alvarino (E-Email) (Telefone)</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i> <!--botao de remover-->
										<i class="fas fa-edit fa-lg text-info"></i><!--Atualizar-->
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



             
</body>
</html>