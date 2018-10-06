<?php
 include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];
if (isset($_GET['subprofid'])){
$subprofid=$_GET["subprofid"];
	
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
	
$insert = $db->query("update subprofiles set cr14 = '".$path."' WHERE subprofid = '$subprofid'" );
 
echo $insert?'ok':'err';
	echo ("<script> alert('File entered');</script>");
}else{
	echo ("<script> alert('an error occurred');</script>");
}
	
} 
else 
{
echo 'invalid';
}
	
}else{
	
	echo ("<script> alert('No file entered');</script>");
}
	echo ("<script> window.location='subprofiles.php';</script>");
}

?>