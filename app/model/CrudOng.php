<?php
/**
 * Created by PhpStorm.
 * ong: aluno
 * Date: 20/08/2018
 * Time: 14:00
 */

require_once "Conexao.php";
require_once "Ong.php";

class CrudOng{
    public $conexao;
    public $ong;

    public function __construct(){

        $this->conexao = conexao::getConexao();
    }
    public function salvar(Ong $ong){
        $sql   = "INSERT INTO ong (cnpj, nome_ong, nome_responsavel, causas_ong, email) VALUES ('$ong->cnpj', '$ong->nome_ong', '$ong->nome_resp', '$ong->causas', '$ong->email');)";

        $this->conexao->exec($sql);
    }

    public function editar(Ong $ong){
        $this->conexao->exec("UPDATE usuario SET senha = '$ong->cnpj', '$ong->nome_ong', '$ong->nome_resp', '$ong->causas', '$ong->email' WHERE cod_ong = $ong->cod_ong ");
    }

    public function getOng( $cod_ong){//$cod_ong = null, $cnpj, $nome_ong, $nome_resp, $local, $causas, $email
        $consulta = $this->conexao->query("SELECT * FROM ong WHERE cod_ong = $cod_ong");
        $ong = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Ong($ong['cod_ong'], $ong['cnpj'], $ong['$nome_ong'], $ong['nome_resp'], $ong['local'],  $ong['email'] );

    }

    public function getVoluntarios(){
        $consulta = $this->conexao->query("SELECT * FROM ong");
        $ongs = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $listaOngs = [];

        foreach ($ongs as $ong) {
            $listaOngss [] = new Voluntario($ong['cod_ong'], $ong['senha'], $ong['email'], $ong['nome'], $ong['ong'],  $ong['sexo'], $ong['idade'],$ong['bio'], $ong['imagem'], $ong['site']);
        }

        return $listaOngs;
    }
    public function excluirVol(int $codigo)
    {
        //DELETE FROM table_name WHERE condition;
        $this->conexao->query("DELETE FROM ong WHERE cod_ong = $codigo");
    }
}