<?php
// ��� ��� ���� ������� - ����� ���������� � ���������� ���������
//echo $_SESSION["pages"];
$pages=explode("|",$_SESSION["pages"]);
if(is_array($pages)){
    array_pop($pages);
    echo "<ol>";
    foreach($pages as $page){
        echo "<li>$page</li>";
    }
    echo "</ol>";
}
var_dump($pages);

/*
������� 2
- � ������ ���������� ������ 
	- � ������, ���������, ���������� �� �� � ������
	- � ������, ������������ � � ������
- �������� � ����� ������ ���� ���������� ������������� �������

*/
?>