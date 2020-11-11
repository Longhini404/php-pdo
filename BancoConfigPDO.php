<?php

function getConnection() {
	$host = "localhost";
	$database   = "loja";
	$user  = "root";
	$password  = "";

	try {
		$conn = new PDO("mysql:host=$host; dbname=$database", $user, $password);
		return array("conexao" => $conn, "mensagem" => "Sucesso!");
	} catch (PDOException $e) {
		return array("conexao" => null, "mensagem" => "Erro:" . $e->getMessage());
	}
}

$teste = getConnection();
print_r($teste["mensagem"]);

?>
