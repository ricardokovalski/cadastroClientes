<?php

namespace RicardoKovalski\classes\cliente\interfaces;

interface ClienteJuridicoInterface{

	public function getNome();

    public function getCnpj();

    public function getEmail();

    public function getFax();

}