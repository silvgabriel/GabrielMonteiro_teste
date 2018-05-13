<?php
$con = mysqli_connect("fdb21.awardspace.net", "2723833_test","r02589633","2723833_test");


$mtid = $_POST['mtnomeid'];
$mtstatusnew = $_POST['mtstatusnew'];

$sql = "UPDATE motorista SET mt_status = '{$mtstatusnew}' WHERE mt_id = '{$mtid}'";
$result = mysqli_query($con,$sql);
if($result){
echo "<script>
alert('Alterado com sucesso!');
window.location.href = 'definirausencia.php';
</script>";
}else{
echo "<script>
alert('Erro ao alterar !');
window.location.href = 'definirausencia.php';
</script>";
}

mysqli_close($con);

?>