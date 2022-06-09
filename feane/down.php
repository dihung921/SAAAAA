<?php
session_start();
$link=mysqli_connect("localhost","root","","sa");
$email=$_SESSION["member_email"];


if(isset($_GET["meal_id"])){
    
    $meal_id=$_GET["meal_id"];
    $sql1="select * from cart where meal_id = '$meal_id' and email = '$email' ";
    $rs1=mysqli_query($link,$sql1);
    $row=mysqli_fetch_array($rs1);
    $amount=$row["amount"];
    if($amount > 1){
        $sql="update cart set amount = amount - 1 where meal_id = '$meal_id' and email = '$email'";
        $rs=mysqli_query($link,$sql);
        header("Location: cart.php");
    }

    else{
        header("Location: cart.php");
    }

    
     
}


?>