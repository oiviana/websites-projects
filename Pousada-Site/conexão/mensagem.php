<?php session_start();
if($_POST){
    
    include("dados_conexao.php");
try 
	{   // tenta fazer a conexão e executar o INSERT
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
		$comandoSQL = "INSERT INTO tb_mensagens (de, para, mensagem)
VALUES ('$_POST[nome]', '$_POST[txtpara]', '$_POST[txtmensagem]'); ";
		$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
		$grava->execute(array());
	} 
catch(PDOException $e) { // caso retorne erro
		echo('Deu erro: ' . $e->getMessage()); 
	}
    
    
}

?>

<!DOCTYPE html5>
<html>
<head>
<title>Inicio</title>
<link rel="stylesheet" href="pri.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 pt-br"></br></br>
<center><h1> Chat Online </h1></center>
</div>

<div class="col-md-6 pt-br"></br></br>

<form method="POST">
<div class="panel panel-footer" id="div9">

    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>

</div>

    <label>De:</label>

    <input readonly value="<?php echo $_SESSION['usuario'];?>" type="text" name="nome" class="form-control" required> 

<br>

    <div class="panel panel-footer" id="div9">
    
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
   
    </div>
    
    
    <label>Para:</label>
    
    <input type="text" class="form-control" name="txtpara"><br>
  
   
    <div class="panel panel-footer" id="div9">
    
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
    
    </div>
  
<br>
    
<label>Escreva sua mensagem:</label><br><br>
<textarea class="form-control" rows="5" id="comment" name="txtmensagem"></textarea><br><br>
<div class="panel panel-footer" id="div9">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
 

<center><button type="insert"class="btn btn-default">Enviar</button><center><br><br><br>
</div>
</div>
   
    <div id="atualizaMsg">
        <?php include("sala.php")?>;
    </div>
    
</div>
</body>
</html>
   
   