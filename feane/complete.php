<?php
session_start();
$link = mysqli_connect("localhost","root","","sa");

if(isset($_GET["order_id"])&&isset($_GET["time"])&&isset($_GET["email"])){
    $orderid=$_GET["order_id"];
    $time=$_GET["time"];
    $email=$_GET["email"];
    $sql = "update order1 set cond = '1' where email='$email' and time='$time' and order_id='$orderid'";
    $rs=mysqli_query($link,$sql);

    if($rs){
        echo "<script>{window.alert('訂單準備完成！'); location.href='manage.php'}</script>";
 }
    else{
        echo "<script>{window.alert('尚未準備完成，請再試一次！'); location.href='manage.php'}</script>";
    }

}











?>