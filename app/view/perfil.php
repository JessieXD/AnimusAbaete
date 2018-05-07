<?php

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
	    <img class="ui small circular image" src="../../imagens/juty.jpg">
    </div>
	<div class="column">
	    <p></p>
		<h2 class="ui center aligned icon header"><?=$usuario->nome?></h2>
    </div>
	<div class="column">
		<button class="ui blue button right floated"><i class="edit icon"></i>Editar</button>
	</div>
</div>

<div class="ui two column grid">
  <div class="column">
    <div class="ui raised segment">
      <a class="ui blue ribbon label">Biografia</a>
      <p><?=$usuario->bio?></p>
      <p></p>
      <div class="ui divider"></div>
      <a class="ui blue ribbon label">Ranking</a>
      <p>1º Lugar: <a class="ui label">
      <img class="ui right spaced avatar image" src="../../imagens/henrique.jpg">Henrique</a></p>
      <p>2º Lugar: <a class="ui label">
      <img class="ui right spaced avatar image" src="../../imagens/juty.jpg">Jutyara</a></p>
      <p>3º Lugar: <a class="ui label">
      <img class="ui right spaced avatar image" src="../../imagens/jessica.jpg">Jessica</a></p>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="ui raised segment">
      <a class="ui blue right ribbon label">Amigos</a>
      <p></p>
      	<p><a class="ui label">
  		<img class="ui right spaced avatar image" src="../../imagens/henrique.jpg">Henrique</a>
	    <a class="ui label">
		<img class="ui right spaced avatar image" src="../../imagens/jessica.jpg">Jessica</a>
	    </p>
      <p></p>
      <div class="ui divider"></div>
      <a class="ui blue right ribbon label">Ong's</a>
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
