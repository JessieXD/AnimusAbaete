<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="../../semantic/semantic.css">
    <meta charset="UTF-8">
	<title>Cadastro</title>
    <link rel="icon" href="../../imagens/logo_preta.png" />
</head>
<style type="text/css">
    body{
        background-color: white;
    }

</style>
<body>
<div class="ui middle aligned center aligned grid">
  <div class="four wide column">
    <br>
    <h2 class="ui small circular image">
      <a href="../../index.html"><img src="../../imagens/logo.png" class="image"></a>
    </h2>
    <form class="ui large form" method="post" action="../controllers/controlador.php?acao=cadastrarOng&&user=<?=$_GET['user'] ?>">
      <div class="field">
        <div class="one field">
          <div class="field">
            <input type="text" name="nome_ong" placeholder="Nome">
          </div>
        </div>
      </div>
      <div class="field">
        <div class="one field">
          <div class="field">
            <input type="number" name="cnpj" placeholder="CNPJ">
          </div>
        </div>
      </div>
      <div class="field">
        <div class="one field">
          <div class="field">
            <input type="text" name="nome_resp" placeholder="Nome Responsável">
          </div>
        </div>
      </div>
      <div class="field">
        <div class="one field">
          <div class="field">
            <input type="text" name="causas" placeholder="Causas da ong">
          </div>
        </div>
      </div>
      <div class="field">
        <div class="one field">
          <div class="field">
            <input type="email" name="email" placeholder="Email">
          </div>
        </div>
      </div>
      <div class="field">
        <div class="one field">
          <div class="field">
            <input type="hidden" name="user" value="<?=$_GET['user'] ?>">
          </div>
        </div>
      </div>
      <div class="field">
        <input type="tel" name="telefone" placeholder="Telefone">
      </div>
      <br>
      <button type="submit" class="ui fluid large teal submit button" >Cadastrar</button>
    </form>

  </div>
</div>
</body>
</html>
