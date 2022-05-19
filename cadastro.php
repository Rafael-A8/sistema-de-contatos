<?php  include('includes/header.php'); ?>

        <form action="controller.php" class="form" method="POST">
            <div class="caixa">
                <div class="card-top">
                    <img src="#" alt="">
                    <h2 class="title">Ficha de Cadastro</h2>
                    <p>Faça aqui o seu cadastro</p>
                </div>
                </br>
                <div class="caixa-grup">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Digite seu nome" required>
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

<?php  include('includes/footer.php'); ?>