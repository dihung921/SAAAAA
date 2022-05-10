<?php


if($_SESSION['level']<>"admin")
{
    header('location:index.php?method=message&message=請先登入喔');
}
else
{
    $level=$_GET['user'];
    $link=mysqli_connect("localhost","root","12345678","sa");
    $sql="delete from `cart` where cart_id='$cart_id'";


if(mysqli_query($link,$sql))
        {
            header('location:message.php?method=message&message=刪除成功');  
        }
else
        {
            header('location:message.php?method=message&message=刪除失敗'); 
        }
}

?> 