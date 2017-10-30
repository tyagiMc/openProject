<?php
require_once "../include/Config.php";
$obj =new Config();
    $book=$_POST['book'];
    $del="delete from checkout where id='$book';";
    $res=    mysql_query($del);  
    if($res)
    {
        echo "1";
    }
    ?>