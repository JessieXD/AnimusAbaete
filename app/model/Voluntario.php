<?php
class  Voluntario{
    public $cod_user;
    public $senha;
    public $email;
    public $nome;
    public $user;
    public $sexo;
    public $idade;
    public $bio;
    public $imagem;
    public $site;

    public function __construct($cod_user = null, $senha, $email, $nome, $user, $sexo, $idade, $bio, $imagem, $site){

        $this->cod_user     = $cod_user;
        $this->senha        = $senha;
        $this->email        = $email;
        $this->nome         = $nome;
        $this->user         = $user;
        $this->sexo         = $sexo;
        $this->idade        = $idade;
        $this->bio          = $bio;
        $this->imagem       = $imagem;
        $this->site         = $site;
    }


}