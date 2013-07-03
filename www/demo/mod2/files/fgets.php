<HTML>
<HEAD>
<TITLE>fgets</TITLE>
</HEAD>
<BODY>
<?
	$myLine = array();
	if($myFile = fopen("data.txt", "r")){
		while(!feof($myFile)){
			$myLine[] = fgets($myFile, 255);
		}
		fclose($myFile);
		echo '<pre>';
		print_r($myLine);
		echo '</pre>';
	}	
?>
</BODY>
</HTML>