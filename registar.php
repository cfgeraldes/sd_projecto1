<?php include("header.php"); ?>
<?php


//if ($_POST['nome']){
//if ($_POST['bilhete_identidade']){
//if ($_POST ['password']){
//if ($_POST ['mail']){
//if ($_POST ['telefone']{
//if ($_POST['Universidades_id_universidade']){			
			                   	  

$sql=mysql_query ("INSERT INTO `utilizador`(`idUtilizador`, `nome`, `bilhete_identidade`, `password`, `mail`, `telefone`, `Universidades_id_universidade`) VALUES ('null','".$_POST['nome']."','".$_POST['bilhete_identidade']."','".$_POST['password']."','".$_POST['mail']."','".$_POST['telefone']."','".$_POST['Universidade']."')");

//$registo=mysql_query($sql,$ligacao);
//$resultado = mysql_select_db("mydb",$sql);
$reg_ins = mysql_affected_rows();
echo "$reg_ins registo inserido com sucesso";
//Check whether the query was successful or not
if($reg_ins) {
header("location: index.php");
exit();
}else {
die("Query failed");
}
?>