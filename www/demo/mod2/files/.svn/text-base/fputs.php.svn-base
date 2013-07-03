<HTML>
<HEAD>
<TITLE>fputs</TITLE>
</HEAD>
<BODY>
<?
	$myFile = fopen("newdata.txt","w");

	if(!($myFile)){
		print("file could not be opened");
		exit;
	}
	
	for($index=0; $index<10; $index++){
		fputs($myFile, "line $index\n");
	}

	fclose($myFile);
?>
</BODY>
</HTML>