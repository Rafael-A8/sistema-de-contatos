<?php include('includes/header.php') ?>

<div class="row">
    <div class="col">
        <h4>TODOS OS CONTATOS</h4>
        <hr />
        <!--colocar um forech aqui para assim puxar do banco de dados as informacoes-->
        <div class="row mb-3 d-flex align-items-center tarefa">
            <div class="col-sm-9">Favio Davel (E-Email) (Telefone)</div>
            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                <i class="fas fa-trash-alt fa-lg text-danger"></i>
                <!--botao de remover-->
                <i class="fas fa-edit fa-lg text-info"></i>
                <!--Atualizar-->
            </div>
        </div>

        <div class="row mb-3 d-flex align-items-center tarefa">
            <div class="col-sm-9">Rafael Alvarino (E-Email) (Telefone)</div>
            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                <i class="fas fa-trash-alt fa-lg text-danger"></i>
                <!--botao de remover-->
                <i class="fas fa-edit fa-lg text-info"></i>
                <!--Atualizar-->
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>