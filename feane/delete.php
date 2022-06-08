<?php
session_start();
 $email = $_SESSION["member_email"];
 require_once("conn.php");

 


if(isset($_GET["meal_id"])&&isset($_GET["sm_id"])&&isset($_GET["s_id"])){
    $mealid=$_GET["meal_id"];
    $smid=$_GET["sm_id"];
    $sid=$_GET["s_id"];
    $rs= $conn->query("delete from `cart` where email='$email' and meal_id='$mealid' and sm_id='$smid' and s_id='$sid'");

    if($rs){

    echo "<script>{window.alert('刪除成功！'); location.href='cart.php'}</script>";
 }
    else{
        echo "<script>{window.alert('刪除失敗！'); location.href='cart.php'}</script>";
    }

}

 
    
?>