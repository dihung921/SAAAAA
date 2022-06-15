<?php
session_start();
require_once("conn.php");

$email = $_SESSION["member_email"];
$name = $_SESSION["member_name"];
$tot_price=$_SESSION["tot_price"];
$way=$_SESSION["way"];
$hopetime=$_POST["hopetime"];

$result = $conn->query("select * from `cart` where email = '$email'");
if($way != 0){
    if (mysqli_num_rows($result) > 0) {
        $rs1 = $conn->query("insert into `order1`(email, name, tot_price, hopetime, cond, time, note, feedback, way, seat) values ('$email', '$name', '$tot_price', '$hopetime', 0, now(), NULL, NULL, '$way', '$seatnum')");
        $orderid = mysqli_insert_id($conn);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $meal=$row["meal_id"];
            $sm=$row["sm_id"];
            $s=$row["s_id"];
            $amount=$row["amount"];
            $note=$row["note"];
            $price=$row["price"];
            $rs=$conn->query("insert into `detail`(order_id, meal_id, sm_id, s_id, amount, price, hopetime, email, time, note) values ('$orderid', '$meal', '$sm', '$s', '$amount', '$price', '$hopetime', '$email', now(), '$note')");
        }
    
        if($rs){
            echo "<script>{window.alert('成功送出訂單！'); location.href='index.php'}</script>";
        }
    
        else{
            echo "<script>{window.alert('送出失敗！'); location.href='cart.php'}</script>";
        }
    
        $rs2 = $conn->query("delete from `cart` where email='$email'");
    
    }
}
else{
    if (mysqli_num_rows($result) > 0) {
        $rs1 = $conn->query("insert into `order1`(email, name, tot_price, hopetime, cond, time, note, feedback, way, seat) values ('$email', '$name', '$tot_price', '$hopetime', 0, now(), NULL, NULL, '$way', '$seatnum')");
        $orderid = mysqli_insert_id($conn);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $meal=$row["meal_id"];
            $sm=$row["sm_id"];
            $s=$row["s_id"];
            $amount=$row["amount"];
            $note=$row["note"];
            $price = $row["price"];
            $rs = $conn->query("insert into `detail`(order_id, meal_id, sm_id, s_id, amount, price, hopetime, email, time, note) values ('$orderid', '$meal', '$sm', '$s', '$amount', '$price', '$hopetime', '$email', now(), '$note')");
        }
    
        if($rs){
            echo "<script>{window.alert('成功送出訂單！'); location.href='index.php'}</script>";
        }
    
        else{
            echo "<script>{window.alert('送出失敗！'); location.href='cart.php'}</script>";
        }
    
        $rs2 = $conn->query("delete from `cart` where email='$email'");
    
    }
}



?>