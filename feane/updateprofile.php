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
            <span>
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
              <a class="cart_link" href="cart.php">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
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
                  
                            <tr>
                            <td align="center">姓名&nbsp</td>
                                <td><input type="text" name="name" value="<?php echo $name?>" ></td>
                            </tr>
                            <tr>
                            <td align="center">email&nbsp</td>
                                <td><input type="text" name="email" value="<?php echo $email?>"></td>
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
