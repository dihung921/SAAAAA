<?php
$method=$_POST["method"];
$cart_id=$_POST["cart_id"];
$email=$_POST["email"];
$meal_id=$_POST["meal_id"];
$sm_id=$_POST["sm_id"];
$s_id=$_POST["s_id"];


$link=mysqli_connect("localhost","root","12345678","temp");

if($method=="update")
{
    $sql="update cart set cart_id='$cart_id',email='$email',meal_id='$meal_id',sm_id='$sm_id',s_id='$s_id', where cart_id='$cart_id'";
    echo $sql;
        if(mysqli_query($link,$sql))
        {
             header('location:manage.php');
             
        }else{
            echo "error";
        }
    }
    else
    {
    $sql="update cart set cart_id='$cart_id',email='$email',meal_id='$meal_id',sm_id='$sm_id',s_id='$s_id', where cart_id='$cart_id'";
    echo $sql;
        if(mysqli_query($link,$sql))
        {
            header('location:manage.php?method=message&message=刪除成功');  
        }

    }


?>