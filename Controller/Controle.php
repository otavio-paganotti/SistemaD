<?php
class Controle{
	
	public $modelo;
	public $visao;
	
	public function __construct(){
		$this->modelo = new Modelo;
		$this->visao = new Visao;

		$acao=isset($_SESSION["acao"]) ? $_SESSION["acao"] : "paginainicial";


		//----------------------------------------------------------------------------------------		
		//  SWITCH CASE
		//----------------------------------------------------------------------------------------		
		switch($acao){

			case "paginainicial":
				//echo "Pagina Inicial";
				$this->visaoLogin();
			break;

			
			
			default:
				$this->visaoLogin1();
			break;
		}
	}

//----------------------------------------------------------------------------------------		
//  Funções
//----------------------------------------------------------------------------------------		
	
	public function visaoLogin(){
		$dados="";
		$this->visao->carrega("visao_login", $dados);
		//echo "Pagina Inicial";
	}
	
	public function visaoLogin1(){
		//$dados="";
		//$this->visao->carrega("visao_login", $dados);
		echo "Pagina Inicial 1";
	}
	
	
	
}

?>