<HTML>
<HEAD>
<TITLE>fgetc</TITLE>
</HEAD>
<BODY>
<?
	$myCharacter = array();
	if($myFile = fopen("data.txt", "r")){
		while(!feof($myFile)){
			$myCharacter[] = fgetc($myFile);
		}
		fclose($myFile);
		echo '<pre>';
		print_r($myCharacter);
		echo '</pre>';
	}	
?>
</BODY>
</HTML>