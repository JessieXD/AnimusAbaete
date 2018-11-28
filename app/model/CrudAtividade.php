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
        $sql = "INSERT INTO `atividades` (`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`, `ong_idong`) VALUES ('$ativ->descricao', '$ativ->titulo', '$ativ->data', '$ativ->hora', '$ativ->num_vagas', '$ativ->cod_atividade', '$ativ->id_ong');";

        $this->conexao->exec($sql);
    }

    public function editar(Atividade $ativ){//`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`
        $this->conexao->exec("UPDATE atividades SET descricao = '$ativ->descricao', titulo = '$ativ->titulo', data = '$ativ->data', hora = '$ativ->hora', nro_vagas = '$ativ->num_vagas', imagem = '$ativ->imagem' WHERE atividades.cod_atividade = '$ativ->cod_atividade';");
    }

    public function getAtividade( $cod_ativ){
        $consulta = $this->conexao->query("SELECT * FROM atividades WHERE cod_atividade = $cod_ativ");
        $ativ = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Atividade($ativ['cod_atividade'], $ativ['descricao'], $ativ['titulo'], $ativ['data'], $ativ['hora'],  $ativ['nro_vagas'], $ativ['ong_idong'], $ativ['categoria_cod_categoria'], $ativ['imagem']);

    }

    public function getAtividades($ong){
        $consulta = $this->conexao->query("SELECT * FROM atividades WHERE ong_idong = $ong");
        $atividades = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $listaAtividades = [];

        foreach ($atividades as $ativ) { //$cod_atividade = NULL, $descricao, $titulo, $data, $hora, $num_vagas, $id_ong, $cod_categoria
            $listaAtividades [] = new Atividade($ativ['cod_atividade'], $ativ['descricao'], $ativ['titulo'], $ativ['data'], $ativ['hora'],  $ativ['nro_vagas'], $ativ['ong_idong'], $ativ['categoria_cod_categoria'], $ativ['imagem']);
        }

        return $listaAtividades;
    }
    public function excluirAtividade($codigo)
    {
        //DELETE FROM table_name WHERE condition;
        $this->conexao->query("DELETE FROM atividades WHERE atividades.cod_atividade = $codigo");
    }

}

