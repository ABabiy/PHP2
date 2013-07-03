<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Информация с другого сервера</title>
</head>

<body>
<h1>Информация с другого сервера</h1>
<?
define("url", "http://localhost/files/time-server.php");
$lines = @file(url);
if ($lines) {
	echo "Время машины " . url . ": " . $lines[0];
}
?>
</body>
</html>
