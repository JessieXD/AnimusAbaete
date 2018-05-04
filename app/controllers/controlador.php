<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/05/18
 * Time: 15:27
 */

    require_once '../model/UsuarioOng.php';
    require_once '../model/UsuarioVoluntario.php';
    require_once '../model/CrudUsuarioVoluntario.php';

    if ($_GET['acao'] == 'cadastrarVol'){

        $usuario = new UsuarioVoluntario($_POST['cod_user'] = null, $_POST['regiao'] = null, $_POST['senha'], $_POST['email'], $_POST['nome'], $_POST['perfil'] = null, $_POST['user'], $_POST['sexo'], $_POST['idade'] = null, $_POST['bio'] = null);
        $crud    = new CrudUsuarioVoluntario();

        $crud->salvar($usuario);

        header('Location : ../view/perfil.php');
    }