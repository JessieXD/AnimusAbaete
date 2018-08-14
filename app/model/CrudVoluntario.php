<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 16/11/2017
 * Time: 10:56
 */

require_once "Conexao.php";
require_once "Voluntario.php";

class CrudVoluntario{
    private $conexao;
    private $usuario;

    public function __construct(){

        $this->conexao = conexao::getConexao();
    }

    public function salvar(Voluntario $user){
        $sql = "INSERT INTO usuario (senha, email, nome, user, sexo, idade , bio, imagem, site) VALUES (`$user->senha`, `$user->email`, `$user->nome`, `$user->user`, `$user->sexo`,`$user->idade`, `$user->bio`, `$user->imagem`, `$user->site)";

        $this->conexao->exec($sql);
    }

    public function editar(Voluntario $user){

        $this->conexao->exec("UPDATE usuario SET senha = '$user->senha', email = '$user->email', nome = '$user->nome', user = '$user->user', sexo = '$user->sexo', idade = '$user->idade', bio = '$user->bio', imagem = '$user->imagem', site = '$user->site', WHERE cod_user = $user->cod_user ");
    }

    public function getVoluntario( $cod_user){
        $consulta = $this->conexao->query("SELECT * FROM usuario WHERE cod_user = $cod_user");
        $user = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Voluntario($user['cod_user'], $user['senha'], $user['email'], $user['nome'], $user['user'],  $user['sexo'], $user['idade'],$user['bio'], $user['imagem'], $user['site'] );

    }

    public function getVoluntarios(){
        $consulta = $this->conexao->query("SELECT * FROM usuario");
        $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $listaUsuarios = [];

        foreach ($usuarios as $user) {
            $listaUsuarios [] = new Voluntario($user['cod_user'], $user['senha'], $user['email'], $user['nome'], $user['user'],  $user['sexo'], $user['idade'],$user['bio'], $user['imagem'], $user['site']);
        }

        return $listaUsuarios;
    }

}

/*
 *$consulta = $this->conexao->query("SELECT * FROM USER");

        $usuarios = $consulta->fetchAll(PDO::FETCH_CLASS, 'Voluntario', ['cod_user', 'regiao', 'senha', 'email', 'nome', 'perfil', 'user', 'idade', 'sexo', 'bio']);
        return $usuarios;


        }

 */
