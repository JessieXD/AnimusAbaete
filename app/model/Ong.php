<?php
class Ong{

    public $cod_user;
    public $cnpj;
    public $nome_ong;
    public $nome_resp;
    public $local;
    public $causas;
    public $email;

    public function __construct($cod_user = null, $cnpj, $nome_ong, $nome_resp, $local, $causas, $email){

        $this->cod_user     = $cod_user;
        $this->regiao       = $cnpj;
        $this->senha        = $nome_ong;
        $this->email        = $nome_resp;
        $this->nome         = $local;
        $this->perfil       = $causas;
        $this->fin_espe_ong = $email;

    }
}