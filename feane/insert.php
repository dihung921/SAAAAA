<?php
session_start();
$email = $_SESSION["member_email"];
$tot_price=$_SESSION["tot_price"];
$link = mysqli_connect("localhost","root","12345678","sa");


$sql="select * from cart where email = $email";
$result=mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $meal=$row["meal_id"];
        $sm=$row["sm_id"];
        $s=$row["s_id"];
        $amount=$row["amount"];
        $sql2="insert into detail(meal_id, sm_id, s_id, amount, email, time) values ('$meal', '$sm', '$s', '$amount', '$email', now())";
        $rs=mysqli_query($link,$sql2);
    }

    if($rs){
        echo "<script>{window.alert('成功送出訂單！'); location.href='index.php'}</script>";
    }

    else{
        echo "<script>{window.alert('送出失敗！'); location.href='cart.php'}</script>";
    }

    $sql3="insert into order1(email, tot_price, cond, time) values ('$email', '$tot_price', 0,now())";
    $rs1=mysqli_query($link,$sql3);

    $sql4="delete from cart where email='$email'";
    $rs2=mysqli_query($link,$sql4);

}


?>