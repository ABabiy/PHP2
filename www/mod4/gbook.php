<?php
/* ������� 1
- ������������ � ������� mySQL
- �������� �������� ���� ������ 'gbook'
- ���������, ���� �� ���������� ������� ���������� �����
- ���� ��� ���� ����������: ������������ ���������� ������,
  ����������� SQL-�������� �� ������� ������ � ������� msgs
  � ��������� ���. ����� ����� ��������� ���������� ��������, ����� ���������� �� ����������, ���������� ����� �����
*/
/*define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");

mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die(mysql_error());

mysql_select_db('gbook') or die(mysql_error());*/

include("conn.inc.php");

function clearData($data, $type="s"){
    switch ($type){
        case "s":
            $data = trim(strip_tags($data));break;
        case "i":
            $data = abs((int)$data);break;
    }
    return $data;
}

if (!empty($_POST['name']) and !empty($_POST['email'])) {
    $n=clearData($_POST['name']);
    $e=clearData($_POST['email']);
    $m=clearData($_POST['msg']);
    $sql="INSERT INTO msgs (name,email,msg)
                    VALUES ('$n','$e','$m')";
    mysql_query($sql) or die(mysql_error());
    header("Location: gbook.php");
    exit;
}

if (isset($_GET["del"])){
    $id = clearData($_GET["del"], "i");
    if ($id>0){
        $sql = "DELETE FROM msgs WHERE id=$id";
        mysql_query($sql) or die(mysql_error());
    }
    header("Location: gbook.php");
    exit;
}
/*
������� 3
- ���������, ��� �� ������ ������� GET �� �������� ������
- ���� �� ���: ������������ ���������� ������,
  ����������� SQL-�������� �� �������� ������ � ��������� ���.
  ����� ����� ��������� ���������� ��������, ����� ���������� �� ����������, ���������� ������� GET
*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>�������� �����</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>�������� �����</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

���� ���:<br />
<input type="text" name="name" /><br />
��� E-mail:<br />
<input type="text" name="email" /><br />
���������:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="��������!" />

</form>

<?php
/*
������� 2
- ����������� SQL-�������� �� ������� ���� ������ �� �������
  msgs � �������� ������� � ��������� ���. ��������� �������
  ��������� � ����������.
- �������� ���������� � ��
- �������� ���������� ����� ���������� ������� � �������� ��� �� �����
- � ����� �������� ��������� ��� ���������� ������� � ���� �������������� �������.
  ����� �������, ��������� ���� ����, �������� �� ����� ��� ���������, � ����� ����������
  �� ������ ������� ���������. ����� ������� ��������� ����������� ������ ��� �������� ����
  ������. ���������� �� �������������� ���������� ��������� ����������� ������� GET.
*/
$sql="SELECT * FROM msgs ORDER BY id DESC";

$users = mysql_query($sql) or die(mysql_error());
echo ("<p>����� �������: ". mysql_num_rows($users)). "</p>";
mysql_close();
while ($user = mysql_fetch_assoc($users)){
    $msg = nl2br($user["msg"]);
?>
<hr />
<p>
    <a href='mailto:<?= $user["email"]?>'>
    <?= $user["name"] ?>
    </a><br />
    <?=$msg?>
</p>
<p align="right">
    <a href='gbook.php?del=<?=$user["id"]?>'>
    �������
    </a>
</p>
<?php
}
?>

</body>
</html>