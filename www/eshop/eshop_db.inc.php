<?php
//	DB_HOST - ��� �������� ������ ������� ��� ������ mySQL
	define("DB_HOST", "localhost");
//	DB_LOGIN - ��� �������� ������ ��� ���������� � �������� ��� ������ mySQL
	define("DB_LOGIN", "root");
//	DB_PASSWORD - ��� �������� ������ ��� ���������� � �������� ��� ������ mySQL
	define("DB_PASSWORD", "");
//  DB_NAME - ��� �������� ����� ���� ������
	define("DB_NAME", "eshop");
//  ��� ����� � ������� ������� �������������
    define("ORDERS_LOG", "orders.log");
//  ���������� ������� � ������� ������������. �������� �� ���������
    $count = 0;
//  ���������� � �������� ��� ������ mySQL ��������� ������������� ���������
    mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ("�� ���� ����������� � �������� ��!");
//  �������� �� ������� ��� ������ ���� ������ DB_NAME
    mysql_select_db(DB_NAME) or die(mysql_error());

    $sql = "SELECT count(*) FROM basket WHERE customer='".session_id()."'";
    $res = mysql_query($sql) or die(mysql_error());
    $count = mysql_result($res, 0, "count(*)");
?>