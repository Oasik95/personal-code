<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php 

	$LEAVING = $_REQUEST['LEAVING'];
	$GOING = $_REQUEST['GOING'];
	$TIME = $_REQUEST['TIME'];
	$DATE = $_REQUEST['DATE'];
	
	if ($LEAVING == null || $GOING == null || $TIME == null || $DATE == null) {
		echo "<h1 align= center> PLEASE ADD INFORMATION <br>";
	}else{
		$data = $LEAVING."|".$GOING."|".$TIME."|".$DATE."\r\n";
		$file = fopen('trin.txt', 'a');
		fwrite($file, $data);

		echo "<h1 align= center> NEW TRIP ADDED SUCCESSFULLY <h1/>";
	}



?>
<br/>
<div align="center"><a href="train.php"> BACK </a></div>
</body>
</html>