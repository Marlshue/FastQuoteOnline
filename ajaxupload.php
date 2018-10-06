<?php
 include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];
 if (isset($_POST['submitdoc'])){
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory
 
if(!empty($_FILES['cdoc'])){
$img = $_FILES['cdoc']['name'];
$tmp = $_FILES['cdoc']['tmp_name'];
 
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
 
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
 
if(move_uploaded_file($tmp,$path)) 
{
echo "<file src='$path' />";

//insert form data in the database
	
$insert = $db->query("update clients set cr14 = '".$path."' WHERE companyid = '$taskOwner'" );
 
echo $insert?'ok':'err';
}
	
} 
else 
{
echo 'invalid';
}
	echo ("<script> window.location='profiles.php';</script>");
}
 }
?>