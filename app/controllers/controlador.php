<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/05/18
 * Time: 15:27
 */

    require_once '../model/Ong.php';
    require_once '../model/CrudOng.php';
    require_once '../model/Voluntario.php';
    require_once '../model/CrudVoluntario.php';
    require_once '../model/Atividade.php';
    require_once '../model/CrudAtividade.php';

    switch ($_GET['acao']){
        case 'cadastrarVol':
            $usuario = new Voluntario(null, $_POST['senha'], $_POST['email'], $_POST['nome'], $_POST['user'], $_POST['sexo'], $_POST['idade'], null, null, null, $_POST['tipo_user']);
            $crud    = new CrudVoluntario();

            $crud->salvar($usuario);

            header('Location: ../view/login.php');
            break;

        case 'editar':

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
            break;

        case 'excluir':
            $crud   = new CrudVoluntario();
            $crud->excluirVol($_GET['user']);


            header('Location: verificaUser.php?acao=sair');
            break;

        case 'cadastrarOng':

            
            $ong     = new Ong(null, $_POST['cnpj'],$_POST['nome_ong'],$_POST['nome_resp'],null,$_POST['causas'],$_POST['email'],null,$_POST['telefone'], $_POST['user']);
            $crud    = new CrudOng();

            $crud->salvar($ong);
            $cod     = $_POST['user'];

            header('Location: ../view/carregando.php?user='.$cod);
            break;

        case 'entrarOng':

            $user = $_GET['user'];
            $crud = new CrudVoluntario();
            $possui = $crud->possuiOng($user);

            if($possui == 1 ){
            $crudOng = new CrudOng();

            $ong  = $crudOng->getOngByVol($user);
            $cod  = $ong->cod_user;

            header('Location: ../view/carregando.php?user='.$user);
            }else{
                header('Location: ../view/cad_ong.php?user='.$user);

            }

            break;
        case 'editarOng':

            if (isset($_POST['imagem'])){

                $crud = new CrudOng();
                $ong1 = $crud->getOngByVol($_GET['user']);
                $codOng = $ong1->cod_user;
                $ong = new Ong($codOng, null, $_POST['nome_ong'], $_POST['nome_resp'], null, $_POST['causas'], $_POST['email'], $_POST['imagem'], $_POST['telefone'], null, $_POST['bio']);

                $crud->editar($ong);
                $cod    = $_GET['user'];

                header('Location: ../view/perfil_ong.php?user='.$cod);
            }else{

                $imagem  = "ong.png";
                $crud = new CrudOng();
                $ong1 = $crud->getOngByVol($_GET['user']);
                $codOng = $ong1->cod_user;
                $ong = new Ong($codOng, null, $_POST['nome_ong'], $_POST['nome_resp'], null, $_POST['causas'], $_POST['email'], $imagem, $_POST['telefone'], null, $_POST['bio']);

                $crud->editar($ong);
                $cod    = $_GET['user'];
                header('Location: ../view/perfil_ong.php?user='.$cod);
            }
            break;

        case 'excluirOng':
            $crud   = new CrudOng();
            $crud->excluirOng($_GET['user']);


            header('Location: verificaUser.php?acao=sair');
            break;
        case 'cadastrarAtividade':

            $cod     = $_GET['user'];
            $crudOng = new CrudOng();
            $ong     = $crudOng->getOngByVol($cod);
            $codOng  = $ong->cod_user;

            $crud    = new CrudAtividade();
            $ativ    = new Atividade( null, $_POST['descricao'], $_POST['titulo'], $_POST['data'], $_POST['hora'],  $_POST['nro_vagas'], $codOng, null );

            $crud->salvar($ativ);

            header('Location: ../view/perfil_ong.php?user='.$cod);
            break;
        case 'editarAtividade':

            $ativ    = new Atividade( $_GET['ativ'], $_POST['descricao'], $_POST['titulo'], $_POST['data'], $_POST['hora'],  $_POST['nro_vagas'], $codOng, null );
            $crud    = new CrudAtividade();

            $crud->editar($ativ);
            $cod    = $_GET['user'];

            header('Location: ../view/perfil_ong.php?user='.$cod);

            break;
        case 'excluirAtividade':

            $crud   = new CrudAtividade();
            $ativ   = $_GET['ativ'];
            $crud->excluirAtividade($ativ);
            $cod    = $_GET['user'];

            header('Location: ../view/perfil_ong.php?user='.$cod);
            break;
        default:
            echo "Página não encontrada";
    }

    /*if ($_GET['acao'] == 'cadastrarVol'){
                                    //$cod_user = null, $senha, $email, $nome, $user, $sexo, $idade, $bio, $imagem, $site
        $usuario = new Voluntario(null, $_POST['senha'], $_POST['email'], $_POST['nome'], $_POST['user'], $_POST['sexo'], $_POST['idade'], null, null, null);
        $crud    = new CrudVoluntario();

        $crud->salvar($usuario);

        header('Location: ../view/login.php');
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

*/

