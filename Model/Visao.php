<?php

class Visao{
		
	public function carrega($sessao, $arquivophp, $dados){
		require("Views//$sessao//$arquivophp.php");
	}
	
}

?>