 <?php
require_once("ConexaoBD.php");
 
class Usuario{
	
	private $usuario;
	private $senha;
	
	private function __construct(){}

	public static function login($usuario, $senha){
		try {
			$resultado=array();
			//$comandoSQL = "SELECT idUsuario, usuario, senha, nivel_acesso FROM usuario WHERE usuario=:usuario AND senha=:senha";
			$comandoSQL = "SELECT * FROM usuario WHERE usuario=:usuario AND senha=:senha";
			$resultadoSQL = ConexaoBD::getConexao()->prepare($comandoSQL);
			$resultadoSQL->bindValue(":usuario", $usuario);
			$resultadoSQL->bindValue(":senha", $senha);
			$resultadoSQL->execute();
			while($respostaSQL = $resultadoSQL->fetch(PDO::FETCH_OBJ)) {
				$resultado[]=$respostaSQL;
			}
		} catch (Exception $erroSQL) {
			echo "<br />Erro - Código: " . $erroSQL->getCode() . " - Mensagem: " . $erroSQL->getMessage();
			//GeraLog::getInstance()->inserirLog("Erro: Código: " . $erroSQL->getCode() . " Mensagem: " . $erroSQL->getMessage());
		}
		if(!empty($resultado[0])) $_SESSION['usuario']=$resultado[0];
		return $resultado;
	}
	

	public static function lista(){
		try {
			$resultado=array();
			$comandoSQL = "SELECT * FROM usuario ORDER BY nome DESC";
			$resultadoSQL = ConexaoBD::getConexao()->prepare($comandoSQL);
			$resultadoSQL->execute();
			while($respostaSQL = $resultadoSQL->fetch(PDO::FETCH_OBJ)) {
				$resultado[]=$respostaSQL;
			}
		} catch (Exception $erroSQL) {
			echo "<br />Erro - Código: " . $erroSQL->getCode() . " - Mensagem: " . $erroSQL->getMessage();
			//GeraLog::getInstance()->inserirLog("Erro: Código: " . $erroSQL->getCode() . " Mensagem: " . $erroSQL->getMessage());
		}
		return $resultado;
	}
	
	
	public static function usuarionovo($dados){
		extract($dados); //Recebe  array e cria uma variavel com o nome de cada item, ou seja item usuario transforma em variavel $usuario.
		date_default_timezone_set('America/Campo_Grande');
		if (empty($cpf)) $cpf="0";
		if ($cpf=="") $cpf="0";
		if (empty($endereco)) $endereco="";
		if (empty($observacao)) $observacao="";
		$data_nascimento = date("Y-m-d", strtotime($data_nascimento));
		try {
			$resultado=array();
			$comandoSQL = "INSERT INTO usuario (usuario, senha, nome, email, data_nascimento, sexo, curso, cpf, endereco, cidade, estado, nivel_acesso, data_cadastro, observacao) 
			VALUES (:usuario, :senha, :nome, :email, :data_nascimento, :sexo, :curso, :cpf, :endereco, :cidade, :estado, :nivel_acesso, :data_cadastro, :observacao)";
			$resultadoSQL = ConexaoBD::getConexao()->prepare($comandoSQL);
			$resultadoSQL->bindValue(":usuario", $usuario);
			$resultadoSQL->bindValue(":senha", $senha);
			$resultadoSQL->bindValue(":nome", $nome);
			$resultadoSQL->bindValue(":email", $email);
			$resultadoSQL->bindValue(":data_nascimento", $data_nascimento);
			$resultadoSQL->bindValue(":sexo", $sexo);
			$resultadoSQL->bindValue(":curso", $curso);
			$resultadoSQL->bindValue(":cpf", $cpf);
			$resultadoSQL->bindValue(":endereco", $endereco);
			$resultadoSQL->bindValue(":cidade", $cidade);
			$resultadoSQL->bindValue(":estado", $estado);
			$resultadoSQL->bindValue(":nivel_acesso", $nivel_acesso);
			$resultadoSQL->bindValue(":data_cadastro", date('Y-m-d H:i:s'));
			$resultadoSQL->bindValue(":observacao", $observacao);
		/*	$resultadoSQL->bindValue(":foto", $foto);
			$resultadoSQL->bindValue(":fotobinario", $fotobinario);
			$resultadoSQL->bindValue(":fotonome", $fotonome);
			$resultadoSQL->bindValue(":fototipo", $fototipo);
			$resultadoSQL->bindValue(":fototamanho", $fototamanho);
		*/
			$resultadoSQL->execute();
			} catch (Exception $erroSQL) {
			return "<br />Erro - Código: " . $erroSQL->getCode() . " - Mensagem: " . $erroSQL->getMessage();
			//GeraLog::getInstance()->inserirLog("Erro: Código: " . $erroSQL->getCode() . " Mensagem: " . $erroSQL->getMessage());
		}
		$resultado="Cadastrado com Sucesso!";
		return $resultado;
	}

	
	public static function usuarioatualiza($dados){
		//Recebe  array e cria uma variavel com o nome de cada item, ou seja item usuario transforma em variavel $usuario.
		extract($dados);
		$data_nascimento = date("Y-m-d", strtotime($data_nascimento));
		if (empty($cpf)) $cpf="0";
		if ($cpf=="") $cpf="0";
		if (empty($endereco)) $endereco="";
		if (empty($observacao)) $observacao="";
		$data_nascimento = date("Y-m-d", strtotime($data_nascimento));
		try {
			$resultado=array();
			$comandoSQL = "UPDATE usuario SET usuario=:usuario, senha=:senha, nome=:nome, email=:email, data_nascimento=:data_nascimento, sexo=:sexo, curso=:curso, cpf=:cpf, endereco=:endereco, cidade=:cidade, estado=:estado, nivel_acesso=:nivel_acesso, observacao=:observacao WHERE idUsuario=:idUsuario";
			$resultadoSQL = ConexaoBD::getConexao()->prepare($comandoSQL);
			$resultadoSQL->bindValue(":idUsuario", $idUsuario);
			$resultadoSQL->bindValue(":usuario", $usuario);
			$resultadoSQL->bindValue(":senha", $senha);
			$resultadoSQL->bindValue(":nome", $nome);
			$resultadoSQL->bindValue(":email", $email);
			$resultadoSQL->bindValue(":data_nascimento", $data_nascimento);
			$resultadoSQL->bindValue(":sexo", $sexo);
			$resultadoSQL->bindValue(":curso", $curso);
			$resultadoSQL->bindValue(":cpf", $cpf);
			$resultadoSQL->bindValue(":endereco", $endereco);
			$resultadoSQL->bindValue(":cidade", $cidade);
			$resultadoSQL->bindValue(":estado", $estado);
			$resultadoSQL->bindValue(":nivel_acesso", $nivel_acesso);
			$resultadoSQL->bindValue(":observacao", $observacao);
			$resultadoSQL->execute();
			} catch (Exception $erroSQL) {
			return "<br />Erro - Código: " . $erroSQL->getCode() . " - Mensagem: " . $erroSQL->getMessage();
			//GeraLog::getInstance()->inserirLog("Erro: Código: " . $erroSQL->getCode() . " Mensagem: " . $erroSQL->getMessage());
		}
		$resultado="Atualizado com Sucesso!";
		return $resultado;
	}


	public static function getusuario($idUsuario){
		try {
			$resultado=array();
			$comandoSQL = "SELECT * FROM usuario WHERE idUsuario=:idUsuario";
			$resultadoSQL = ConexaoBD::getConexao()->prepare($comandoSQL);
			$resultadoSQL->bindValue(":idUsuario", $idUsuario);
			$resultadoSQL->execute();
			while($respostaSQL = $resultadoSQL->fetch(PDO::FETCH_OBJ)) {
				$resultado[]=$respostaSQL;
			}
		} catch (Exception $erroSQL) {
			return "<br />Erro - Código: " . $erroSQL->getCode() . " - Mensagem: " . $erroSQL->getMessage();
			//GeraLog::getInstance()->inserirLog("Erro: Código: " . $erroSQL->getCode() . " Mensagem: " . $erroSQL->getMessage());
		}
		return $resultado;
	}

	

	
}


?>