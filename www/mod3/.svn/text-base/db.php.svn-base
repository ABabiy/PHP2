<?php
/* Подключение к БД */
$conn = mysql_connect("localhost","root","") or die ("Ошибка!!!");
mysql_select_db("web") or die (mysql_error());
mysql_query("SET NAMES 'cp1251'") or die (mysql_error());
$sql = "SELECT * FROM teachers";
$result = mysql_query($sql);
mysql_close();

echo mysql_result($result,1,"name");
exit;

while ($row = mysql_fetch_assoc($result)){
    echo $row ["name"]."<br>";
}

?>