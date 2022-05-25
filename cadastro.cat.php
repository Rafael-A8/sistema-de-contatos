<?php include('includes/header.php'); ?>

    <form action="insert.cat.php" class="form" method="POST">
        <div class="caixa">
            <div class="card-top">
                <h2>Categoria</h2>
            </div>
                <br>
            <div class="caixa-grup">
                <input type="text" name="nome" placeholder="Digite aqui a sua Categoria!!" required>
            </div>
            <br>
            <div class="caixa-grup btn">
                <button type="submit">INSERIR</button>
            </div>
        </div>
    </form>

<?php include('includes/footer.php'); ?>