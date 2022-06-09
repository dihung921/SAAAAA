<?php
session_start();
require_once("conn.php");

$email=$_SESSION["member_email"];

if(isset($_POST["mealname"]) && isset($_POST["sidemeal"]) && isset($_POST["sauce"]) && isset($_POST["note"]) && isset($_POST["num"])){
    
    $name=$_POST["mealname"];
    $sidemeal=$_POST["sidemeal"];
    $sauce=$_POST["sauce"];
    $note=$_POST["note"];
    $num=$_POST["num"];

    $meal= $conn->query("select * from `meal` where meal_id='$name'");
    $sm= $conn->query("select * from `sidemeal` where sm_id='$sidemeal'");
    $sau= $conn->query("select name from `sauce` where s_id='$sauce'"); 

    if($row=mysqli_fetch_array($meal)){
        $meal_id=$row["name"];
        $price=$row["price"];

        $_SESSION["mealname"]=$row["name"];
        $_SESSION["price"]=$row["price"];
    }

    if($row1=mysqli_fetch_array($sm)){
        $sm_id=$row1["name"];
        $_SESSION["sidemeal"]=$row1["name"];
    }
    if($row2=mysqli_fetch_array($sau)){
        $s_id=$row2["name"];

        $_SESSION["sauce"]=$row2["name"];
    }
    $total= $num * $price;
    $insert = $conn->query("insert into `cart`(email, meal_id, sm_id, s_id, note, amount, price) values ('$email','$meal_id','$sm_id','$s_id','$note','$num','$total')");
    if($insert){
        echo "<script>{window.alert('新增成功 $email, $meal_id, $sm_id, $s_id, $note, $num, $total'); location.href='index.php'}</script>";
    }

}

else if(isset($_POST["main"]) && isset($_POST["note"]) && isset($_POST["num"])){
    $name=$_POST["main"];
    $note=$_POST["note"];
    $num=$_POST["num"];

    $meal = $conn->query("select * from `meal` where meal_id='$name'");

    if($row=mysqli_fetch_array($meal)){
        $meal_id=$row["name"];
        $price=$row["price"];
    }

    $total= $num * $price;

    $insert = $conn->query("insert into `cart`(email, meal_id, sm_id, s_id, note, amount, price) values ('$email','$meal_id', '', '','$note','$num','$total')");
    if($insert){
        echo "<script>{window.alert('新增成功 $email, $meal_id, $sm_id, $s_id, $note, $num, $total'); location.href='index.php'}</script>";
    }

}

else if(isset($_POST["drink"]) && isset($_POST["temp"]) && isset($_POST["num"])){
    $name=$_POST["drink"];
    $note=$_POST["temp"];
    $num=$_POST["num"];

    $meal = $conn->query("select * from `meal` where meal_id='$name'");

    if($row=mysqli_fetch_array($meal)){
        $meal_id=$row["name"];
        $price=$row["price"];
    }

    $total= $num * $price;

    $insert = $conn->query("insert into `cart`(email, meal_id, sm_id, s_id, note, amount, price) values ('$email','$meal_id', '', '','$note','$num','$total')");
    if($insert){
        echo "<script>{window.alert('新增成功 $email, $meal_id, $sm_id, $s_id, $note, $num, $total'); location.href='index.php'}</script>";
    }



}

else if(isset($_POST["salad"]) && isset($_POST["sauce"]) && isset($_POST["note"]) && isset($_POST["num"])){
    $name=$_POST["salad"];
    $sauce=$_POST["sauce"];
    $note=$_POST["note"];
    $num=$_POST["num"];

    $meal = $conn->query("select * from `meal` where meal_id='$name'");
    $sau = $conn->query("select name from `sauce` where s_id='$sauce'");

    if($row=mysqli_fetch_array($meal)){
        $meal_id=$row["name"];
        $price=$row["price"];
    }

    if($row2=mysqli_fetch_array($sau)){
        $s_id=$row2["name"];

        $_SESSION["sauce"]=$row2["name"];
    }

    $total= $num * $price;

    $insert = $conn->query("insert into `cart`(email, meal_id, sm_id, s_id, note, amount, price) values ('$email','$meal_id', '', '$s_id','$note','$num','$total')");
    if($insert){
        echo "<script>{window.alert('新增成功 $email, $meal_id, $sm_id, $s_id, $note, $num, $total'); location.href='index.php'}</script>";
    }



}

else{
    echo "<script>{window.alert('新增失敗，請再試一次'); location.href='index.php'}</script>";
}
?>