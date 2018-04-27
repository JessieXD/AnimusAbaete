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
        $sql = "INSERT INTO USER (regiao, senha, email, nome, perfil, user, idade, sexo, bio) VALUES ('$user->regiao', '$user->senha', '$user->email', '$user->nome', '$user->perfil', '$user->user', '$user->idade', '$user->sexo', '$user->bio', )";

        $this->conexao->exec($sql);
    }

    public function editar(UsuarioVoluntario $user){

        $this->conexao->exec("UPDATE USER SET regiao = '$user->regiao', senha = '$user->senha', email = '$user->email', nome = '$user->nome', perfil = '$user->perfil', user = '$user->user', idade = '$user->idade', sexo = '$user->sexo', bio = '$user->bio' WHERE cod_user = $user->cod_user ");
    }

    public function getUsuarioVoluntario(int $cod_user){
        $consulta = $this->conexao->query("SELECT * FROM USER WHERE cod_user = $cod_user");
        $user = $consulta->fetch(PDO::FETCH_ASSOC);

        return new UsuarioVoluntario($user['regiao'], $user['senha'], $user['email'], $user['nome'], $user['perfil'], $user['user'], $user['idade'], $user['sexo'], $user['bio'] );

    }

}