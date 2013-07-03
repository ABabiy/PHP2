<?php
//	DB_HOST - для хранения адреса сервера баз данных mySQL
	define("DB_HOST", "localhost");
//	DB_LOGIN - для хранения логина для соединения с сервером баз данных mySQL
	define("DB_LOGIN", "root");
//	DB_PASSWORD - для хранения пароля для соединения с сервером баз данных mySQL
	define("DB_PASSWORD", "");
//  DB_NAME - для хранения имени базы данных
	define("DB_NAME", "eshop");
//  имя файла с личными данными пользователей
    define("ORDERS_LOG", "orders.log");
//  количество товаров в корзине пользователя. значение по умолчанию
    $count = 0;
//  соединение с сервером баз данных mySQL используя вышесозданные константы
    mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ("Не могу соедениться с сервером БД!");
//  Выберите на сервере для работы базу данных DB_NAME
    mysql_select_db(DB_NAME) or die(mysql_error());

    $sql = "SELECT count(*) FROM basket WHERE customer='".session_id()."'";
    $res = mysql_query($sql) or die(mysql_error());
    $count = mysql_result($res, 0, "count(*)");
?>