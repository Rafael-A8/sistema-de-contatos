<?php
include('includes/conexao.php');

    $id = $_GET['id'];

    $sqlalt = $conexao->prepare("SELECT * FROM tb_categorias WHERE id=:id");
    $sqlalt->execute(['id' =>$id]);
    $result = $sqlalt->fetch(PDO::FETCH_ASSOC);

?>

<?php  include('includes/header.php'); ?>

    <form action="edit.catsave.php" method="POST" class="form" >
        <div class="caixa">
            <h2><strong>Faça aqui suas Alterações da Categoria</strong></h2>
                <br>
            <div class="caixa-grup">               
                <input type="text" name="cat_nome" value="<?php echo $result['cat_nome']?>" placeholder="Digite sua Alteração" required>
            </div>
            <div class="caixa-grup btn">
                <button type="submit">ATUALIZAR</button>
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
    </form>

<?php  include('includes/footer.php'); ?>