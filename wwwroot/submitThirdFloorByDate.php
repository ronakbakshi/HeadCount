<?php
//conection
require_once('include/db.php');
require_once('auth.php');
include ('include/function.php');	

//get time
$var_datetime = $_POST["date3"];
//area1 or iplace
$varCount  =(int)$_POST["floor3area1"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count, timestamp)
VALUES (3, 13,$varCount, '$var_datetime' )";
mysql_query($sql);

recordPost();
//area2 
$varCount  =(int)$_POST["floor3area2"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count,timestamp)
VALUES (3, 17,$varCount, '$var_datetime')";
mysql_query($sql);

recordPost();
//area3
$varCount  =(int)$_POST["floor3area3"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count,timestamp)
VALUES (3, 14,$varCount , '$var_datetime')";
mysql_query($sql);

recordPost();
//area4
$varCount  =(int)$_POST["floor3area4"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count ,timestamp)
VALUES (3, 15,$varCount, '$var_datetime' )";
mysql_query($sql);

recordPost();
// area5
$varCount  =(int)$_POST["floor3area5"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count ,timestamp)
VALUES (3, 11,$varCount , '$var_datetime')";
mysql_query($sql);

recordPost();
//area6
$varCount  =(int)$_POST["floor3area6"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count ,timestamp)
VALUES (3, 16,$varCount , '$var_datetime')";
mysql_query($sql);

recordPost();
//area7
$varCount  =(int)$_POST["floor3area7"];
$sql = "INSERT INTO headdata (floorNumber, areaNumber, count ,timestamp)
VALUES (3, 12,$varCount , '$var_datetime')";
mysql_query($sql);

recordPost();
 header("Location: adminInputDataByDate.php");
close();
?>