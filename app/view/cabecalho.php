<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet"  href="../../semantic/semantic.css">
	<!--<link href="carrossel/jquery.bxslider.css" rel="stylesheet" />-->
	<title>Animus Abaetê</title>
</head>
<body>
	<div class="ui inverted segment">
	  <div class="ui inverted secondary pointing menu">
    	<div class="ui mini image">
    		<img src="../../imagens/logo_2.png">
	    </div>

	    <div class="right menu">
            <?php
            switch ($_GET['item']){
                case 1:
                    echo '<a href="pag_inicial_logado.php" class="active item">Página Inicial</a>
                          <a href="procura.php" class="item">Procurar</a>
			              <a href="perfil.php" class="item">Perfil</a>
	    	              <a class="item" href="../../index.html">Sair</a>';
                    break;
                case 2:
                    echo '<a href="pag_inicial_logado.php" class="item">Página Inicial</a>
                          <a href="procura.php" class="active item">Procurar</a>
			              <a href="perfil.php" class="item">Perfil</a>
	    	              <a class="item" href="../../index.html">Sair</a>';
                    break;
                case 3:
                    echo '<a href="pag_inicial_logado.php" class="item">Página Inicial</a>
                          <a href="procura.php" class="item">Procurar</a>
			              <a href="perfil.php" class="active item">Perfil</a>
	    	              <a class="item" href="../../index.html">Sair</a>';
                    break;
            }
            ?>
	    	<!--<a href="pag_inicial_logado.php" class="item">Página Inicial</a>
	    	<a href="procura.php" class="item">Procurar ONG</a>
			<a href="perfil.php" class="active item">Perfil</a>
	    	<a class="item" href="../../index.html">Sair</a>-->
	    </div>
	  </div>
	</div>
