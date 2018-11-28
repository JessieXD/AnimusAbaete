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
            <div class="tree wide column">


                <div class=" center aligned">
                    <img src="../../imagens/loading.gif">
                </div>
Carregando...

                <?php
                require_once '../model/Ong.php';
                require_once '../model/CrudOng.php';
                require_once '../model/Voluntario.php';
                require_once '../model/CrudVoluntario.php';

                $user = $_GET['user'];
                $crud = new CrudVoluntario();
                $possui = $crud->possuiOng($user);

                if($possui == 1 ){
                    $crudOng = new CrudOng();

                    $ong  = $crudOng->getOngByVol($user);
                    $cod  = $ong->cod_user;

                    header('Location: ../view/perfil_ong.php?user='.$user);
                }else{
                    header('Location: ../view/cad_ong.php?user='.$user);

                }
                ?>
            </div>
        </div>

        </body>
        </html>
