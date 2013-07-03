<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?
	$fp = fopen("data.txt", "r") or die("Îøèáêà!");
	
	//
	
	fclose($fp);
	
		
?>
</BODY>
</HTML>