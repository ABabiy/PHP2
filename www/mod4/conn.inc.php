<?php
define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME","gbook");

mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die("Ошибка!");
mysql_select_db(DB_NAME) or die(mysql_error());
?>