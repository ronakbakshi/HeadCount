<?php
//conection
require_once('include/db.php');
require_once('auth.php');
include ('include/function.php');	

//area1 or iplace
$varCount  =(int)$_POST["floor3area1"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (3, 13,$varCount )";
mysql_query($sql);

recordPost();
//area2 
$varCount  =(int)$_POST["floor3area2"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (3, 17,$varCount )";
mysql_query($sql);

recordPost();
//area3
$varCount  =(int)$_POST["floor3area3"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (3, 14,$varCount )";
mysql_query($sql);

recordPost();
//area4
$varCount  =(int)$_POST["floor3area4"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (3, 15,$varCount )";
mysql_query($sql);

recordPost();
// area5
$varCount  =(int)$_POST["floor3area5"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (3, 11,$varCount )";
mysql_query($sql);

recordPost();
//area6
$varCount  =(int)$_POST["floor3area6"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (3, 16,$varCount )";
mysql_query($sql);

recordPost();
//area7
$varCount  =(int)$_POST["floor3area7"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count)
VALUES (3, 12,$varCount )";
mysql_query($sql);

recordPost();
 header("Location: http://198.209.246.99/home.php");
close();
?>