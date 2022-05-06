<?php
 

if($_SESSION['phone']<>"admin")
{
    header('location:index.php?method=message&message=請先登入喔');
}
else
{
    $phone=$_GET['phone'];
    $link=mysqli_connect("localhost","root","12345678","temp");
    $sql="delete from `cart` where name='$name'";


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