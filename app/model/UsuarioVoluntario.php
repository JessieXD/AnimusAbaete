<?php
class UsuarioVoluntario{
    public $cod_user;
    public $regiao;
    public $senha;
    public $email;
    public $nome;
    public $perfil; //OLHA ESSA PORCARIA
    public $user;
    public $sexo;
    public $idade;
    public $bio;

    public function __construct($cod_user = null, $regiao, $senha, $email, $nome, $perfil, $user, $sexo, $idade, $bio){

        $this->cod_user     = $cod_user;
        $this->regiao       = $regiao;
        $this->senha        = $senha;
        $this->email        = $email;
        $this->nome         = $nome;
        $this->perfil       = $perfil;
        $this->user         = $user;
        $this->sexo         = $sexo;
        $this->idade        = $idade;
        $this->bio          = $bio;
    }


}