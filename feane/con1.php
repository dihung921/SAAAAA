<?php
session_start();
$link=mysqli_connect("localhost","root","12345678","sa");

$phone=$_SESSION["member_phone"];

if(isset($_POST["mealname"]) && isset($_POST["sidemeal"]) && isset($_POST["sauce"]) && isset($_POST["note"]) && isset($_POST["num"])){
    
    $name=$_POST["mealname"];
    $sidemeal=$_POST["sidemeal"];
    $sauce=$_POST["sauce"];
    $note=$_POST["note"];
    $num=$_POST["num"];

    $sql="select * from `meal` where meal_id='$name'";
    $sql1="select * from `sidemeal` where sm_id='$sidemeal'";
    $sql2="select name from `sauce` where s_id='$sauce'";

    $meal=mysqli_query($link,$sql);
    $sm=mysqli_query($link,$sql1);
    $sau=mysqli_query($link,$sql2);

    if($row=mysqli_fetch_array($meal)){
        $meal_id=$row["name"];
        $price=$row["price"];

        $_SESSION["mealname"]=$row["name"];
        $_SESSION["img"]=$row["img"];
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
    $sql4="insert into `cart`(phone, meal_id, sm_id, s_id, note, amount, price) values ('$phone','$meal_id','$sm_id','$s_id','$note','$num','$total')";
    echo $phone, $meal_id, $sm_id, $s_id, $note, $num, $total;
    $insert=mysqli_query($link,$sql4);
    if($insert){
        echo "<script>{window.alert('新增成功 $phone, $meal_id, $sm_id, $s_id, $note, $num, $total'); location.href='index.php'}</script>";
    }

}
else{
    echo "<script>{window.alert('新增失敗，請再試一次'); location.href='index.php'}</script>";
}
?>
