<?php session_start();
if($_POST){
    
    
    $_SESSION['usuario']=$_POST['txtNome'];
    $_SESSION['cor']=$_POST['color'];

    
    include("dados_conexao.php");
try 
	{   // tenta fazer a conexão e executar o INSERT
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
		$comandoSQL = "INSERT INTO tb_nicks (nick, cor)
VALUES ('$_POST[txtNome]', '$_POST[color]'); ";
		$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
		$grava->execute(array());
        echo "<script> window.location='mensagem.php' </script>";
    }
catch(PDOException $e) { // caso retorne erro
		echo('Deu erro: ' . $e->getMessage()); 
	}
    
    
}

?>




<!DOCTYPE html1>
<html>
<head>
<title>Inicio</title>
<link rel="stylesheet" href="pri.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
    
<div class="col-md-6 pt-br"></br></br></br></br>
<center><h1> Chat Online </h1></center>
</div>

<div class="col-md-6 pt-br"><br><br>

<form method="POST">
<div class="panel panel-footer" id="div9">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
   </div>
<label>Digite seu nome:</label>
<input type="textNome" class="form-control" name="txtNome"><br>
<div class="panel panel-footer" id="div9">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
   </div>
<label>Escolha uma cor:</label><br><br>
<input type="color" class="from-control" name="color"><br><br>
<div class="panel panel-footer" id="div9">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
 

<center><button type="submit"class="btn btn-default">Entrar</button><center><br><br><br>
    <form/>
<div/>
<div/><div/>
   <body/>
   <html/>
   
   
   
   