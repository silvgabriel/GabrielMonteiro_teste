<?php
$con = mysqli_connect("fdb21.awardspace.net", "2723833_test","r02589633","2723833_test");
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
			<div class="boxcad">
				<div id="h3principal"><h3>Cadastrar Corrida</h3></div>
					<div class="infocad">
						<form name="form1" method="POST" action="definirausencia2.php" >
								<table>
								<tr><td>Selecione o Mostorista: </td><td>
 								<select name="mtnomeid" style="width: 170px;">
 									<?php
 									 $query = "SELECT mt_id,mt_nome FROM motorista";
 									 $result = mysqli_query($con,$query);
 									 while($row_query = mysqli_fetch_assoc($result)){ ?>
 									 	<option value="<?php echo $row_query['mt_id']; ?>"><?php echo $row_query['mt_nome'];?></option>
 									 <?php } ?> 	
 								</select>								
								</td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>Defina o status: </td><td>
								 <select name="mtstatusnew" style="width: 170px;">
								 	<option value="1">Ativo</option>
 									<option value="0">Inativo</option>
 								</select>	
								</td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td><input style="padding: 5px 20px 5px 20px;" type="submit" value=" Salvar "/></td><td><input style="padding: 5px 20px 5px 20px;" type="button" value=" Voltar" onclick="retornaIndex()" /></td></tr>
								&nbsp;
								</table>
						</form>
					</div>
			</div>
	</div>
</body>	
</html>