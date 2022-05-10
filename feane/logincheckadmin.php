<?php
   session_start();
   $account = $_POST["account"];
   $password = $_POST["password"];
   $level = $_POST["level"];
      
      echo $account;
      echo $password;
      echo $level;
 $link = mysqli_connect("localhost", "root","","sa");

//                         
//   if(isset($_SESSION["account_name"])){
//           header("Location:index.php");
//       }
$sql="select * from admin where account='$account' and password ='$password'";
$rs=mysqli_query($link,$sql);
if($record=mysqli_fetch_assoc($rs))
{
    $_SESSION['account'] = $record['account'];
    $_SESSION['password']= $record['password'];
    header("location:index.php");
}

     else{
        echo "<script>{window.alert('密碼錯誤！請再試一次'); location.href='loginadmin.php'}</script>";
   }
?>