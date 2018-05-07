<?php
require_once "../include/Config.php";
class Book{
  private $id; 
    function __construct(){
        $obj=new Config();
        $this->id= $obj->getId('book');
    }
    function insertBook($title,$author,$publisher,$copies){
       
        $sql_insert="INSERT into book Values ('$this->id','$title','$author','$publisher','$copies')";
       $res= mysql_query($sql_insert);
        if($res){
            echo 1;
        }    
    }
} 
        if(isset($_POST)){
            $handler=new Book();
            //get all data
            $title=$_POST['bookTitle'];
            $author=$_POST['bookAuthor'];
            $publisher=$_POST['bookPublisher'];
            $copies=$_POST['bookCopies'];
           // echo $title.$publisher.$author.$copies;
            $handler->insertBook($title,$author,$publisher,$copies);
                                }   
?>