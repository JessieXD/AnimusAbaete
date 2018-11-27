<?php

$cod     = $_GET['user'];
require_once 'cabecalho.php';
/*require_once "../model/CrudOng.php";

$usuario = $_GET['user'];
$crud    = new CrudOng();

session_start();

$existe = isset($_SESSION['usuario_online']);

if ($existe == false){
    header("location: perfil.php?user=".$usuario);
}


$usuario = $crud->getOng($cod);*/

//    print_r();
//    exit();
?>
    <a href="pag_inicial_logado.php?user=<?=$cod?>" class="item">Página Inicial</a>
    <a href="procura.php?user=<?=$cod?>" class="item">Procurar</a>
    <a href="../controllers/controlador.php?acao=entrarOng&&user=<?=$cod?>" class="active item">Sua ONG</a>
    <a href="perfil.php?user=<?=$cod?>" class="item">Perfil</a>
    <a class="item" href="../controllers/verificaUser.php?acao=sair">Sair</a>
    </div>
    </div>
    </div>
    <div class="ui three column grid">
        <div class="column">
            <img class="ui small circular image" src="../../imagens/12.jpg"></h1>
        </div>
        <div class="column">
            <p></p>
            <h2 class="ui center aligned icon header"> ONG Florescer</h2>
        </div>
        <div class="column">
            <a href="Editar_ong.php">
                <button class="ui blue button right floated"><i class="edit icon"></i>Editar</button>
            </a>
        </div>

    </div>

    <div class="ui grid">
        <div class="eleven wide column">
            <div class="ui raised segment">
                <a class="ui blue ribbon label"><i class="address card icon"></i>Sobre Nós</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec metus leo, condimentum et maximus vel, vehicula non massa. Vestibulum tellus est, molestie sed velit et, luctus tempor mi. Cras maximus neque metus, et vestibulum lacus tincidunt vel. Curabitur iaculis massa turpis, quis lobortis diam pharetra vel. Vestibulum vitae porttitor enim, eu egestas dolor. Aenean varius mi ac mi pretium ullamcorper. Duis fringilla ligula vitae justo fermentum, in finibus diam dignissim. Proin vulputate, justo et tincidunt porta, arcu leo ultricies enim, eget facilisis ligula massa non justo. Etiam quis tortor euismod, scelerisque massa nec, euismod lacus. Phasellus porta tellus tempus, suscipit sem ut, finibus urna. Vivamus pulvinar lorem eget facilisis gravida.</p>
                <p></p>
                <div class="ui divider"></div>
                <a class="ui blue ribbon label">Vagas Oferecidas</a>
                <p></p>
                <div class="ui six cards">
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
                                <img src="../../imagens/14.jpg">
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
                                <img src="../../imagens/13.jpg">
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
                                <img src="../../imagens/15.jpg">
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
                                <img src="../../imagens/16.jpg">
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

                    <p></p>
                </div>
            </div>
        </div>
        <div class=" five wide column">
            <div class="ui raised segment">
                <a class="ui blue right ribbon label"><i class="info icon"></i>Info</a>
                <p></p>
                <p><i class="linkify icon"></i><a</a></p>
                <p><i class="birthday cake icon"></i></p>
                <p><i class="map pin icon"></i> </p>
                <p></p>
                </p>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>

    </div>

<?php require_once 'rodape.php';?>