<?php
session_start();
$link=mysqli_connect("localhost","root","","sa");
$email=$_SESSION["member_email"];

if(isset($_POST["note"])){
  $note=$_POST["note"];
  $sql="update order1 set note = '$note'";
  $rs=mysqli_query($link,$sql);

  if($rs){
    echo"<script>{window.alert('成功新增備註！'); location.href='manage.php'}</script>";
  }

  else{
    echo"<script>{window.alert('新增備註失敗，請再試一次！'); location.href='manage.php'}</script>";
  }
}
?>