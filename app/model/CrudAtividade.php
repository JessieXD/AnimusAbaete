<?php
require_once "Conexao.php";
require_once "Atividade.php";

class CrudAtividade{
    public $conexao;
    public $Atividade;

    public function __construct(){

        $this->conexao = conexao::getConexao();
    }

    public function salvar(Atividade $ativ){ //$cod_atividade = NULL, $titulo, $data, $hora, $hora, $num_vagas, $id_ong, $cod_categoria
        $sql = "INSERT INTO `atividades` (`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`, `ong_idong`, `categoria_cod_categoria`) VALUES ('$ativ->descricao', '$ativ->titulo', '$ativ->data', '$ativ->hora', '$ativ->num_vagas', '$ativ->cod_atividade', '$ativ->id_ong', '$ativ->cod_categoria');";

        $this->conexao->exec($sql);
    }

    public function editar(Atividade $ativ){//`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`, `ong_idong`, `categoria_cod_categoria`
        $this->conexao->exec("UPDATE `atividades` SET `descricao` = '$ativ->decricao', `titulo` = '$ativ->titulo', `data` = '$ativ->data', `hora` = '$ativ->hora', `nro_vagas` = '$ativ->num_vagas' cod_ativ = $ativ->cod_atividade ");
    }

    public function getAtividade( $cod_ativ){
        $consulta = $this->conexao->query("SELECT * FROM usuario WHERE cod_ativ = $cod_ativ");
        $ativ = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Voluntario($ativ['cod_ativ'], $ativ['senha'], $ativ['email'], $ativ['nome'], $ativ['ativ'],  $ativ['sexo'], $ativ['idade'],$ativ['bio'], $ativ['imagem'], $ativ['site'], $ativ['tipo_usuario_idtipo_usuario'] );

    }

    public function getAtividades(){
        $consulta = $this->conexao->query("SELECT * FROM usuario");
        $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $listaUsuarios = [];

        foreach ($usuarios as $ativ) {
            $listaUsuarios [] = new Voluntario($ativ['cod_ativ'], $ativ['senha'], $ativ['email'], $ativ['nome'], $ativ['ativ'],  $ativ['sexo'], $ativ['idade'],$ativ['bio'], $ativ['imagem'], $ativ['site']);
        }

        return $listaUsuarios;
    }
    public function excluirAtividade(int $codigo)
    {
        //DELETE FROM table_name WHERE condition;
        $this->conexao->query("DELETE FROM usuario WHERE cod_ativ = $codigo");
    }

}

}