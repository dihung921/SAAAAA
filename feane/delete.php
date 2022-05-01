<?php

 $cart_id = $_POST["cart_id"];
 $link = mysqli_connect("localhost","root","12345678", "sa");
 $sql = "delete from cart where cart_id = '$cart_id'";
 if(mysqli_query($link,$sql))
 {
    echo "<script>{window.alert('刪除成功！'); location.href='cart.php'}</script>";
 }
    else{
        echo "<script>{window.alert('刪除失敗！'); location.href='cart.php'}</script>";
    }
    
?>