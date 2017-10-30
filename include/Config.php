<?php
define ('user','root');
define ('password','');
define ('host','localhost');
define ('dbName','lms');
class Config{

    function __construct(){
        $conn=mysql_connect(host,user,password);
        if($conn)
        {
            mysql_select_db(dbName,$conn);
        }
        else
        {
            echo "Error in Connectivity".mysql_error();
        }
    }
    function getId($table)
    {
    $sql="select max(id) as maxId from ".$table.";";
    $res=mysql_query($sql);
    $data=mysql_fetch_assoc($res);
        $maxId=$data['maxId'];
        return $maxId+1;
    }
} 
?>