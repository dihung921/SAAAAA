<?php
session_start();
 $email = $_SESSION["member_email"];
 $link = mysqli_connect("localhost","root","12345678","sa");


 if(isset($_GET["meal_id"])&&isset($_GET["sm_id"])&&isset($_GET["s_id"])){
    $mealid=$_GET["meal_id"];
    $smid=$_GET["sm_id"];
    $sid=$_GET["s_id"];
    $sql = "delete from `cart` where email='$email' and meal_id='$mealid' and sm_id='$smid' and s_id='$sid'";

if(mysqli_query($link,$sql))
        {
            header('location:message.php?method=message&message=刪除成功');  
        }
else
        {
            header('location:message.php?method=message&message=刪除失敗'); 
        }
}

?> 