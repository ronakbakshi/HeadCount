

<?php
//conection
require_once('include/db.php'); 
require_once('auth.php');
include ('include/function.php');	

//area1 or iplace
$varCount  =(int)$_POST["floor2area1"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (2, 10,$varCount)";
mysql_query($sql);

recordPost();
//area2 
$varCount  =(int)$_POST["floor2area2"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (2, 7,$varCount)";
mysql_query($sql);

recordPost();
//area3
$varCount  =(int)$_POST["floor2area3"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (2, 8,$varCount)";
mysql_query($sql);

recordPost();
//area4
$varCount  =(int)$_POST["floor2area4"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (2, 9,$varCount)";
mysql_query($sql);

recordPost();
 header("Location: http://198.209.246.99/home.php");
close();

?>