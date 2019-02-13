<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
<div id="container">

<p>Starting mvc in php</p>

<?php foreach($dbrecord as $row):
?>

<h1><?php  echo $row->title;?></h1>

<?php endforeach;?>
</div>

</body>
</html>
