<?php include("header.php"); ?>
<?php


//if ($_POST['nome']){
//if ($_POST['bilhete_identidade']){
//if ($_POST ['password']){
//if ($_POST ['mail']){
//if ($_POST ['telefone']{
//if ($_POST['Universidades_id_universidade']){			
			                   	  

$sql="INSERT INTO `utilizador`(`idUtilizador`, `nome`, `bilhete_identidade`, `password`, `mail`, `telefone`, `Universidades_id_universidade`) VALUES ('null','".$_POST['nome']."','".$_POST['bilhete_identidade']."','".$_POST['password']."','".$_POST['mail']."','".$_POST['telefone']."','".$_POST['Universidade']."')";

//$registo=mysql_query($sql,$ligacao);
//$resultado = mysql_select_db("mydb",$sql);
$reg_ins = sqlsrv_query($conn, $sql);
echo "$reg_ins registo inserido com sucesso";
//Check whether the query was successful or not
if($reg_ins === false) {
	die("Query failed");
	exit();
}else {
header("location: index.php");
}
?>
