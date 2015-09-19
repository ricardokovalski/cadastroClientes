<?php

namespace RicardoKovalski\classes\cliente\types;

Class ClienteJuridico extends Cliente{

	protected $cnpj;
    protected $fax;

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
        return $this;
    }

    public function setFax($fax){
        $this->fax = $fax;
        return $this;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function getFax(){
        return $this->fax;
    }

}