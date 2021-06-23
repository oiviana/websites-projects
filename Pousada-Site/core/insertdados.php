<?php
	include("dadossql.php"); // Carrega os dados da conexão!	
	if ($_GET) // Testa se existe valores na URL!
	{
		try { // tenta fazer a conexão e executar o INSERT
			$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
			$comandoSQL = "INSERT INTO tb02_reserva(tb02_cliente, tb02_emailcadastrado, tb02_pacote,tb02_telefone, tb02_data_entrada, tb02_data_saida) VALUES ('$_GET[nomecliente]' ,'$_GET[idemail]' ,'$_GET[idpacote]' ,'$_GET[idtelefone]' , '$_GET[identrada]','$_GET[idsaida]');";
			$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			$grava->execute(array()); 			
		} catch(PDOException $e) { // casso retorne erro
			echo('Erro: ' . $e->getMessage()); 
		}
	} 
?>

