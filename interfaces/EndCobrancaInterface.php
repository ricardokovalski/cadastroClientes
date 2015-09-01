<?php

interface EndCobrancaInterface{

	public function getCep();

    public function getEndereco();

	public function getCidade();

    public function getUf();

    public function setCep($valor);

    public function setEndereco($valor);

    public function setCidade($valor);

    public function setUf($valor);

}