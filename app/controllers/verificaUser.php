<?php

require_once '../model/CrudVoluntario.php';

session_start();

function login(){

$usuarios = new CrudVoluntario();
$usuarios = $usuarios->getVoluntarios();

$usuario_existe = false;


$user  = $_POST['user'];
$senha = $_POST['senha'];


foreach ($usuarios as $usuario){

    if ($user == $usuario->user && $senha == $usuario->senha ) {

        $usuario_existe = true;
        //deu certo;
        $_SESSION['cod_user']       = $usuario->cod_user;
        $_SESSION['usuario_nome']   = $_POST['nome'];
        $_SESSION['usuario_user']   = $user;
        $_SESSION['usuario_senha']  = $senha;
        $_SESSION['usuario_online'] = true;

        $codigo        = $usuario->cod_user;
        $_POST['codigo'] = $codigo;

        //print_r($_POST);
        //redirecionar
        header('Location: ../view/perfil.php?user='.$codigo);

    }
}

if (!$usuario_existe){
    echo "ih meu nego";

}
}
function logout(){
    //sair
    session_destroy();
    //redirecionar
    header("Location: ../../index.html");
}

//ROTAS
if ($_GET['acao'] == 'login'){
    login();
}
if ($_GET['acao'] == 'sair'){
    logout();
}
