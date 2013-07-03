<HTML>
<HEAD>
<TITLE>fgetss</TITLE>
</HEAD>
<BODY>
<PRE>
<?
	$myLine = array();
	if($myFile = fopen("data.html", "r")){
		while(!feof($myFile)){
			$myLine[] = fgetss($myFile, 1024, "<A>");
		}
		fclose($myFile);
		echo '<pre>';
		print_r($myLine);
		echo '</pre>';
	}	
?>
</PRE>
</BODY>
</HTML>