$(document).ready(function(){


$('#cadastro').click(function(){

    // conecta ao servidor
	var xmlhttp = new XMLHttpRequest();
 
	/* colocar na url os valores que quer passar para o servidor.
	   seu arquivo PHP deverá capturar os dados usando $_GET[]; */
    var url = "http://localhost/site_materialize-laranja/core/insertdados.php?nomecliente=" + $('#nomecliente').val() + "&idemail=" + $('#idemail').val() + "&idpacote=" + $('#idpacote').val() + "&identrada=" + $('#identrada').val() + "&idsaida=" + $('#idsaida').val(); 
	
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	alert("Gravado com sucesso no servidor");
	});


});
