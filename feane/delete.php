<?php

 $phone = $_GET["phone"];
 $link = mysqli_connect("localhost","root","12345678", "sa");
 $sql = "delete from detail where detail_id = '$detail_id'";
 if(mysqli_query($link,$sql))
 {
     header('location:message.php?method=message&message=刪除成功');
 }
    else{
        header('location:message.php?method=message&message=刪除失敗');
    }
    
?>