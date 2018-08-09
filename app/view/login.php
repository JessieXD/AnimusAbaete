<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!--<link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet"  href="../../semantic/semantic.css">

	<title>Login</title>
</head>
<style type="text/css">
  body{
    background-color: #1B1C1D;
  }
</style>
<body>
<br>
<br>
<br>
<div class="ui middle aligned center aligned grid">
  <div class="four wide column">
    <h2 class="ui teal small circular image">
      <a href="../../index.html"><img src="../../imagens/logo.jpg" class="image"></a>
    </h2>
    <div>
    </div>
    <form class="ui large form" action="../controllers/verificaUser.php" method="post">
      <div class="ui inverted stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="user" placeholder="Login">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="senha" placeholder="Senha">
          </div>
        </div>
      </div>
        <button class="ui fluid large blue submit button" >Login</button>
    </form>

      <!--<div class="ui error message"></div>-->
    <div class="ui inverted message">
      Novo aqui? <a href="cadastro.html">Cadastre-se</a>
    </div>
  </div>
</div>

</body>
</html>
