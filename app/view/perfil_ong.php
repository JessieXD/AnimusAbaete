<?php

$_GET['item'] = 4;
require_once 'cabecalho.php';
/*require_once "../model/CrudOng.php";

$usuario = $_GET['user'];
$crud    = new CrudOng();

session_start();

$existe = isset($_SESSION['usuario_online']);

if ($existe == false){
    header("location: perfil.php?user=".$usuario);
}

$cod     = $_GET['user'];
$usuario = $crud->getOng($cod);*/

//    print_r();
//    exit();
?>

	<div class="ui three column grid">
		<div class="column">
		<img class="ui small circular image" src="../../imagens/12.jpg"></h1>
		</div>
		<div class="column">
		<p></p>
		<h2 class="ui center aligned icon header"> ONG Florescer</h2>
		</div>

	</div>

<div class="ui grid">
  <div class="sixteen wide column">
    <div class="ui raised segment">
      <a class="ui teal ribbon label">Sobre nós</a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec metus leo, condimentum et maximus vel, vehicula non massa. Vestibulum tellus est, molestie sed velit et, luctus tempor mi. Cras maximus neque metus, et vestibulum lacus tincidunt vel. Curabitur iaculis massa turpis, quis lobortis diam pharetra vel. Vestibulum vitae porttitor enim, eu egestas dolor. Aenean varius mi ac mi pretium ullamcorper. Duis fringilla ligula vitae justo fermentum, in finibus diam dignissim. Proin vulputate, justo et tincidunt porta, arcu leo ultricies enim, eget facilisis ligula massa non justo. Etiam quis tortor euismod, scelerisque massa nec, euismod lacus. Phasellus porta tellus tempus, suscipit sem ut, finibus urna. Vivamus pulvinar lorem eget facilisis gravida.</p>
      <p></p>
      <div class="ui divider"></div>
      <a class="ui teal ribbon label">Vagas Oferecidas</a>
        <p></p>
      <div class="ui six cards">
  	  <a class="ui red card" href="informacoes_vaga.html" > <!--CONFERIR!!!!!-->
  	    <div class="image" >
  	      <img src="../../imagens/13.jpg">
  	    </div>
  	  </a>
  	  <a class="orange card">
  	    <div class="image">
  	      <img src="../../imagens/14.jpg">
  	    </div>
  	  </a>
  	  <a class="yellow card">
  	    <div class="image">
  	      <img src="../../imagens/15.jpg">
  	    </div>
  	  </a>
  	  <a class="olive card">
  	    <div class="image">
  	      <img src="../../imagens/16.jpg">
  	    </div>
  	  </a>
      <a class="ui green card">
       <div class="image">
         <img src="../../imagens/17.jpg">
       </div>
     </a>
     <a class="teal card">
       <div class="image">
         <img src="../../imagens/18.jpg">
       </div>
     </a>

      <p></p>
    </div>
  </div>
</div>

</div>

<?php require_once 'rodape.php';?>
