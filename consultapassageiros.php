<?php
$con = mysqli_connect("fdb21.awardspace.net", "2723833_test","r02589633","2723833_test");
 $query = "SELECT ps_id,ps_nome,ps_dtnasc,ps_cpf,ps_sexo FROM passageiro ORDER BY ps_id";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>GabrielMonteiro_teste</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css"/>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
</head>
<body>
	<div id="principal">
		<div id="logodiv"><h2 id="logo"><span class="red">Corridas</span> Compartilhadas</h2></div>
			<div class="list">
				<div id="h3principal"><h3>Listar Passageiros</h3></div>
					<div class="infoconsulta">
						<table id="tabelaconsultamt">
							 <caption><strong>Passageiros Cadastrados</strong></caption>
							<thead>
							<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Data de nascimento</th>
							<th>CPF</th>
							<th>Sexo</th>
							</tr>
							</thead>
							<tbody>
							<?php									
 								$result = mysqli_query($con,$query);
 								while($row_query = mysqli_fetch_assoc($result)){ ?>
								<tr class="dif">							
								<td>									
 									 <?php echo $row_query['ps_id'];?>
 								</td>
 								<td>
 									 <?php echo $row_query['ps_nome'];?>
 								</td>
 								<td>
 									 <?php echo $row_query['ps_dtnasc'];?>
 								</td>
 								<td>
 									 <?php echo $row_query['ps_cpf'];?>
 								</td>
 								<td>
 									 <?php echo $row_query['ps_sexo'];?>
 								</td> 	
 							</tr>
 							<?php } ?>
 							</tbody>
 						</table>		
				</div>
			</div>
		<div class="classlink" style="margin-top: 25px;"><a href="index.html" class="link">Voltar</a></div>

	</div>
</body>	
</html>