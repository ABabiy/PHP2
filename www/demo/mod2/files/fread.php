<HTML>
<HEAD>
<TITLE>fread</TITLE>
</HEAD>
<BODY>
<?
	$fp = fopen("data.txt", "r") or die("Îøèáêà!");
	
	$data = fread($fp, 5);
	
	echo $data;
	
	fclose($fp);
	
		
?>
</BODY>
</HTML>