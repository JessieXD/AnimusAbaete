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
        $sql   = "INSERT INTO ong (cnpj, nome_ong, nome_responsavel, causas_ong, email, usuario_cod_user, bio) VALUES ('$ong->cnpj', '$ong->nome_ong', '$ong->nome_resp', '$ong->causas', '$ong->email', '$ong->cod_vol', '$ong->bio');)";

        $this->conexao->exec($sql);
        echo $sql;
    }

    public function editar(Ong $ong){
        $this->conexao->exec("UPDATE ong SET nome_ong = '$ong->nome_ong', nome_responsavel = '$ong->nome_resp', causas_ong = '$ong->causas', email = '$ong->email', imagem = '$ong->imagem', telefone = '$ong->telefone', bio = '$ong->bio' WHERE ong.idong = $ong->cod_user;");
    }

    public function getOng($cod_ong){
        $consulta = $this->conexao->query("SELECT * FROM ong WHERE idong = $cod_ong");
        $ong = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Ong($ong['idong'], $ong['cnpj'], $ong['nome_ong'], $ong['nome_responsavel'], NULL, $ong['causas_ong'],  $ong['email'],$ong['imagem'], $ong['telefone'], $ong['usuario_cod_user'], $ong['bio'] );
    }

    public function getOngByVol( $cod_vol){
        $consulta = $this->conexao->query("SELECT * FROM ong WHERE usuario_cod_user = $cod_vol");
        $ong = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Ong($ong['idong'], $ong['cnpj'], $ong['nome_ong'], $ong['nome_responsavel'], NULL, $ong['causas_ong'],  $ong['email'],$ong['imagem'], $ong['telefone'], $ong['usuario_cod_user'], $ong['bio'] );
    }

    public function getOngs(){
        $consulta = $this->conexao->query("SELECT * FROM ong");
        $ongs = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $listaOngs = [];

        foreach ($ongs as $ong) {
            $listaOngs [] = new Ong($ong['idong'], $ong['cnpj'], $ong['nome_ong'], $ong['nome_responsavel'], NULL, $ong['causas_ong'],  $ong['email'],$ong['imagem'], $ong['telefone'], $ong['usuario_cod_user'], $ong['bio'] );
        }

        return $listaOngs;
    }
    public function excluirOng(int $codigo)
    {
        //DELETE FROM table_name WHERE condition;
        $this->conexao->query("DELETE FROM ong WHERE cod_ong = $codigo");
    }
}