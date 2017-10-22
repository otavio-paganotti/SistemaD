 <?php

class Modelo{

	public function __construct(){

	}

	public static function executa($classe, $funcao, $dados){
		require_once("$classe.php");
		$resposta=$classe::$funcao($dados);
		return $resposta;
	}

	public function login(){
		require_once("Usuario.php");
		extract($_POST);//Recebe todos os dados do post e cria uma variavel com o nome, ou seja post usuario transforma em variavel $usuario.
		$resposta=Usuario::login($usuario, $senha);
		return $resposta;
	}
	
	
	
}

?>