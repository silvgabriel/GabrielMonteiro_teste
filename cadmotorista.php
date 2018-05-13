<?php
$con = mysqli_connect("fdb21.awardspace.net", "2723833_test","r02589633","2723833_test");

$mtnome = $_POST['mtnome'];
$mtdtnasc = $_POST['mtnasc'];
$mtcpf = $_POST['mtcpf'];
$mtmodelcar = $_POST['mtmodelcar'];
$mtstatus = $_POST['mtstatus'];
$mtsexo = $_POST['mtsexo'];

$sql = "INSERT INTO motorista (mt_nome,mt_dtnasc,mt_cpf,mt_modelcar,mt_status,mt_sexo) VALUES 
								('{$mtnome}','{$mtdtnasc}','{$mtcpf}','{$mtmodelcar}','{$mtstatus}','{$mtsexo}')";
$result = mysqli_query($con,$sql);
if($result){
echo "<script>
alert('Cadastrado com sucesso!');
window.location.href = 'cadmotorista.html';
</script>";
}else{
echo "<script>
alert('CPF já cadastrado!');
window.location.href = 'cadmotorista.html';
</script>";
}

mysqli_close($con);

?>