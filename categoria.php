<?php
include('includes/conexao.php');
//CONSULTANDO OU SELECIONANDO INFORMAÇÃO NO BANCO DE DADOS NA TABELA 
$sql = $conexao->query("SELECT * FROM tb_categorias ORDER BY id DESC");
$result = $sql->fetchAll();

?>
<?php include('includes/header.php') ?>


<div class="row">
    <div class="col">
        <h4>LISTA DE CATEGORIAS</h4>
        <table class="table table-borderless table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Categorias</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['cat_nome'] ?></td>
                        <td>

                            <a class='btn btn-sm btn-primary' href='edit.cat.php?id=<?php echo $row['id'] ?>'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                                </svg>
                            </a>

                            <a class='btn btn-sm btn-danger' href='delete.cat.php?id=<?php echo $row['id'] ?>'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z' />
                                </svg>
                            </a>

                        </td>
                    </tr>
                <?php
                }
                ?>
           
            </tbody>
        </table>

<?php include('includes/footer.php'); ?>