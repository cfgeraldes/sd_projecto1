
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="all" />
<title>UniCloud Service</title>

<h1 align="center"> <b>Bem-Vindo</b>  </h1>
<table border="1" align="center">
<td style="background-color:#eeeeee;height:100px;width:250px;text-align:center; vertical-align:central" align="justify"; bordercolor="#0000CC">
<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 

$sql="SELECT idUtilizador FROM Utilizador WHERE nome='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("myusername");
//$_SESSION['login_user']=$myusername;

header("location: universidades.php");
}
	if($count==0) 
{
echo "Your Login Name or Password is invalid";
}
}
?>
<form action="" method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Submit "/><br />
<a href="registo.php">Registar</a>
</form>

	</tr>
	<tr>
</table>
</html>
