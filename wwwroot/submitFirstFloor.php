<?php
//conection
require_once('include/db.php'); 
require_once('auth.php');
include ('include/function.php');	



//area1 or iplace
$varCount  =(int)$_POST["area1"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (1, 1,$varCount )";
mysql_query($sql);

recordPost();



//area2 
$varCount  =(int)$_POST["area2"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (1, 2,$varCount )";
mysql_query($sql);
recordPost();
//area3
$varCount  =(int)$_POST["area3"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (1, 3,$varCount )";
mysql_query($sql);
recordPost();
//area4
$varCount  =(int)$_POST["area4"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (1, 4,$varCount )";
mysql_query($sql);
recordPost();
// area5
$varCount  =(int)$_POST["area5"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (1, 5,$varCount )";
mysql_query($sql);
recordPost();
//area6
$varCount  =(int)$_POST["area6"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (1, 6,$varCount )";
mysql_query($sql);

recordPost();
 header("Location:  http://198.209.246.99/home.php");
close();

?>