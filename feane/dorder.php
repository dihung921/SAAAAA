<?php
session_start();
require_once("conn.php");

if(isset($_GET["order_id"])&&isset($_GET["time"])&&isset($_GET["email"])){
    $orderid=$_GET["order_id"];
    $time=$_GET["time"];
    $email=$_GET["email"];

    $rs = $conn->query("delete from `order1` where email='$email' and time='$time' and order_id='$orderid'");
    $rs1 = $conn->query("delete from `detail` where email='$email' and time='$time' and order_id='$orderid'");

    if($rs && $rs1){
        echo "<script>{window.alert('訂單刪除成功！'); location.href='manage.php'}</script>";
 }
    else{
        echo "<script>{window.alert('訂單刪除失敗，請再試一次！'); location.href='manage.php'}</script>";
    }

}










?>