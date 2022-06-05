<?php
session_start();
$email = $_SESSION["member_email"];
$seatnum = $_SESSION["seatnum"];
$tot_price=$_SESSION["tot_price"];
$way=$_SESSION["way"];
$seatnum=$_SESSION["seatnum"];
$link = mysqli_connect("localhost","root","","sa");

$sql="select * from `cart` where email = '$email'";
$result=mysqli_query($link,$sql);
if($seatnum!=100){
    if (mysqli_num_rows($result) > 0) {
        $sql3="insert into `order1`(email, tot_price, cond, time, way ,seat) values ('$email', '$tot_price', 0, now(), '$way', '$seatnum')";
        $rs1=mysqli_query($link,$sql3);
        $orderid = mysqli_insert_id($link);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $meal=$row["meal_id"];
            $sm=$row["sm_id"];
            $s=$row["s_id"];
            $amount=$row["amount"];
            $note=$row["note"];
            $price = $row["price"];
            $sql2="insert into `detail`(order_id, meal_id, sm_id, s_id, amount, price, email, time, note) values ('$orderid', '$meal', '$sm', '$s', '$amount', '$price', '$email', now(), '$note')";
            $rs=mysqli_query($link,$sql2);
        }
    
        if($rs){
            echo "<script>{window.alert('成功送出訂單！'); location.href='index.php'}</script>";
        }
    
        else{
            echo "<script>{window.alert('送出失敗！'); location.href='cart.php'}</script>";
        }
    
        
    
        $sql4="delete from `cart` where email='$email'";
        $rs2=mysqli_query($link,$sql4);
    
    }
}
else{
    if (mysqli_num_rows($result) > 0) {
        $sql3="insert into `order1`(email, tot_price, cond, time, way, seat) values ('$email', '$tot_price', 0, now(), '$way', '')";
        $rs1=mysqli_query($link,$sql3);
        $orderid = mysqli_insert_id($link);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $meal=$row["meal_id"];
            $sm=$row["sm_id"];
            $s=$row["s_id"];
            $amount=$row["amount"];
            $note=$row["note"];
            $sql2="insert into `detail`(order_id, meal_id, sm_id, s_id, amount, email, time, note) values ('$orderid', '$meal', '$sm', '$s', '$amount', '$email', now(), '$note')";
            $rs=mysqli_query($link,$sql2);
        }
    
        if($rs){
            echo "<script>{window.alert('成功送出訂單！'); location.href='index.php'}</script>";
        }
    
        else{
            echo "<script>{window.alert('送出失敗！'); location.href='cart.php'}</script>";
        }
    
        
    
        $sql4="delete from `cart` where email='$email'";
        $rs2=mysqli_query($link,$sql4);
    
    }
}



?>