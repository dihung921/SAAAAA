<?php
session_start();
$link = mysqli_connect("localhost","root","12345678","sa");


if(isset($_GET["order_id"])&&isset($_GET["time"])&&isset($_GET["email"])){
    $orderid=$_GET["order_id"];
    $time=$_GET["time"];
    $email=$_GET["email"];
    $sql = "delete from `order1` where email='$email' and time='$time' and order_id='$orderid'";
    $rs=mysqli_query($link,$sql);
    $sql1="delete from `detail` where email='$email' and time='$time' and order_id='$orderid'";
    $rs1=mysqli_query($link,$sql1);

    if($rs && $rs1){
        echo "<script>{window.alert('訂單刪除成功！'); location.href='manage.php'}</script>";
 }
    else{
        echo "<script>{window.alert('訂單刪除失敗，請再試一次！'); location.href='manage.php'}</script>";
    }

}










?>