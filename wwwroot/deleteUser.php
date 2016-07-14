<?php
//conection
require_once('include/db.php');
$personToDelete = (string)$_POST["user"];
$sql = "DELETE FROM member WHERE lName='$personToDelete'";

mysql_query($sql);


header("Location: http://198.209.246.99/adminRemoveUser.php");
close();
?>