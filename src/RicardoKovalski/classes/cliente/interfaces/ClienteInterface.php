<?php

namespace RicardoKovalski\classes\cliente\interfaces;

interface ClienteInterface{

	public function getNome();

    public function getEmail();

    public function getEndereco();

    public function getCep();

    public function getCidade();

    public function getUf();

    public function getTipo();

    public function getImportancia();
}