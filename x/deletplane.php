<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<?php

   $SERIAL = $_REQUEST['SERIAL'];	


   if ($SERIAL == null ) {
		echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=train.php> BACK </a></div>";
		return ;
}
	$i=0;$array=array();
	
	$read = fopen("plane.txt", "r") or die("can't open the file");
	while(!feof($read)) {

		$array[$i] = fgets($read);	
		++$i;
	}
	fclose($read);
	
	$write = fopen("plane.txt", "w") or die("can't open the file");
	$d=0;
	foreach($array as $a) {
		if($d!=$SERIAL) fwrite($write,$a);

		$d++;
	}
	fclose($write);
   echo "<h1 align= center> DELET SUCCESSFULLY <h1/>";
  

?>
<div align="center"><a href="plane.php"> BACK </a></div>
</body>
</html>