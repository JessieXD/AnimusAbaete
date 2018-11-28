<?php

class Atividade{
    public $cod_atividade;
    public $descricao;
    public $titulo;
    public $data;
    public $hora;
    public $num_vagas;
    public $id_ong;
    public $cod_categoria;
    public $imagem;

    public function __construct($cod_atividade = NULL, $descricao, $titulo, $data, $hora, $num_vagas, $id_ong, $cod_categoria, $imagem){

        $this->cod_atividade = $cod_atividade;
        $this->descricao     = $descricao;
        $this->titulo        = $titulo;
        $this->data          = $data;
        $this->hora          = $hora;
        $this->num_vagas     = $num_vagas;
        $this->id_ong        = $id_ong;
        $this->cod_categoria = $cod_categoria;
        $this->imagem        = $imagem;
    }

}