<?php
include('dbconfig.php');
//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
	$sql_query = "SELECT* FROM products WHERE pname LIKE '%{$query}%' OR description LIKE '%{$query}%'";
		$result = mysqli_query($db,$sql_query);
    
	$array = array();
    while ($row = mysqli_fetch_array($result)) {
		
        $array[] = array (
            'label' => $row['pname'].', '.$row['description'],
            'value' => $row['pname'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>
