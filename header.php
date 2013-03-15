
<?php



$serverName = "tcp:x0fuvnduvl.database.windows.net,1433";
   $userName = 'unicloudadmin@x0fuvnduvl';
   $userPassword = '123456As';
   $dbName = "mydb";
  
   $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);

   sqlsrv_configure('WarningsReturnAsErrors', 0);
   $conn = sqlsrv_connect( $serverName, $connectionInfo);
   if($conn === false)
   {
     FatalError("Failed to connect...");
   }

?>
