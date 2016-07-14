<?php
//conection
require_once('include/db.php');
$var_startDate = $_POST["startDate"];
$var_endDate = $_POST["endDate"];

try {
      $var_firstFloor = $_POST["firstFloor"];

    } catch (Exception $e) {
        
    }
	try {
      $var_secondFloor = $_POST["secondFloor"];

    } catch (Exception $e) {
        
    }
	try {
      $var_thirdFloor = $_POST["thirdFloor"];

    } catch (Exception $e) {
        
    }



$sql = "Select * from headdata where (timestamp >= '$var_startDate' AND timestamp <= '$var_endDate') AND 
(FloorNumber = '$var_firstFloor' or FloorNumber = '$var_secondFloor' or FloorNumber = '$var_thirdFloor') ";

//

$result = mysql_query($sql); 
if (!$result) die('Couldn\'t fetch records'); 
$num_fields = mysql_num_fields($result); 
$headers = array(); 
for ($i = 0; $i < $num_fields; $i++) 
{     
       $headers[] = mysql_field_name($result , $i); 
} 
$fp = fopen('php://output', 'w'); 
if ($fp && $result) 
{     
       header('Content-Type: text/csv');
       header('Content-Disposition: attachment; filename="export.csv"');
       header('Pragma: no-cache');    
       header('Expires: 0');
       fputcsv($fp, $headers); 
       while ($row = mysql_fetch_row($result)) 
       {
          fputcsv($fp, array_values($row)); 
       }
die; 
} 

?>