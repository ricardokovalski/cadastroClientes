<?php

namespace RicardoKovalski\classes\databases;

class Conexao{

	private static $dsn = 'mysql:host=localhost;dbname=curso_php';
	private static $usuario = 'root';
	private static $senha = '';

	private static function conexao(){

		try {
            $pdo = new \PDO(self::$dsn, self::$usuario, self::$senha);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível conectar ao banco de dados ";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
	}

	public static function getDatabase(){
		return self::conexao();
	}
}