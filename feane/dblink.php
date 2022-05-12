<?php
$method=$_POST["method"];
$cart_id=$_POST["cart_id"];
$email=$_POST["email"];
$meal_id=$_POST["meal_id"];
$sm_id=$_POST["sm_id"];
$s_id=$_POST["s_id"];
$amount=$_POST["amount"];

$link=mysqli_connect("localhost","root","12345678","sa");

if($method=="update")
{
    $sql="update cart set email='$email',meal_id='$meal_id',sm_id='$sm_id',s_id='$s_id',amount='$amount', where email='$email'";
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
    $sql="update cart set ,email='$email',meal_id='$meal_id',sm_id='$sm_id',s_id='$s_id',amount='$amount', where email='$email'";
    echo $sql;
        if(mysqli_query($link,$sql))
        {
            header('location:manage.php?method=message&message=刪除成功');  
        }

    }


?>