<?php
session_start();
require_once("conn.php");
$email=$_SESSION["member_email"];

if(isset($_GET["order_id"])){
    $orderid=$_GET["order_id"];
    $rs = $conn->query("select * from detail where order_id='$orderid'");
    while($row=mysqli_fetch_array($rs)){
        $meal_id=$row["meal_id"];
        $sm_id=$row["sm_id"];
        $s_id=$row["s_id"];
        $note=$row["note"];
        $num=$row["amount"];
        $price=$row["price"];
        $rs1 = $conn->query("insert into `cart`(email, meal_id, sm_id, s_id, note, amount, price) values ('$email','$meal_id','$sm_id','$s_id','$note','$num','$price')");
        
    }
    header("Location:cart.php");
}
?>
