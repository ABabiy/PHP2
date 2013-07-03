<?php
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
    // Получите и отфильтруйте данные из формы
    $a = clearData($_POST["autor"]);
    $t = clearData($_POST["title"]);
    $py = clearData($_POST["pubyear"],"i");
    $p = clearData($_POST["price"],"i");
    // сохранения нового товара в БД
    save($a, $t, $py, $p);
    // Переадресуйте пользователя на страницу добавления нового товара (add2cat.php)
    header("Location: add2cat.php");
?>