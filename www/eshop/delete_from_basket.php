<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";

    $id = clearData($_GET["id"], "i");
    basketDel($id);
    header("Location: basket.php");
?>