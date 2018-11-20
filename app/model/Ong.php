<?php
class Ong{

    public $cod_user;
    public $cnpj;
    public $nome_ong;
    public $nome_resp;
    public $local;
    public $causas;
    public $email;
    public $imagem;
    public $telefone;
    public $cod_vol;

    public function __construct($cod_user = null, $cnpj, $nome_ong, $nome_resp, $local, $causas, $email, $imagem, $telefone, $cod_vol){

        $this->cod_user  = $cod_user;
        $this->cnpj      = $cnpj;
        $this->nome_ong  = $nome_ong;
        $this->nome_resp = $nome_resp;
        $this->local     = $local;
        $this->causas    = $causas;
        $this->email     = $email;
        $this->imagem    = $imagem;
        $this->telefone  = $telefone;
        $this->cod_vol   = $cod_vol;

    }
}