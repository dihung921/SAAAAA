<?php
session_start();
require_once("conn.php");
$email=$_SESSION["member_email"];


if(isset($_GET["meal_id"])){
    
    $meal_id=$_GET["meal_id"];
    $rs1 = $conn->query("select * from `cart` where meal_id = '$meal_id' and email = '$email' ");
    $row=mysqli_fetch_array($rs1);
    $amount=$row["amount"];
    $price = $row["price"];
    if($amount > 1){
        $rs=$conn->query("update `cart` set amount = amount - 1 where meal_id = '$meal_id' and email = '$email'");

        header("Location: cart.php");
    }

    else{
        header("Location: cart.php");
    }

    
     
}


?>