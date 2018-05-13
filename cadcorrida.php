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
    <script type="text/javascript">

        $(function () {
            $("#date").datepicker({
        		yearRange: "-100:+0",
        		showOtherMonths: true,
        		selectOtherMonths: true,
        		changeMonth: true,
        		changeYear: true,
        		dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                nextText: 'Próximo',
                prevText: 'Anterior'
             });
        });

    </script>
</head>
<body>
	<div id="principal">
		<div id="logodiv"><h2 id="logo"><span class="red">Corridas</span> Compartilhadas</h2></div>
			<div class="boxcad">
				<div id="h3principal"><h3>Cadastrar Corrida</h3></div>
					<div class="infocad">
						<form name="form1" method="POST" action="cadcorrida2.php" onsubmit="return checkformCR()" >
								<table>
								<tr><td>Selecione o Mostorista: </td><td>
 								<select name="crnomemt" id="getValor2"  style="width: 170px;">
 									<?php
 									 $query = "SELECT mt_id,mt_nome FROM motorista WHERE mt_status=1";
 									 $result = mysqli_query($con,$query);
 									 while($row_query = mysqli_fetch_assoc($result)){ ?>
 									 	<option value="<?php echo $row_query['mt_nome']; ?>"><?php echo $row_query['mt_nome'];?></option>
 									 <?php } ?> 	
 								</select>								
								</td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>Selecione o Passageiro: </td><td>
								 <select name="crnomeps" id="getValor1" style="width: 170px;">
 									<?php
 									 $query = "SELECT ps_id,ps_nome FROM passageiro";
 									 $result = mysqli_query($con,$query);
 									 while($row_query = mysqli_fetch_assoc($result)){ ?>
 									 	<option value="<?php echo $row_query['ps_nome']; ?>"><?php echo $row_query['ps_nome'];?></option>
 									 <?php } ?> 	
 								</select>	
								</td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>Data: </td><td><input type="text" id="date" class="text required" name="crdata" maxlength="10"/></td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>Valor da corrida: </td><td><input type="text" id="valor" placeholder="separe o valor com . (ponto)" class="text required" name="crvalor" maxlength="15"  onkeypress='return event.charCode >= 46 && event.charCode <= 57'/></td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td><input style="padding: 5px 20px 5px 20px;" type="submit" value=" Cadastrar "/></td><td><input style="padding: 5px 20px 5px 20px;" type="button" value=" Cancelar" onclick="retornaIndex()" /></td></tr>
								&nbsp;
								</table>
						</form>
					</div>
			</div>
	</div>
</body>	
</html>