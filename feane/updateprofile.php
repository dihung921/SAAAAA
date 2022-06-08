<?php
session_start();

$email = $_SESSION["member_email"];
$link=mysqli_connect("localhost","root","12345678","sa");
$sql="select * from `member` where email = '$email'";
$rs=mysqli_query($link,$sql);
   if($record=mysqli_fetch_row($rs))
      {
        $name = $record['0'];
        $email = $record['1'];
        $phone = $record['2'];
        $password = $record['3'];
       
      }
?>

<?php
session_start();
$link=mysqli_connect("localhost","root","12345678","sa");

if(isset($_POST["way"])){
  $way = $_POST["way"];
  if($way == 0){
    if(isset($_POST["seatnum"])){
      $seatnum= $_POST["seatnum"];
      $sql="insert into way( way, seat) values ('0', '$seatnum')";
      $rs=mysqli_query($link,$sql);
      if($rs){
        $_SESSION["way"]=$way;
        $_SESSION["seatnum"]=$seatnum;
      }
    }
  }
  else{
    $sql="insert into way(way) values ('1')";
    $rs=mysqli_query($link,$sql);
    if($rs){
      $_SESSION["way"]=$way;
    }
    header("Location:index.php");
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> 方禾食呂 </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style1.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive1.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.scss">
    <link rel="stylesheet" href="ion.rangeslider.css">
    <link rel="stylesheet" href="ion.rangeslider.skinflat.css">


</head>
<body>

<?php
if($_SESSION['level']=="user"){
  if(!isset($_SESSION["way"])){
    echo"
    <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 請選擇用餐方式</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'></span>
            </button>
          </div>
          <center><div class='modal-body'>
          <div class='d-grid gap-2 col-6 mx-auto'>
                        <form action='index.php' method='post'>
                          <input name='way' value='1' type='hidden'>  
                          <button class='btn btn-warning'>自取</button>
                        </form>
            <form action='index.php' method='post'>
            <button type='button' class='btn btn-warning' data-toggle='modal data-target='#exampleModal'>內用</button>
            
            <div class='modal-dialog'>
            <div class='modal-content'>
            <div class='modal-footer'>
            <input name= 'way' value='0' type='hidden'>
            <a>請輸入桌號：<input type='text' placeholder='桌號' name='seatnum'></a>
            <button class='btn btn-warning'>確認</button>
            <button class='btn btn-secondary' data-dismiss='modal'>不吃了！</button>
            
            
                  
                </div>
                
              </div>
            </div>
          </div>
          </div>

           
          </div></center>
</div>
        </div>
      </div>
    </div>
</div>";
}
}
?>
<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/ll6.png" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span style="color:white; font-family: Arial, Helvetica, sans-serif;">
              方禾食呂
            </span>
          </a>
          <a style="color: lightgray"><?php
              if (isset($_SESSION["way"])){
                if($_SESSION["way"]== 0){
                  echo 
                  "<form action='changeway.php' method='post'>&nbsp&nbsp&nbsp&nbsp內用
                  &nbsp&nbsp<input type='submit' class='btn btn-warning' style='color: lightyellow; border-radius: 20px' value='更改用餐方式'>
                  </form>";
                }
                else{ 
                  echo "
                  <form action='changeway.php' method='post'>&nbsp&nbsp&nbsp&nbsp外帶自取
                  &nbsp&nbsp<input type='submit' class='btn btn-warning' style='color: lightyellow; border-radius: 20px' value='更改用餐方式'>
                  </form>";
                }
              }
              ?>
              </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
            <?php
              if($_SESSION['level']=="user"){
              echo"<li class='nav-item active'>
                <a class='nav-link' href='index.php'>訂餐首頁 <span class='sr-only'>(current)</span></a>
              </li>
             
              <li class='nav-item'>
                <a class='nav-link' href='about.php'>關於方禾</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='seat.php'>店內座位狀況</a>
              </li>";
              }
              ?>
                <?php
                   if($_SESSION['level']=="admin"){
                        echo "<li class='nav-item'><a  class='nav-link' href='#'>後台管理</a></li>
                              <li class='nav-item'><a class='nav-link' href='rseat.php'>座位狀況管理</a></li>
                              <li class='nav-item'><a class='nav-link' href='manage.php'>訂單管理</a></li>
                              <li class='nav-item'><a class='nav-link' href='horder.php'>歷史訂單</a></li>";
                     }
                  else{
                       echo"<td>&nbsp;</td></tr>";
                      }
                                      ?>
            </ul>
            <div class="user_option">
            <?php
            if ($_SESSION["member_name"]){
              echo "<a href='profile.php' class='user_link'>
              <i class='fa fa-user' aria-hidden='true'></i>
            </a>";
            }
            ?>

              <form action="logout.php" method="post">
              <?php
              if ($_SESSION["member_name"]){
                
                  ?>
                  <a style="color: white"><?php echo $_SESSION["member_name"]; ?></a>
                  <?php
                echo "<button class='order_online'>登出</button>";
              }
              else{
                echo "<a href='login.php' class='order_online'>
                登入
              </a>
              <a href='register.php' class='order_online'>
                註冊
              </a>";
              }
              ?>
            </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  

  <!-- profile section -->
  <br>
  <br>

<center>
<div class="container">
    <div class="main-body">

        <div class="row gutters-sm" >
            <div class="col-md-12 mb-12">
              <div class="card">
                <div class="card-body">
                
                    <form method ="post" action="dblinkp.php">
                        <input type="hidden" name="method" value="<?php echo $method ?>">
                        <table class="List" align="center" width="20%">
                        <tr>
                            <h4 align="center" class="ListCap">修改會員資料</h4></tr><hr>
                            <input type="hidden" name="email" value="<?php echo $email?>">
                            <tr>
                            <td align="center">姓名&nbsp</td>
                                <td><input type="text" name="name" value="<?php echo $name?>" ></td>
                            </tr>
                            <tr>
                            <td align="center">email:</td>
                                <td><?php echo $email?></td>
                            </tr>
                            <tr>
                            <td align="center">電話&nbsp</td>
                                <td><input type="text" name="phone" value="<?php echo $phone?>"></td>
                            </tr>
                            <tr>
                            <td align="center">密碼&nbsp</td>
                                <td><input type="text" name="password" value="<?php echo $password?>"></td>
                                
                           <tr align="center">
                              <td colspan="3"> <br>
                                 <button class="btn btn-secondary" style=" border-radius: 20px;"><a href=profile.php style="text-decoration: none; color:lightgray;">返回</a></button>&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type='submit' class='btn btn-warning' style=' border-radius: 20px; '>
                            </td> </div>
                            </tr>
                            
                            </div></div>
                        </table>
                        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  
</center>
            </body>
