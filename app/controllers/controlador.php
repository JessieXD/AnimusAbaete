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

        $usuario = new Voluntario($_POST['cod_user'] = null, $_POST['regiao'] = null, $_POST['senha'], $_POST['email'], $_POST['nome'], $_POST['perfil'] = null, $_POST['user'], $_POST['sexo'], $_POST['idade'] = null, $_POST['bio'] = null);
        $crud    = new CrudVoluntario();

        $crud->salvar($usuario);

        header('Location : ../view/perfil.php');
    }

    if ($_GET['acao'] == 'editar'){

        $usuario = new Voluntario($_POST['cod_user'] = null, $_POST['regiao'] = null, $_POST['senha'], $_POST['email'], $_POST['nome'], $_POST['perfil'] = null, $_POST['user'], $_POST['sexo'], $_POST['idade'] = null, $_POST['bio'] = null);
        $crud    = new CrudVoluntario();

        $crud->editar($usuario);

        header('Location : ../view/perfil.php');
    }

