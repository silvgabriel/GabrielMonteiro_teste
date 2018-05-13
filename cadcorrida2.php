<?php
$con = mysqli_connect("fdb21.awardspace.net", "2723833_test","r02589633","2723833_test");

$crnomemt = $_POST['crnomemt'];
$crnomeps = $_POST['crnomeps'];
$crdata = $_POST['crdata'];
$crvalor = $_POST['crvalor'];

$sql = "INSERT INTO corrida (cr_nomemt,cr_nomeps,cr_data,cr_valor) VALUES 
								('{$crnomemt}','{$crnomeps}','{$crdata}','R$: {$crvalor}')";
$result = mysqli_query($con,$sql);
if($result){
echo "<script>
alert('Cadastrado com sucesso!');
window.location.href = 'cadcorrida.php';

</script>";
}else{
echo "<script>
alert('CPF já cadastrado!');
window.location.href = 'cadcorrida.php';

</script>";
}

mysqli_close($con);

?>