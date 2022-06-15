<?php
session_start();
require_once("conn.php");

if(isset($_GET["order_id"])&&isset($_GET["time"])&&isset($_GET["email"])){
    $orderid=$_GET["order_id"];
    $time=$_GET["time"];
    $email=$_GET["email"];
    
    $rs = $conn->query("update order1 set cond = '2' where email='$email' and time='$time' and order_id='$orderid'");

    if($rs){
        echo "<script>{window.alert('顧客已取餐！'); location.href='already.php'}</script>";
 }
    else{
        echo "<script>{window.alert('尚未取餐完成，請再試一次！'); location.href='already.php'}</script>";
    }

}





?>