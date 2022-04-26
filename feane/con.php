<?php
session_start();
$link=mysqli_connect("localhost","root");
mysqli_select_db($link,"sa");
$phone=$_SESSION["member_phone"];

if($isset["name"] && $isset["sidemeal"] && $isset["sauce"] && $isset["note"] && $isset["num"]){
    $name=$_POST["name"];
    $sidemeal=$_POST["sidemeal"];
    $sauce=$_POST["sauce"];
    $note=$_POST["note"];
    $num=$_POST["num"];
    $_SESSION["sidemeal"]=$sidemeal;
    $_SESSION["sauce"]=$sauce;
    $_SESSION["note"]=$note;
    $_SESSION["num"]=$num;
    $sql="select * from sidemeal where sm_id='$sidemeal'"
    $sql1="select * from meal where meal_id='$name'";
    $sql2="select name from sauce where s_id='$sauce'";
    $rs=mysqli_fetch_array($sql);
    $rs1=mysqli_fetch_array($sql1);
    $rs2=mysqli_fetch_array($sql2);
    if($rs){
        $sm_id=$row["name"];
        $_SESSION["sidemeal"]=$row["name"];
        $_SESSION["add_price"]=$row["add_price"];
    }
    if($rs1){
        $meal_id=$row["name"];
        $price=$row["price"];
        $_SESSION["name"]=$row["name"];
        $_SESSION["img"]=$row["img"];
        $_SESSION["price"]=$row["price"];
    }
    if($rs2){
        $s_id=$row["name"];
        $_SESSION["sauce"]=$row["name"];
    }
    $total= $num * $price;
    $sql4="insert into cart(phone, meal_id, sm_id, s_id, amount, price) values ('$phone','$meal_id','$sm_id','$s_id','$num','$total')";

}
?>