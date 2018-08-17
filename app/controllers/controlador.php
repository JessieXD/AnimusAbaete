<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/05/18
 * Time: 15:27
 */

    require_once '../model/UsuarioOng.php';
    require_once '../model/Voluntario.php';
    require_once '../model/CrudVoluntario.php';

    if ($_GET['acao'] == 'cadastrarVol'){
                                    //$cod_user = null, $senha, $email, $nome, $user, $sexo, $idade, $bio, $imagem, $site
        $usuario = new Voluntario(null, $_POST['senha'], $_POST['email'], $_POST['nome'], $_POST['user'], $_POST['sexo'], $_POST['idade'], null, null, null);
        $crud    = new CrudVoluntario();

        $crud->salvar($usuario);

        print_r($usuario);
    }

    if ($_GET['acao'] == 'editar'){

        if (isset($_POST['imagem'])){
        $usuario = new Voluntario($_GET['user'],  $_POST['senha'], $_POST['email'], $_POST['nome'], null, null, null, $_POST['bio'], $_POST['imagem'], $_POST['site']);
        $crud    = new CrudVoluntario();

        $crud->editar($usuario);
        $cod    = $_GET['user'];

        header('Location: ../view/perfil.php?user='.$cod);
            }else{

            $imagem  = "icon.png";
            $usuario = new Voluntario($_GET['user'],  $_POST['senha'], $_POST['email'], $_POST['nome'], null, null, null, $_POST['bio'], $imagem, $_POST['site']);
            $crud    = new CrudVoluntario();

            $crud->editar($usuario);
            $cod    = $_GET['user'];

            header('Location: ../view/perfil.php?user='.$cod);
        }
    }

    if ($_GET['acao'] == 'excluir'){

        $crud   = new CrudVoluntario();
        $crud->excluirVol($_GET['user']);


        header('Location: verificaUser.php?acao=sair');
    }



