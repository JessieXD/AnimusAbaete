<?php
require_once "../model/CrudVoluntario.php";

$crud = new CrudVoluntario();

session_start();

$existe = isset($_SESSION['usuario_online']);

if ($existe == false){
    header("location: login.php");
}

$cod     = $_GET['user'];
$usuario = $crud->getVoluntario($cod);
$possui  = $usuario->tipo_user;

require_once "cabecalho.php";

if ($possui == 1){
    echo "<a href=\"pag_inicial_logado.php?user=<?=$cod?>\" class=\"item\">Página Inicial</a>
<a href=\"procura.php?user=<?=$cod?>\" class=\"item\">Procurar</a>
<a href=\"../controllers/controlador.php?acao=entrarOng&&user=<?=$cod?>\" class=\"item\">Sua ONG</a>
<a href=\"perfil.php?user=<?=$cod?>\" class=\"item\">Perfil</a>
<a class=\"item\" href=\"../controllers/verificaUser.php?acao=sair\">Sair</a>
</div>
</div>
</div>";
}else{
    ?>
    <a href="pag_inicial_logado.php?user=<?=$cod?>" class="item">Página Inicial</a>
    <a href="procura.php?user=<?=$cod?>" class="active item">Procurar</a>
    <a href="perfil.php?user=<?=$cod?>" class="item">Perfil</a>
    <a class="item" href="../controllers/verificaUser.php?acao=sair">Sair</a>
    </div>
    </div>
    </div>
<?php } ?>

    <div class="ui right aligned category search">
        <div class="ui icon input">
            <input class="prompt" type="text" placeholder="Procurar ONG...">
            <i class="search icon"></i>
        </div>
        <div class="results"></div>
    </div>
    <br>
    <div class="ui special cards">
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/logo_gatinho.png">
            </div>
            <div class="content">
                <a class="header">Team Fu</a>
                <div class="meta">
                    <span class="date">Created in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a></br>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/1.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/15.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/13.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/6.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/7.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/8.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/11.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/9.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="../../imagens/5.png">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Created in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
    </div>
    </div>
<?php require_once 'rodape.php'; ?>