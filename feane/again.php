<?php
session_start();
$link=mysqli_connect("localhost","root","12345678","sa");
$email=$_SESSION["member_email"];

if(isset($_GET["order_id"])){
    $orderid=$_GET["order_id"];
    $sql="select * from `detail` where order_id='$orderid'";
    $rs=mysqli_query($link,$sql);
    while($row=mysqli_fetch_array($rs)){
        $meal_id=$row["meal_id"];
        $sm_id=$row["sm_id"];
        $s_id=$row["s_id"];
        $note=$row["note"];
        $num=$row["amount"];
        $price=$row["price"];
        $sql1="insert into `cart`(email, meal_id, sm_id, s_id, note, amount, price) values ('$email','$meal_id','$sm_id','$s_id','$note','$num','$price')";
        $rs1=mysqli_query($link,$sql1);
    }
    header("Location:cart.php");
}
?>
