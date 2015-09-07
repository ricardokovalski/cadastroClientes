<?php

namespace RicardoKovalski\classes\cliente\interfaces;

interface EndCobrancaInterface{

	public function getCep();

    public function getEndereco();

	public function getCidade();

    public function getUf();

    public function getTipo();

    public function getImportancia();

    public function setCep($valor);

    public function setEndereco($valor);

    public function setCidade($valor);

    public function setUf($valor);

    public function setTipo($valor);

    public function setImportancia($valor);

}