<?php
require_once "../model/CrudVoluntario.php";
require_once "../model/CrudOng.php";


$crud = new CrudVoluntario();
$crudOng = new CrudOng();
session_start();

$existe = isset($_SESSION['usuario_online']);

if ($existe == false){
    header("location: login.php");
}

$cod     = $_GET['user'];
$usuario = $crud->getVoluntario($cod);
$possui  = $usuario->tipo_user;
$listaOngs = $crudOng->getOngs();

require_once "cabecalho.php";

if ($possui == 1){
    echo "<a href='pag_inicial_logado.php?user=$cod' class='active item'>Página Inicial</a>
<a href='../controllers/controlador.php?acao=entrarOng&&user=$cod' class='item'>Sua ONG</a>
<a href='perfil.php?user=$cod' class='item'>Perfil</a>
<a class='item' href='../controllers/verificaUser.php?acao=sair'>Sair</a>
</div>
</div>
</div>";
}else{
    ?>
    <a href="pag_inicial_logado.php?user=<?=$cod?>" class="active item">Página Inicial</a>
    <a href="perfil.php?user=<?=$cod?>" class="item">Perfil</a>
    <a class="item" href="../controllers/verificaUser.php?acao=sair">Sair</a>
    </div>
    </div>
    </div>
<?php } ?>
<br>
<br>
<div class="ui special cards">
    <?php foreach($listaOngs as $ong): ?>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/<?=$ong->imagem?>">
            </div>
            <div class="content">
                <a href="perfilOng.php?user=<?=$cod?>&&cod=<?=$ong->cod_user?>" class="header"><?=$ong->nome_ong?></a>
                <div class="meta">
                    <span class="date"><?=$ong->bio?></span>
                </div>
            </div>
            <div class="extra content">
                <a><?=$ong->causas?></a>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?php require_once "rodape.php"; ?>
