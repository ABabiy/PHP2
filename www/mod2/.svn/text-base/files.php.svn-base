<?php
//print_r ($_FILES);
if($_FILES['uf']['error']==0){
    $t=$_FILES['uf']['tmp_name'];
    $n=$_FILES['uf']['name'];
    move_uploaded_file($t,$n);
}
?>

<form action="files.php" method="POST" enctype="multipart/form-data">
<input name="uf" type="file">
<input type="submit" value="Отправить">
</form>