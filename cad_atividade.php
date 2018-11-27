<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"  href="../../semantic/semantic.css">
    <meta charset="UTF-8">
    <title>Cadastro</title>
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
        <form class="ui large form" method="post" action="../controllers/controlador.php?acao=cadastrarOng">
            <div class="field">
                <div class="one field">
                    <div class="field">
                        <input type="text" name="descricao" placeholder="Descrição">
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="one field">
                    <div class="field">
                        <input type="number" name="titulo" placeholder="Títuol">
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="one field">
                    <div class="field">
                        <input type="date" name="data" placeholder="Data">
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="one field">
                    <div class="field">
                        <input type="text" name="hora" placeholder="Hora">
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="one field">
                    <div class="field">
                        <input type="email" name="nro_vagas" placeholder="Número de Vagas">
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
            <br>
            <button type="submit" class="ui fluid large teal submit button" >Cadastrar Atividade</button>
        </form>

    </div>
</div>
</body>
</html>