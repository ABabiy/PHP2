<?php
	// ������ ������
	session_start();
	// ����������� ���������
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";

    $n = clearData($_POST["name"]);
    $e = clearData($_POST["email"]);
    $p = clearData($_POST["phone"]);
    $a = clearData($_POST["address"]);
    $c = session_id();
    $dt = time();

    $order = "$n|$e|$p|$a|$c|$dt\n";

    file_put_contents(ORDERS_LOG,$order,FILE_APPEND);

    resave($dt);
?>
<html>
<head>
	<title>���������� ������ ������</title>
</head>
<body>
	<p>��� ����� ������.</p>
	<p><a href="catalog.php">������� �������</a></p>
</body>
</html>