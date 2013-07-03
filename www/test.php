<?php
    $arr = array(
        "one"=>1,
        2=>"two",
        3=>true
    );
//    echo serialize($arr);

    setcookie("test","test");
    echo $_COOKIE ["test"];
?>