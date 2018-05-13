<?php
$con = mysqli_connect("fdb21.awardspace.net", "2723833_test","r02589633","2723833_test");

$psnome = $_POST['psnome'];
$psdtnasc = $_POST['psnasc'];
$pscpf = $_POST['pscpf'];
$pssexo = $_POST['pssexo'];

$sql = "INSERT INTO passageiro (ps_nome,ps_dtnasc,ps_cpf,ps_sexo) VALUES 
								('{$psnome}','{$psdtnasc}','{$pscpf}','{$pssexo}')";
$result = mysqli_query($con,$sql);
if($result){
echo "<script>
alert('Cadastrado com sucesso!');
window.location.href = 'cadpassageiro.html';

</script>";
}else{
echo "<script>
alert('CPF já cadastrado!');
window.location.href = 'cadpassageiro.html';

</script>";
}

mysqli_close($con);

?>