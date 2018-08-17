<?php

$_GET['item'] = 3;

    require_once "cabecalho.php";
    require_once "../model/CrudVoluntario.php";

    $crud = new CrudVoluntario();

    session_start();

    $existe = isset($_SESSION['usuario_online']);

    if ($existe == false){
        header("location: login.php");
    }

    $cod     = $_GET['user'];
    $usuario = $crud->getVoluntario($cod);

//    print_r();
//    exit();
?>

<div class="ui three column grid">
    <div class="column">
	    <img class="ui small circular image" src=../../imagens/<?=$usuario->imagem?>>
    </div>
	<div class="column">
	    <p></p>
		<h2 class="ui center aligned icon header"><?=$usuario->nome?></h2>
    </div>
	<div class="column">
        <a href="Editar.php?user=<?=$usuario->cod_user?>">
            <button class="ui blue button right floated"><i class="edit icon"></i>Editar</button>
        </a>
    </div>
</div>

<div class="ui two column grid">
  <div class="column">
    <div class="ui raised segment">
      <a class="ui blue ribbon label"><i class="address card icon"></i>Biografia</a>
      <p><?=$usuario->bio?></p>
      <p></p>
      <div class="ui divider"></div>
      <a class="ui blue ribbon label"><i class="info icon"></i>Info</a>
      <p></p>
      <p><i class="linkify icon"></i><a href="<?=$usuario->site?>"><?=$usuario->site?></a></p>
      <p><i class="birthday cake icon"></i><?=$usuario->idade?></p>
      <p><i class="map pin icon"></i>África do Sul</p>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="ui raised segment">
      <a class="ui blue right ribbon label"><i class="users icon"></i>Ong's</a>
      <p><a class="ui label">
  		<img class="ui right spaced avatar image" src="../../imagens/1.jpg">Mundo Gato</a>
		<a class="ui label">
		<img class="ui right spaced avatar image" src="../../imagens/7.jpg">Ong da Rua</a>
      </p>
      <p></p>
      <p></p>
    </div>
  </div>
</div>

<?php require_once "rodape.php"; ?>
