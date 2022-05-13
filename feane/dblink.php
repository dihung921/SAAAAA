<?php
$method=$_POST["method"];
$seat_id=$_POST["seat_id"];
$cond=$_POST["cond"];
$order_id=$_POST["order_id"];


$link=mysqli_connect("localhost" ,"root" ,"","sa");

if($method == "update.php")
{
    $sql="insert into `seat_condition` (seat_id, cond, order_id) values ('$seat_id','$cond','$order_id')";
    echo $sql;
    if(mysqli_query($link,$sql))
    {
    echo "<script>{window.alert('新增成功'); location.href='rseat.php'}</script>";
    }
    }
    else
{
    $sql="update `seat_condition set` seat_id = '$seat_id', cond ='$cond' , order_id ='$order_id' where seat_id='$seat_id'";
echo $sql;
if(mysqli_query($link,$sql))
{
    echo "<script>{window.alert('修改成功'); location.href='rseat.php'}</script>";
}

}

?>
