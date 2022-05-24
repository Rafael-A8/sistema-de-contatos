
<?php
include('includes/conexao.php');

if(!empty($_GET['id'])) 
{

    $id = $_GET['id'];

    $sqlSelect = $conexao->prepare("SELECT * FROM tb_usuarios WHERE id=:id");
    $sqlSelect->execute(['id' =>$id]);
    $result = $sqlSelect->fetch(PDO::FETCH_ASSOC);

}

?>

<?php  include('includes/header.php'); ?>

        <form action="editsave.php" class="form" method="POST">
            <div class="caixa">
                <div class="card-top">
                    <img src="#" alt="">
                    <h2 class="title">Alterações</h2>
                    <p>Faça aqui Suas Alteraçoes</p>
                </div>
                </br>
                <div class="caixa-grup">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" value="<?php echo $result['nome']?>" placeholder="Digite seu nome" required>
                </div>
                </br>
                <div class="caixa-grup">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" value="<?php echo $result['email']?>" placeholder="Digite seu E-mail" required>
                </div>
                </br>
                <div class="caixa-grup">
                    <label for="phone">Telefone</label>
                    <input type="number" name="phone" value="<?php echo $result['phone']?>" placeholder="Digite seu nome" required>
                </div>
                </br>

                <div class="caixa-grup btn">
                    <button type="submit">ATUALIZAR</button>
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
            </div>
        </form>

<?php  include('includes/footer.php'); ?>