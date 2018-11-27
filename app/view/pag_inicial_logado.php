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

require_once "cabecalho.php";
?>
<a href="pag_inicial_logado.php?user=<?=$cod?>" class="active item">Página Inicial</a>
<a href="procura.php?user=<?=$cod?>" class="item">Procurar</a>
<a href="../controllers/controlador.php?acao=entrarOng&&user=<?=$cod?>" class="item">Sua ONG</a>
<a href="perfil.php?user=<?=$cod?>" class="item">Perfil</a>
<a class="item" href="../controllers/verificaUser.php?acao=sair">Sair</a>
</div>
</div>
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
</div>

<?php require_once "rodape.php"; ?>

<!--<ul class="bxslider">
  <li><img src="../../carrossel/images/pic1.jpg" style="width: 100%" /></li>
  <li><img src="../../carrossel/images/pic2.jpg" style="width: 100%" /></li>
  <li><img src="../../carrossel/images/pic3.jpg" style="width: 100%" /></li>
  <li><img src="../../carrossel/images/pic1.jpg" style="width: 100%" /></li>
</ul>

<script>
    (document).ready(function(){
        ('.bxslider').bxSlider({
            mode: 'horizontal',
            moveSlides: 1,
            slideMargin: 0,
            infiniteLoop: true,
            slideWidth: 16000,
            minSlides: 1,
            maxSlides: 1,
            speed: 850,
            auto: true
        });
    });
</script>


-->