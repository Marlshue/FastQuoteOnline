<?php
include('dbconfig.php');
$profiles = "SELECT COUNT(*) FROM requisitions WHERE status ='Pending' ;";
 $query = mysqli_query($db, $profiles);

  foreach ($query as $row){
		$count = $row['COUNT(*)'] ;
		}

										?>