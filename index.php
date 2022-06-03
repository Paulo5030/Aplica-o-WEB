<?php

include_once("configuracaoDoBancoDeDados.php");

$result = mysqli_query($mysqli, "SELECT * FROM usuarios ORDER BY id DESC"); 

?>

<html>
<head>	
	<title>Página Inicial</title>
	<style>

#font{
	border: solid #050505 1px;
	color: #ffffff;
}

table{
    width: 90%;
    
}
table th {
    font-weight: bold;
    background-color: #8a8884;
    color: #ffffff;
    font-family: 'Francois One', sans-serif;
}
table td{
  font-family: 'Francois One', sans-serif;  
    
}
	</style>
</head>

<body background="imagem.jpeg">
<a href="adicionar.html"><button>Adicionar Novo Dado</button></a><br/><br/>

	<table width='80%' border=0>

	<tr>
		<td><th><p style="color:black">Nome</p></th></td>
		<td><th><p style="color:black">Idade</p></th></td>
		<td><th><p style="color:black">Email</p></th></td>
		<td><th><p style="color:black">Atualizar</p></th></td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td><th>".$res['nome']."</th></td>";
		echo "<td><th>".$res['idade']."</th></td>";
		echo "<td><th>".$res['email']."</th></td>";	
		echo "<td><th><a href=\"editar.php?id=$res[id]\">Editar</a> | <a href=\"deletar.php?id=$res[id]\" onClick=\"return confirm('Você tem certeza que deseja deletar?')\">Deletar</a></td>";		
	}
	?>
	</table>
</body>
</html>