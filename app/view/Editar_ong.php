<?php

    require_once __DIR__ . "/../model/CrudOng.php";
    require_once "cabecalho.php";

    $crud = new CrudOng();

    session_start();

    $existe = isset($_SESSION['usuario_online']);

    if ($existe == false){
        header("location: login.php");
    }

    $cod     = $_GET['user'];
    $ong = $crud->getOngByVol($cod);

//    print_r($produto);
//    exit();
?>
<a href="pag_inicial_logado.php?user=<?=$cod?>" class="item">Página Inicial</a>
<a href="procura.php?user=<?=$cod?>" class="item">Procurar</a>
<a href="../controllers/controlador.php?acao=entrarOng&&user=<?=$cod?>" class="item">Sua ONG</a>
<a href="perfil.php?user=<?=$cod?>" class="active item">Perfil</a>
<a class="item" href="../controllers/verificaUser.php?acao=sair">Sair</a>
</div>
</div>
</div>
    <div class="ui middle aligned center aligned grid">
    <div class="four wide column">
        <br>
        <h2 class="ui small circular image">
            <a href="pag_inicial_logado.php"><img src="../../imagens/<?= $ong->imagem?>" class="image"></a>
        </h2>
        <form class="ui large form" method="post" action="../controllers/controlador.php?acao=editarOng&&user=<?= $cod?>">
            <div class="field">
                <input type="text" name="nome_ong" placeholder="Nome da ONG" value="<?= $ong->nome_ong ?>"  placeholder="<?= $ong->nome_ong ?>">
            </div>
            <div class="field">
                <input type="text" name="nome_resp" placeholder="Nome do responsável" value="<?= $ong->bio ?>"  placeholder="<?= $ong->bio?>">
            </div>
            <div class="field">
                <input type="file" name="imagem" placeholder="Imagem" >
            </div><!-- $email-->
            <div class="field">
                <input type="text" name="bio" placeholder="Biografia" value="<?= $ong->bio ?>" placeholder="<?= $ong->bio?>">
            </div>
            <div class="field">
                <input type="number" name="telefone" placeholder="Telefone" value="<?= $ong->telefone ?>" placeholder="<?= $ong->telefone?>">
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="Email" value="<?= $ong->email ?>" placeholder="<?= $ong->email?>">
            </div>
            <div class="field">
                <input type="text" name="causas" placeholder="Causas da ONG" value="<?= $ong->causas ?>" placeholder="<?= $ong->causas?>">
                <input type="hidden" name="codigo" value="<?= $ong->cod_user ?>">
            </div>
            <button type="submit" class="ui fluid large blue submit button" >Alterar</button>
            <br>
        </form>
        <form class="ui large form" method="post" action="../controllers/controlador.php?acao=excluirOng&&cod=<?= $ong->cod_user?>">
            <button class="ui fluid large red submit button" >Excluir Conta</button>
            <br>
    </div>
    </div>


<?php require_once "rodape.php";?>
