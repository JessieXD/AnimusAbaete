<?php
class UsuarioOng{

    public $cod_user;
    public $regiao;
    public $senha;
    public $email;
    public $nome;
    public $perfil; //OLHA ESSA PORCARIA
    public $fin_espe_ong;
    public $desc_ong;
    public $cnpj;
    public $end_sede;

    public function __construct($cod_user = null, $regiao, $senha, $email, $nome, $perfil, $fin_espe_ong, $desc_ong, $cnpj, $end_sede){

        $this->cod_user     = $cod_user;
        $this->regiao       = $regiao;
        $this->senha        = $senha;
        $this->email        = $email;
        $this->nome         = $nome;
        $this->perfil       = $perfil;
        $this->fin_espe_ong = $fin_espe_ong;
        $this->desc_ong     = $desc_ong;
        $this->cnpj         = $cnpj;
        $this->end_sede     = $end_sede;
    }
}