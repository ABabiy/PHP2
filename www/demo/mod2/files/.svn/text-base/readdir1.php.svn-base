<HTML>
<HEAD>
<TITLE> Test page </TITLE>
</HEAD>

<BODY>

<?php 

$d=opendir(".");
	while ($name=readdir($d)){
		if (is_dir($name)){
			print("<b>[$name]</b><br>");
		}else{
			print("$name<br>");
		}
	} 
closedir($d);
   
?>



</BODY>
<HTML>

