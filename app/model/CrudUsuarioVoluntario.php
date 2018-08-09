<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 16/11/2017
 * Time: 10:56
 */

require_once "Conexao.php";
require_once "UsuarioVoluntario.php";

class CrudUsuarioVoluntario{
    private $conexao;
    private $usuario;

    public function __construct(){

        $this->conexao = conexao::getConexao();
    }

    public function salvar(UsuarioVoluntario $user){
        $sql = "INSERT INTO usuario (regiao, senha, email, nome, perfil, user, idade, sexo, bio) VALUES (`$user->regiao`, `$user->senha`, `$user->email`, `$user->nome`, `$user->perfil`, `$user->user`, `$user->idade`, `$user->sexo`, `$user->bio`, '$user->imagem')";

        $this->conexao->exec($sql);
    }

    public function editar(UsuarioVoluntario $user){

        $this->conexao->exec("UPDATE usuario SET regiao = '$user->regiao', senha = '$user->senha', email = '$user->email', nome = '$user->nome', perfil = '$user->perfil', user = '$user->user', idade = '$user->idade', sexo = '$user->sexo', bio = '$user->bio', imagem = '$user->imagem' WHERE cod_user = $user->cod_user ");
    }

    public function getUsuarioVoluntario(int $cod_user){
        $consulta = $this->conexao->query("SELECT * FROM usuario WHERE cod_user = $cod_user");
        $user = $consulta->fetch(PDO::FETCH_ASSOC);

        return new UsuarioVoluntario($user['cod_user'], $user['regiao'], $user['senha'], $user['email'], $user['nome'], $user['perfil'], $user['user'], $user['idade'], $user['sexo'], $user['bio'], $user['imagem'] );

    }

    public function getUsuariosVoluntario(){
        $consulta = $this->conexao->query("SELECT * FROM usuario");
        $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $listaUsuarios = [];

        foreach ($usuarios as $user) {
            $listaUsuarios [] = new UsuarioVoluntario($user['cod_user'], $user['regiao'] = null, $user['senha'], $user['email'], $user['nome'], $user['perfil'], $user['user'], $user['idade'], $user['sexo'], $user['bio'], $user['imagem']);
        }

        return $listaUsuarios;
    }

}

/*
 *$consulta = $this->conexao->query("SELECT * FROM USER");

        $usuarios = $consulta->fetchAll(PDO::FETCH_CLASS, 'UsuarioVoluntario', ['cod_user', 'regiao', 'senha', 'email', 'nome', 'perfil', 'user', 'idade', 'sexo', 'bio']);
        return $usuarios;


        }

 */
