<?php
include("functions.php");

 $dblink = db_connect("contactData");
 $sql="Select * from user_input where 1";
 $result=$dblink->query($sql) or
	 die("Something went wrong with $sql".$dblink->error);

 while ($data=$result->fetch_array(MYSQLI_ASSOC)) {
	 echo '<tr>';
	 echo '<td>'.$data['auto_id'].'</td>';
	 echo '<td>'.$data['first_name'].'</td>';
	 echo '<td>'.$data['last_name'].'</td>';
	 echo '<td>'.$data['email'].'</td>';
	 echo '<td>'.$data['username'].'</td>';
	 echo '<td>'.$data['comments'].'</td>';
	 echo '</tr>';
 }

?>