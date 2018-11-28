<?php

require_once 'cabecalho.php';
require_once "../model/CrudOng.php";
require_once "../model/CrudVoluntario.php";
require_once "../model/CrudAtividade.php";

$cod      = $_GET['user'];
$codOng   = $_GET['cod'];
$crud     = new CrudOng();
$crudVol  = new CrudVoluntario();
$crudAtiv = new CrudAtividade();


session_start();

$existe = isset($_SESSION['usuario_online']);

if ($existe == false){
    header("location: login.php");
}

$cod     = $_GET['user'];
$usuario = $crudVol->getVoluntario($cod);
$possui  = $usuario->tipo_user;
$ong     = $crud->getOng($codOng);
$listaAtividades = $crudAtiv->getAtividades($codOng);


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
    <div class="ui three column grid">
        <div class="column">
            <img class="ui small circular image" src=../../imagens/<?=$ong->imagem?>>
        </div>
        <div class="column">
            <p></p>
            <h2 class="ui center aligned icon header"><?=$ong->nome_ong?></h2>
        </div>
        <div class="column">
            <a href="Editar_ong.php?user=<?=$cod?>">
                <button class="ui blue button right floated"><i class="edit icon"></i>Editar</button>
            </a>
        </div>

    </div>


    <div class="ui grid">
        <div class="eleven wide column">
            <div class="ui raised segment">
                <a class="ui blue ribbon label"><i class="address card icon"></i>Sobre Nós</a>
                <p><?=$ong->bio?></p>
                <p></p>
                <div class="ui divider"></div>
                <a class="ui blue ribbon label">Vagas Oferecidas</a>
                <p></p>
                <div class="ui six cards">
                    <div class="ui special cards">
                        <?php foreach($listaAtividades as $atividade): ?>
                            <div class="card">
                                <div class="blurring dimmable image">
                                    <div class="ui dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <div class="ui inverted button">Add Friend</div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../../imagens/<?=$atividade->imagem?>">
                                </div>
                                <div class="content">
                                    <a class="header"><?=$atividade->titulo?></a>
                                    <div class="meta">
                                        <span class="date"><?=$atividade->descricao?></span>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a ><?=$atividade->data?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <p></p>
                        <a href="cad_atividade.php?user=<?=$cod?>">
                            <button class="ui button" tabindex="0"><i class="plus icon"></i> Cadastrar Atividade</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" five wide column">
            <div class="ui raised segment">
                <a class="ui blue right ribbon label"><i class="info icon"></i>Info</a>
                <p></p>
                <p><i class="linkify icon"></i><?=$ong->email?></p>
                <p><i class="map pin icon"></i>Nome do Responsavel: <?=$ong->nome_resp?></p>
                <p><i class="birthday cake icon"></i><?=$ong->causas?></p>
                <p><i class="map pin icon"></i><?=$ong->telefone?></p>
                <p></p>
                </p>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>

    </div>

<?php require_once 'rodape.php';?>