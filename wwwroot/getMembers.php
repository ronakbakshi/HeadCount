
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="5wEpRerEwACr"; // Mysql password
$db_name="headCount"; // Database name
/* 
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql = "SELECT mem_id, fname, lname FROM member";
$result = mysql_query($sql);

if ($result > 0) {
     echo "<table><tr><th>ID</th><th>Name</th></tr>";
     // output data of each row
     while($row = mysqli_fetch_array($result)) {
         echo "<tr><td>".$row['mem_id']."</td><td>" . $row['fname']. " " . $row['lname']. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
 */
 $result = mysql_query('SHOW TABLES',$connection) or die('cannot show tables');
while($tableName = mysql_fetch_row($result)) {

	$table = $tableName[0];
	
	echo '<h3>',$table,'</h3>';
	$result2 = mysql_query('SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
	if(mysql_num_rows($result2)) {
		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
		while($row2 = mysql_fetch_row($result2)) {
			echo '<tr>';
			foreach($row2 as $key=>$value) {
				echo '<td>',$value,'</td>';
			}
			echo '</tr>';
$conn->close();
?>  

</body>
</html>