<?php
//conection
require_once('include/db.php');

$var_fName = (string)$_POST["FirstName"];
$var_lName =(string)$_POST["LastName"];
$var_email =(string)$_POST["email"];
$var_username =(string)$_POST["username"];
$query = mysql_query("SELECT username FROM member WHERE username='$var_username'");

  if (mysql_num_rows($query) != 0)
  {
      $errmsg_arr[] = 'Username already exsists.';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
			}
  }
  else{

$var_password =(string)$_POST["password"];
$var_admin =(string)$_POST["administrator"];

if( $var_admin == 'Yes'){
$var_admin =(int) 1;
}else{
$var_admin =(int) 0;
}

$sql = "INSERT INTO member (fname, lname, username, contact ,  password, administrator)
VALUES ('$var_fName', '$var_lName','$var_username', '$var_email' , '$var_password', $var_admin )";
mysql_query($sql);
  }
 header("Location: adminAddUser.php");
close();
  
?>

