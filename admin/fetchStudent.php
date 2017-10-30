<?php 
require_once "../include/Config.php";
$obj =new Config();
$studentRegNo=$_GET['reg'];
$sql="select * from student where reg LIKE '$studentRegNo%'";
    $res=mysql_query($sql);
    while($data=mysql_fetch_array($res))
    {
       echo "<li class='list-group-item' onclick='selectStudent(".$data['reg'].")'>".$data['name']."&nbsp; ".$data['reg']."</li>";
    }
?>