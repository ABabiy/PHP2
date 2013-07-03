<HTML>
<HEAD>
<TITLE>file</TITLE>
</HEAD>
<BODY>
<?
	
	$myFile = file("data.txt");
	echo '<pre>';
	print_r($myFile);
	echo '</pre>';
?>
</BODY>
</HTML>