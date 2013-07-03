<HTML>
<HEAD>
<TITLE> Test page </TITLE>
</HEAD>

<BODY>

<?php 
function ReadDirectory($dir, $offs)
 {
  if ($d=opendir($dir))
   {
     while ($file=readdir($d))
      {
       if (($file=='.') or ($file=='..'))
        {
         continue;
	} 
	
       if (is_dir($dir."/".$file))
        {
	 print("<BR>$offs <B>$dir/$file</B>");
	 ReadDirectory($dir."/".$file, $offs."-");
	}
       else
        {
	 print("<BR> $offs $dir/$file");
	}
      } 
   }  
   closedir($d);
 }

ReadDirectory (".", $offs="");
   
?>



</BODY>
<HTML>

