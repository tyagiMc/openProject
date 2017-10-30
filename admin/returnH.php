<?php
require_once "../include/Config.php";
$obj=new Config();
if(isset($_POST))
{
    $reg=$_POST['studentRegNo'];
    //echo $reg;
    //check whether book present or not for this entry
    $sql_check="select * from checkout where student='$reg';";
    //echo $sql_check;
    $res_check=mysql_query($sql_check);
    $count=mysql_num_rows($res_check);
    if($count>0)
    {
        while($data=mysql_fetch_assoc($res_check))
        {
           
            //get book details
            $bookId=$data['book'];
            $sql="select * from book where id='$bookId';";
            $res=mysql_query($sql);
            $data_m=mysql_fetch_array($res);
            $bookName=$data_m['title'];
            $checkout_id=$data['id'];
            echo "<li class='list-group-item'>".$data['student']." Book Name :". $bookName.
            "<a class='btn btn-sm btn-danger pull-right' onclick='returnBook(".$checkout_id.")'>x</a></li>";
        }
    }
    else if($count==0)
    {
        echo -1;
    }

} 
?>