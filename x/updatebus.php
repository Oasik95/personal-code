
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 

	$SERIAL = $_REQUEST['SERIAL'];
	$LEAVING = $_REQUEST['LEAVING'];
	$GOING = $_REQUEST['GOING'];
	$TIME = $_REQUEST['TIME'];
	$DATE = $_REQUEST['DATE'];
	
	if ($SERIAL == null || $LEAVING == null || $GOING == null || $TIME == null || $DATE == null) {
		echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=train.php> BACK </a></div>";
		return ;
	}else{
		$data = $LEAVING."|".$GOING."|".$TIME."|".$DATE."\r\n";
	
	}


	$i=0;$array=array();
	
	$read = fopen("bus.txt", "r") or die("can't open the file");
	while(!feof($read)) {

		$array[$i] = fgets($read);	
		++$i;
	}
	fclose($read);
	
	$write = fopen("bus.txt", "w") or die("can't open the file");
	$d=0;
	foreach($array as $a) {
		if($d==$SERIAL) {

			fwrite($write,$data);
		}else{
			fwrite($write,$a);
		}
		

		$d++;
	}
	fclose($write);
  
  echo "<h1 align= center > UPDATE SUCCESSFULLY <h1> <br>";
?>
<div align="center"><a href="bus.php"> BACK </a></div>
</body>
</html>