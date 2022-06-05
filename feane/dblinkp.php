<?php
$method=$_POST["method"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];


$link=mysqli_connect("localhost" ,"root" ,"","sa");

if($method == "updateprofile.php")
{
    $sql="insert into `member` (name, email, phone, password) values ('$name','$email','$phone','$password')";
    echo $sql;
    if(mysqli_query($link,$sql))
    {
    echo "<script>{window.alert('新增成功'); location.href='profile.php'}</script>";
    }
    }
    else
{
    $sql="update `member` set name = '$name', phone ='$phone' , password ='$password' where email='$email'";
echo $sql;
if(mysqli_query($link,$sql))
{
    echo "<script>{window.alert('修改成功'); location.href='profile.php'}</script>";
}

}

?>
