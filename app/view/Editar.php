<?php

require_once __DIR__."/../model/CrudUsuarioVoluntario.php";
$crud = new CrudUsuarioVoluntario();
$user =$_GET['user'];


$usuario = $crud->getUsuarioVoluntario($user);

require_once "cabecalho.php";
?>

    <!--Barra de busca-->
    <br>
    <br>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Biografia</th>
            <th>Nome</th>
            <th>Imagem</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="../../imagens/<?= $usuario->imagem ?>" width="50px" height="50px"></td>
                <td><a href=" ">Editar</a> |
                    <a href=" "> Excluir</a></td>
            </tr>

        </tbody>
    </table>

<?php require_once "rodape.php";?>
<?php // foreach ($listaProdutos as $produto): ?>

