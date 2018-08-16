<?php

$_GET['item'] = 3;

require_once __DIR__ . "/../model/CrudVoluntario.php";
$crud = new CrudVoluntario();
$user =$_GET['user'];


$usuario = $crud->getVoluntario($user);

require_once "cabecalho.php";
?>
    <div class="ui middle aligned center aligned grid">
    <div class="four wide column">
        <br>
        <h2 class="ui small circular image">
            <a href="../controllers/controlador.php?acao=editar"><img src="../../imagens/logo.jpg" class="image"></a>
        </h2>
        <form class="ui large form" method="post" action="../controllers/controlador.php?acao=editarVol">
            <div class="field">
                <input type="text" name="nome" placeholder="Nome" value="<?= $usuario->nome ?>"  placeholder="<?= $usuario->nome ?>">
            </div>
            <div class="field">
                <input type="password" name="user" placeholder="Senha" value="<?= $usuario->senha ?>"  placeholder="<?= $usuario->senha?>">
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="E-mail" value="<?= $usuario->email ?>"  placeholder="<?= $usuario->email?>">
            </div>
            <div class="field">
                <input type="file" name="imagem" placeholder="Imagem" value="<?= $usuario->imagem ?>" placeholder="<?= $usuario->imagem?>">
            </div>
            <div class="field">
                <input type="text" name="biografia" placeholder="Biografia" value="<?= $usuario->bio ?>" placeholder="<?= $usuario->bio?>">
            </div>
            <button class="ui fluid large blue submit button" >Alterar</button>
            <br>
        </form>
        <form class="ui large form" method="post" action="procura.php">
            <button class="ui fluid large red submit button" >Excluir Conta</button>
            <br>
    </div>
    </div>


<?php require_once "rodape.php";?>
