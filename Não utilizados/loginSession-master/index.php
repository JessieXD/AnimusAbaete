<?php
    session_start();
    if(!isset($_SESSION['usuario_online']) OR !($_SESSION['usuario_online'] == true) ){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class="social">

		<a href="" class="sair">sair</a>

		<img src="https://avatars1.githubusercontent.com/u/1314923?v=3&s=460" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>