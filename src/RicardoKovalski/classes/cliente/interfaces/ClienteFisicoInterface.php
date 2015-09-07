<?php

namespace RicardoKovalski\classes\cliente\interfaces;

interface ClienteFisicoInterface{

	public function getNome();

    public function getSobrenome();

    public function getCpf();

    public function getEmail();

    public function getDtNascimento();

    public function getTelefone();

}