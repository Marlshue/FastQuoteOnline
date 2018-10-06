<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'fastqouteonline';

$db = new mysqli ($host,$user,$pass,$dbname);

if($db -> connect_error){
	die("Connection Failed :" .$db -> connect_error);
	}
?>
<?php
/*$host = 'localhost';
$user = 'fastquot_ushe';
$pass = 'zImS@$?2086';
$dbname = 'fastquot_clients';

$db = new mysqli ($host,$user,$pass,$dbname);

if($db -> connect_error){
	die("Connection Failed :" .$db -> connect_error);
	}*/
?>