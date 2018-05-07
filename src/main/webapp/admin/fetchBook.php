<?php 
require_once "../include/Config.php";
$obj =new Config();
$book=$_GET['book'];
$sql="select * from book where title LIKE '%$book%'";
    $res=mysql_query($sql);
    while($data=mysql_fetch_array($res))
    {
        ?>
        <li class="list-group-item" onclick="selectBook('<?php echo $data['title']; ?>')"><?php echo $data['title']." Publisher:".$data['publisher'].
        " Author:".$data['author']." Remaining:".$data['copies']
        ; 
        
        ?></li>
        <?php
    }
?>