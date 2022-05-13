<?php
session_start();
$link = mysqli_connect("localhost","root","12345678","sa");
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

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">訂餐首頁</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">關於方禾</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="seat.php">店內座位狀況</a>
              </li>
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


  <div class="container">
    <div class="main-body">
    
          
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION["member_name"] ?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">姓名</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION["member_name"] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION["member_email"] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">手機號碼</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION["member_phone"] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">密碼</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION["member_password"] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-warning " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">編輯</a>
                    </div>
                  </div>
                </div>
              </div>

            

                
                    <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">訂單記錄</h4>
                        <?php
                          $email=$_SESSION["member_email"];
                          $sql="select * from `order1` where email='$email' order by time DESC";
                          $rs=mysqli_query($link,$sql);
                          
                          

                          if(mysqli_num_rows($rs)>0){
                            while($row = mysqli_fetch_array($rs)){
                              $time=$row["time"];
                              $sql2="select * from `detail` where email='$email' and time='$time'";
                              $rs2=mysqli_query($link,$sql2);
                              echo"
                              <div class='bg-white card mb-4 order-list shadow-sm'>
                                  <div class='gold-members p-4'>
                                      <div class='media'>
                                        <div class='media-body'>
                                          <p class='text-gray mb-3'><i class='icofont-list'></i> 訂單編號:".$row["order_id"]."<i class='icofont-clock-time ml-2'></i>成立時間:".$row["time"];

                                          if($rs){
                                            if($row["cond"]== 0){
                                              echo"<span class='float-right text-warning'>訂單狀態：準備中<i class='icofont-check-circled text-success'></i></span></p>";
                                              
                                            }
                                            if($row["cond"]== 1){
                                              echo"<span class='float-right text-warning'>訂單狀態：已完成<i class='icofont-check-circled text-success'></i></span></p>";
                                              
                                            }

                                            if($row["cond"]== 2){
                                              echo"<span class='float-right text-warning'>訂單狀態：已取餐<i class='icofont-check-circled text-success'></i></span></p>";
                                              
                                            }
                                        
                                            while($row1 = mysqli_fetch_array($rs2)){
                                              echo"<p class='ext-dark'>".$row1["meal_id"]."(".$row1["sm_id"].",".$row1["s_id"].") x ".$row1["amount"]."</p>";
                                            }
                                            
                                          }
                                        
                                              
                                          echo"
                                            <hr>
                                            <div class='float-right'>
                                              <a class='btn btn-sm btn-outline-warning' href='#'><i class='icofont-headphone-alt'></i> 給予回饋</a>
                                              <a class='btn btn-sm btn-warning' href='index.php'><i class='icofont-refresh'></i> 再買一次</a>
                                            </div>
                                            <p class='mb-0 text-black text-warning pt-2'><span class='text-black font-weight-bold'> 訂單總金額 : </span>".$row["tot_price"]."</p>
                                          </div>
                                      </div>
                                      <hr>
                                            <p>餐點流程</p>
                                            <div class='col-lg-6 col-md-12 col-xs-12'>
                                              <span class='irs js-irs-0 irs-with-grid'>
                                                <span class='irs'>
                                                  <span class='irs-line' tabindex='0'>
                                                    <span class='irs-line-left'></span>
                                                    <span class='irs-line-mid'></span>
                                                    <span class='irs-line-right'></span>
                                                  </span>
                                              
                                              </span>
                                              <span class='irs-grid' style='width: 96%;left:1.9%;'>
                                                <span class='irs-grid-pol' style='left:0%'></span>
                                                <span class='irs-grid-text js-grid-text-0' style='left:0%; margin-left:-6.5%;'>餐點準備中</span>
                                               
                                                
                                                <span class='irs-grid-pol' style='left:50%'></span>
                                                <span class='irs-grid-text js-grid-text-2' style='left:50%;visibility:visible; margin-left:-7.5%;'>餐點製備完成</span>
                                                
                                                <span class='irs-grid-pol' style='left:100%'></span>
                                                <span class='irs-grid-text js-grid-text-4' style='left:100%;visibility:visible; margin-left:-5%;'>取餐完成</span>
                                              </span>
                                                <span class='irs-shadow shadow-from' style='display: none;'></span>
                                                <span class='irs-shadow shadow-to' style='display: none;'></span>";
                                              if($row["cond"] == 0){
                                                echo"<span class='irs-slider from' style='left: 0.3%;'></span>";
                                              }
                                              if($row["cond"] == 1){
                                                echo"<span class='irs-slider from' style='left: 50%;'></span>";
                                              }
                                              if($row["cond"] == 2){
                                                echo"<span class='irs-slider from' style='left: 99.7%;'></span>";
                                              }

                                              
                                              echo
                                                "</span>
                                                <input type='text' id='range' value name='range' class='irs-hidden-input' tabindex='-1' readonly>
                                              
                                              </div>
                                                         
                                  </div>
                                  
                              </div>";
                              }
                            }
                            else{
                              echo"尚未有訂餐紀錄！";
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
  <!-- end profile section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4 style="color:white; font-family: Arial, Helvetica, sans-serif;">
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
            <a href="index.php" class="footer-logo" style="font-family: Arial, Helvetica, sans-serif;">
              方禾食呂
            </a>
            <h5 style="color:aliceblue">
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
          <h4 style="color:white; font-family: Arial, Helvetica, sans-serif;">
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
      <div class="footer-warning">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/" style="color:white;">SA05</a><br><br>
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 


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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
  <script>
      $(window).ready(() => {
        $('#myModal').modal('show');
      })
    </script>

</body>

</html>