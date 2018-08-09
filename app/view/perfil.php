<?php

$_GET['item'] = 3;

    require_once "cabecalho.php";
    require_once "../model/CrudUsuarioVoluntario.php";

    $crud = new CrudUsuarioVoluntario();

    $cod     = $_GET['user'];
    $usuario = $crud->getUsuarioVoluntario($cod);

//    print_r($produto);
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
        <a href="Editar.php?user=2">
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
      <p><i class="linkify icon"></i><a href="https://twitter.com/ladygaga">https://twitter.com/ladygaga</a></p>
      <p><i class="birthday cake icon"></i></p>
      <p><i class="map pin icon"></i></p>
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
