<?php
require_once "Conexao.php";
require_once "Atividade.php";

class CrudAtividade{
    public $conexao;
    public $Atividade;

    public function __construct(){

        $this->conexao = conexao::getConexao();
    }

    public function salvar(Atividade $ativ){ //$cod_atividade = NULL, $titulo, $data, $hora, $hora, $num_vagas, $id_ong, $cod_categori
        $sql = "INSERT INTO `atividades` (`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`, `ong_idong`, `categoria_cod_categoria`) VALUES ('$ativ->descricao', 'pintura', '2018-11-23', '05:12:00', '5', '12', '4', '3');";

        $this->conexao->exec($sql);
    }

    public function editar(Voluntario $user){
        $this->conexao->exec("UPDATE usuario SET senha = '$user->senha', email = '$user->email', nome = '$user->nome', bio = '$user->bio', imagem = '$user->imagem', site = '$user->site' WHERE cod_user = $user->cod_user ");
    }

    public function getVoluntario( $cod_user){
        $consulta = $this->conexao->query("SELECT * FROM usuario WHERE cod_user = $cod_user");
        $user = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Voluntario($user['cod_user'], $user['senha'], $user['email'], $user['nome'], $user['user'],  $user['sexo'], $user['idade'],$user['bio'], $user['imagem'], $user['site'], $user['tipo_usuario_idtipo_usuario'] );

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
    public function excluirVol(int $codigo)
    {
        //DELETE FROM table_name WHERE condition;
        $this->conexao->query("DELETE FROM usuario WHERE cod_user = $codigo");
    }

}

}