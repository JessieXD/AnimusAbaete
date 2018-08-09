<?php

require_once '../model/CrudUsuarioVoluntario.php';

session_start();

$user = $_POST['user'];
$senha = $_POST['senha'];


$usuarios = new CrudUsuarioVoluntario();
$usuarios = $usuarios->getUsuariosVoluntario();

$usuario_existe = false;



foreach ($usuarios as $usuario){

    if ($user == $usuario->user && $senha == $usuario->senha ) {

        $usuario_existe = true;
        //deu certo;
        $_SESSION['cod_user']       = $usuario->cod_user;
        $_SESSION['usuario_nome']   = $_POST['nome'];
        $_SESSION['usuario_user']   = $user;
        $_SESSION['usuario_senha']  = $senha;
        $_SESSION['usuario_online'] = true;

        //redirecionar
        header('Location: ../view/perfil.php?user='.$usuario->cod_user);

    }
}

if (!$usuario_existe){
    echo "ih meu nego";

}
