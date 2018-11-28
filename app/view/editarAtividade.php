<?php

require_once __DIR__ . "/../model/CrudOng.php";
require_once "cabecalho.php";
require_once "../model/CrudAtividade.php";


$crud     = new CrudOng();
$crudAtiv = new CrudAtividade();

session_start();

$existe = isset($_SESSION['usuario_online']);

if ($existe == false){
    header("location: login.php");
}
$codAtiv = $_GET['ativ'];
$cod     = $_GET['user'];
$ong = $crud->getOngByVol($cod);
$ativ = $crudAtiv->getAtividade($codAtiv);

//    print_r($ativ);
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
            <a href="pag_inicial_logado.php"><img src="../../imagens/ong.png" class="image"></a>
        </h2>
        <form class="ui large form" method="post" action="../controllers/controlador.php?acao=editarAtividade&&user=<?= $cod?>&&ativ=<?=$ativ->cod_atividade?>">
            <div class="field">
                <input type="text" name="titulo" value="<?= $ativ->titulo ?>" placeholder="Titulo">
            </div>
            <div class="field">
                <input type="text" name="descricao" value="<?= $ativ->descricao ?>" placeholder="Descrição">
            </div>
            <div class="field">
                <input type="date" name="data" value="<?= $ativ->data ?>" placeholder="Data">
            </div>
            <div class="field">
                <input type="time" name="hora" value="<?= $ativ->hora ?>" placeholder="Hora">
            </div>
            <div class="field">
                <input type="number" name="nro_vagas" value="<?= $ativ->num_vagas ?>" placeholder="Número de Vagas">
            </div>
            <div class="one field">
                <div class="field">
                    <input type="hidden" name="user" value="<?=$_GET['user'] ?>">
                </div>
            </div>
            <button type="submit" class="ui fluid large blue submit button" >Alterar</button>
            <br>
        </form>
        <form class="ui large form" method="post" action="../controllers/controlador.php?acao=excluirAtividade&&user=<?=$cod?>&&ativ=<?= $ativ->cod_atividade?>&&user<?=$cod?>">
            <button class="ui fluid large red submit button" >Excluir Conta</button>
            <br>
    </div>
</div>


<?php require_once "rodape.php";?>
