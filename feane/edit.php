<?php
session_start();
$link=mysqli_connect("localhost","root","","sa");

if(isset($_POST["note"]) && isset($_POST["orderid"])){
  $orderid=$_POST["orderid"];
  $note=$_POST["note"];
  $sql="update order1 set note = '$note' where order_id='$orderid'";
  $rs=mysqli_query($link,$sql);

  if($rs){
    echo"<script>{window.alert('成功新增備註！'); location.href='manage.php'}</script>";
  }

  else{
    echo"<script>{window.alert('新增備註失敗，請再試一次！'); location.href='manage.php'}</script>";
  }
}
?>