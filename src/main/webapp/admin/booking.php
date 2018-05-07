<?php
require_once "../include/Config.php";
$obj =new Config();
if(isset($_POST))
{
    $student=$_POST['studentRegNo'];
    $book=$_POST['studentBookName'];
    //fetch Syudent Id and book id
    $sql_student_id="select * from book where title='$book';";
    $res=mysql_query($sql_student_id); 
    $data=mysql_fetch_array($res);
    $id=$data['id'];
    $no=$data['copies'];

    //get checkout max id
   $ch_id= $obj->getId('checkout');
    $sql_insert="insert into checkout VALUES ('$ch_id','$id','$student')";
    $res_ch=mysql_query($sql_insert);
    if($res_ch)
    {
        echo "1";
        $no-=1;
        //decrease no of copies available
        $sql_update="update book set copies='$no' where id='$id'";
        mysql_query($sql_update);
    }
    else{
        echo "0";
    }

} 
?>