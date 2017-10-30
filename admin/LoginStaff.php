<?php
require_once "../include/Config.php";
class LoginStaff{
    function __construct(){
        $obj=new Config();
    }
    function login($loginId,$loginPassword){
        $sql_login="select * from staff where uid ='$loginId' && password='$loginPassword';";
        $res_login=mysql_query($sql_login);
        $count=mysql_num_rows($res_login);
        if($count==1)
        {
            echo 0; //Means Succcess full Login
        }
        else{
            echo 1; //Means Failed
        }
    }
    
} 
if(isset($_POST))
{
    $handler=new LoginStaff();
    $loginId=$_POST['loginId'];
    $loginId=mysql_real_escape_string($loginId);
    $loginPassword=$_POST['loginPassword'];
    $loginPassword=md5($loginPassword);
  $handler->login($loginId,$loginPassword);
}
?>