<?php

function checkFileExist($url){
    if(file_exists($url)){
        require_once $url;
    }
    else{
        require_once "view/home.php";
    }
}
if(isset($_REQUEST['view'])){
    $url=$_REQUEST['view'];
    $pageReq= "view/".$url.".php";
    checkFileExist($pageReq);
}
else if(isset($_REQUEST['user']))
{
    $url=$_REQUEST['user'];
    $pageReq="user/".$url.".php";
    checkFileExist($pageReq);
}
else if (isset($_REQUEST['admin']))
{
    $url=$_REQUEST['admin'];
    $pageReq="admin/".$url.".php";
    checkFileExist($pageReq);
}
else{
    require_once "view/home.php";
}
?>