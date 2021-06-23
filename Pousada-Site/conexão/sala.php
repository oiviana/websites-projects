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

<div class="col-md-6 pt-br"></br></br></br></br></br></br></br></br></br></br></br></br>

<table class="table">
    <tr> 
        <td> <strong>De:</strong> </td> 
        <td> <strong>Para:</strong> </td> 
        <td> <strong>Mensagem:</strong> </td> 
    </tr> 
            
           
             <?php
    // Código para selecionar dados da tabela do BD
    // Esse código é sempre igual, muda apenas o SELECT da linha 46 e a saída do foreach
include("dados_conexao.php");
	try
	{
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
    $consultaSQL = "SELECT * FROM tb_mensagens 
        where  para='$_SESSION[txtpara]' or de='$_SESSION[usuario]'
                    ORDER BY id_mensagem DESC LIMIT 50"; //editar o comando SQL AQUI.
		$exComando = $conecta->prepare($consultaSQL); 
		$exComando->execute(array());
		
		foreach($exComando as $resultado) //executa um loop enquanto houver dados na tabela
		{
		  //exibe os dados do banco;
          echo "<tr>";
          echo "<td>" . $resultado['de']       . "</td>";
          echo "<td>" . $resultado['para']     . "</td>";
          echo "<td>" . $resultado['mensagem'] . "</td>";
          echo "</tr>";
		
		}	
		
	}catch(PDOException $erro)
	{
		echo("Errrooooo! foi esse: " . $erro->getMessage());
	}
?> 
               
               </table>


<div class="panel panel-footer" id="div9">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
 

</div>
</div></div>
   </body>
   </html>
   