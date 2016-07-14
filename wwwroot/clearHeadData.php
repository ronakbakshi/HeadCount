<?php
//conection
require_once('include/db.php'); 

$sql = "DELETE * FROM headdata"
mysql_query($sql);

 header("Location: adminClearData.php");
close();
?>