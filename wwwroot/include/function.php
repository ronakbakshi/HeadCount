<?php
function recordPost() {
    //log post
$var_user = (int)$_SESSION['SESS_MEMBER_ID'];
$sql = "SELECT countId FROM headdata WHERE countid=(SELECT MAX(countid) FROM headdata);";
$results = mysql_query($sql);
if(!results){
	die (" counld not retrieve last index");
}
$results = mysql_fetch_assoc($results);
$results = (int) $results["countId"];
$sql = "Insert into logentry (userID, CountId)
Values ($var_user,$results ) ";

mysql_query($sql);  
//end log post
}

?>