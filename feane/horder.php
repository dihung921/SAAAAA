<?php
session_start();
require_once("conn.php");
$email=$_SESSION["member_email"];
$searchtext = $_POST["searchtext"];
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
  <script src="https://kit.fontawesome.com/d02d7e1ecb.js" crossorigin="anonymous"></script>

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
    

</head>

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
            <span style="font-family: Arial, Helvetica, sans-serif;">
              方禾食呂
            </span>
          </a>

          

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

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
              </li>
              ";
              }
             
                   else if($_SESSION['level']=="admin"){
                        echo "<li class='nav-item'><a  class='nav-link' href='#'>後台管理</a></li>
                              <li class='nav-item'><a class='nav-link' href='rseat.php'>座位狀況管理</a></li>
                              <li class='nav-item'><a class='nav-link' href='manage.php'>訂單管理</a></li>
                              <li class='nav-item active'><a class='nav-link ' href='horder.php'>歷史訂單<span class='sr-only'>(current)</span></a></li>";
                     }
                  else{
                       echo"<li class='nav-item active'>
                       <a class='nav-link' href='index.php'>訂餐首頁 </a>
                     </li>
                    
                     <li class='nav-item'>
                       <a class='nav-link' href='about.php'>關於方禾</a>
                     </li>
                     <li class='nav-item'>
                       <a class='nav-link' href='seat.php'>店內座位狀況</a>
                     </li>";
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

              
            <?php
              if ($_SESSION["member_name"]){
                echo "<a style='color: white'> ".$_SESSION["member_name"]."</a>";
                  
                echo "<a class='order_online' href='logout.php'>登出</a>";
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
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- Start Cart  -->
  
  <br>
  <br>


  <div class="container">
    <div class="main-body">
    
                
    <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    
                    <form action="horder.php" method="post">
                    <p align=right>請輸入訂單編號或訂購者姓名：<input type="text" name="searchtext" value=<? echo $searchtext ?>><button class= "btn btn-warning">搜尋</button></p>
                    </form>
                      <h1 class="font-weight-bold mt-0 mb-4" style="text-align: center;">歷史訂單</h1>
                      <?php
                        $rs = $conn->query("select * from `order1` where cond = 2 order by time DESC");
                        if(empty($searchtext)){
                          if(mysqli_num_rows($rs) > 0 ){
                            while($row = mysqli_fetch_array($rs)){
                              $time=$row["time"];
                              $email=$row["email"];
                              $rs1 = $conn->query("select * from `detail` where time = '$time' and email = '$email'");
                              echo"
                              <div class='bg-white card mb-4 order-list shadow-sm'>
                                  <div class='gold-members p-4'>
                                      <div class='media'>
                                        <div class='media-body'>
                                          <p class='text-gray mb-3'><i class='icofont-list'></i> 訂單編號:".$row["order_id"]."<i class='icofont-clock-time ml-2'></i>成立時間:".$row["time"]."
                                          <span class='float-right text-dark'>訂購者姓名：".$row["name"]."<i class='icofont-check-circled text-success'></i></span></p>";


                              while($row1 = mysqli_fetch_array($rs1)){
                                echo"<p class='ext-dark'>".$row1["meal_id"]."(".$row1["sm_id"].",".$row1["s_id"].") x ".$row1["amount"]."</p>";
                                  
                                if(!empty($row1["note"])){
                                  echo"<p class='text-dark'>顧客備註：".$row1["note"]."</p>";
                                }
                              }
                                if($row["note"]!=NULL){
                                  echo"<p class='ext-dark'>店家備註 : ".$row["note"]."</p>";
                                  
                                }
                              echo"
                              <hr>
                            
                              <p class='mb-0 text-black text-dark pt-2'><span class='text-black font-weight-bold'> 訂單總金額 : </span>".$row["tot_price"]."<span class='float-right'>顧客回饋 : ".$row["feedback"]."</span></p>
                              </div>
                            </div>
                            </div>
                            </div>";       
                            }
                          
                        }
                      }
                        else {
                          $rs2 = $conn->query("select * from `order1` where order_id like '%$searchtext%' or name like '%$searchtext%' order by time DESC");
                          if(mysqli_num_rows($rs2) > 0 ){
                            while($row2 = mysqli_fetch_array($rs2)){
                              $time=$row2["time"];
                              $email=$row2["email"];
                              $rs1 = $conn->query("select * from `detail` where time = '$time' and email = '$email'");
                              echo"
                              <div class='bg-white card mb-4 order-list shadow-sm'>
                                  <div class='gold-members p-4'>
                                      <div class='media'>
                                        <div class='media-body'>
                                          <p class='text-gray mb-3'><i class='icofont-list'></i> 訂單編號:".$row2["order_id"]."<i class='icofont-clock-time ml-2'></i>成立時間:".$row2["time"]."
                                          <span class='float-right text-dark'>訂購者姓名：".$row2["name"]."<i class='icofont-check-circled text-success'></i></span></p>";


                                while($row1 = mysqli_fetch_array($rs1)){
                                  echo"<p class='ext-dark'>".$row1["meal_id"]."(".$row1["sm_id"].",".$row1["s_id"].") x ".$row1["amount"]."</p>";
                                  if(!empty($row1["note"])){
                                    echo"<p class='text-dark'>顧客備註：".$row1["note"]."</p>";
                                  }
                                }
                                  if($row2["note"]!=NULL){
                                    echo"<p class='ext-dark'>店家備註 : ".$row2["note"]."</p>";
                                    
                                  }
                              echo"
                              <hr>
                            
                              <p class='mb-0 text-black text-dark pt-2'><span class='text-black font-weight-bold'> 訂單總金額 : </span>".$row2["tot_price"]."<span class='float-right'>顧客回饋 : ".$row2["feedback"]."</span></p>
                              </div>
                            </div>
                            </div>
                            </div>";       
                            }
                          }
                      }
                      ?>


                            </div>
                        </div>
                    </div>
        
              
            </div>
          </div>

        </div>
    </div>
    <br>
    <br>
    <!-- End Cart -->

  
  <!-- footer section -->
  <footer class="footer_section" >
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4 style="color:aliceblue;font-family: Arial, Helvetica, sans-serif;">
              聯絡我們
            </h4>
            <div class="contact_link_box">
              <a href="https://www.google.com/maps/place/%E6%96%B9%E7%A6%BE%E9%A3%9F%E5%91%82/@25.03403,121.430541,15z/data=!4m2!3m1!1s0x0:0xe3a4beb2b893c821?sa=X&ved=2ahUKEwibkauQl6f3AhV1yosBHaD9AY4Q_BJ6BAhgEAU">
                
                <span>
                242新北市新莊區中正路514巷53弄39號
                </span>
              </a>
                
                <span>
                  Call +02 2908-1397
                </span>
                
                <span>
                storyboxtw@gmail.com
                </span>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="index.php" class="footer-logo"style="font-family: Arial, Helvetica, sans-serif;">
              方禾食呂
            </a>
            <h5 style="color:aliceblue;font-family: Arial, Helvetica, sans-serif;">
            健康飲食好夥伴
            </h5>
            <div class="footer_social">
              <a href="https://www.facebook.com/storyboxtw/about/?ref=page_internal">
                <img src="images/fb.png" width="16" height="16" alt="" align="center">
              </a>
              <a href="https://www.instagram.com/storyboxtw/">
                <img src="images/ig.jpg" width="16" height="16" alt="" align="center">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4 style="color:aliceblue; font-family: Arial, Helvetica, sans-serif;">
            營業時間
          </h4>
          <p>
            星期一～日
          </p>
          <p>
            10:00 AM ~ 19:00 PM
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">SA05</a><br><br>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  
  
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->


  <!-- ALL JS FILES -->
  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom1.js"></script>

</body>

</html>