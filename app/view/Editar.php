<?php

$_GET['item'] = 3;

    require_once __DIR__ . "/../model/CrudVoluntario.php";
    require_once "cabecalho.php";

    $crud = new CrudVoluntario();

    session_start();

    $existe = isset($_SESSION['usuario_online']);

    if ($existe == false){
        header("location: login.php");
    }

    $cod     = $_GET['user'];
    $usuario = $crud->getVoluntario($cod);

//    print_r($produto);
//    exit();
?>

    <div class="ui middle aligned center aligned grid">
    <div class="four wide column">
        <br>
        <h2 class="ui small circular image">
            <a href="pag_inicial_logado.php"><img src="../../imagens/<?= $usuario->imagem?>" class="image"></a>
        </h2>
        <form class="ui large form" method="post" action="../controllers/controlador.php?acao=editar&&user=<?= $usuario->cod_user?>">
            <div class="field">
                <input type="text" name="nome" placeholder="Nome" value="<?= $usuario->nome ?>"  placeholder="<?= $usuario->nome ?>">
            </div>
            <div class="field">
                <input type="password" name="senha" placeholder="Senha" value="<?= $usuario->senha ?>"  placeholder="<?= $usuario->senha?>">
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="E-mail" value="<?= $usuario->email ?>"  placeholder="<?= $usuario->email?>">
            </div>
            <div class="field">
                <input type="file" name="imagem" placeholder="Imagem" >
            </div>
            <div class="field">
                <input type="text" name="bio" placeholder="Biografia" value="<?= $usuario->bio ?>" placeholder="<?= $usuario->bio?>">
            </div>
            <div class="field">
                <input type="text" name="site" placeholder="Site" value="<?= $usuario->site ?>" placeholder="<?= $usuario->bio?>">
                <input type="hidden" name="codigo" value="<?= $usuario->cod_user ?>">
            </div>
            <button type="submit" class="ui fluid large blue submit button" >Alterar</button>
            <br>
        </form>
        <form class="ui large form" method="post" action="../controllers/controlador.php?acao=excluir&&user=<?= $usuario->cod_user?>">
            <button class="ui fluid large red submit button" >Excluir Conta</button>
            <br>
    </div>
    </div>


<?php require_once "rodape.php";?>
