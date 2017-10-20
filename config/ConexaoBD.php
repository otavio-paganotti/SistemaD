<?php
# Informa qual o conjunto de caracteres serс usado.
header('Content-Type: text/html; charset=utf-8');

class ConexaoBD{
	//Variavel que representa a conexao com o Banco de dados. Garantindo que existe apenas uma conexao atraves do mщtodo getConexao().
	public static $conexao;
	
	private function __construct(){}
	
	//Funчуo de Conexуo
	
	public static function getConexao() {
		if (!isset(self::$conexao)) {
			$servidor="localhost";
			$usuario="root";
			$senha="root";
			$basededados="sistemad";
			//Realiza conexao com o BD e define atrinutos
			try {
			self::$conexao = new PDO("mysql:host={$servidor}; dbname={$basededados}", $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$conexao->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			} catch(PDOException $e) {
				return $e->getMessage();
			}
		}
		return self::$conexao;
	}

}
?>