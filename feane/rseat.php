

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

  <link rel="stylesheet" href="style.css" />


  <title style="font-family: Arial, Helvetica, sans-serif;"> 方禾食呂 </title>

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

              <li class="nav-item">
                <a class="nav-link" href="index.php">訂餐首頁</a>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">關於方禾</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="rseat.php">店內座位狀況(R) <span class="sr-only">(current)</span></a>
                <?php  if($_SESSION['level']==1)?>
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


  <!-- book section -->
  <div class="cseat">
 
      <label>選擇位置:</label>
      <select class="cselect" id="seat">
        <option value="1">座位1</option>
        <option value="2">座位2</option>
        <option value="3">座位3</option>
        <option value="4">座位4</option>
        <option value="5">座位5</option>
        <option value="6">座位6</option>
        <option value="7">座位7</option>
        <option value="8">座位8</option>
        <option value="9">座位9</option>
        <option value="10">座位10</option>
        <option value="11">座位11</option>
        <option value="12">座位12</option>
        <option value="13">座位13</option>
        <option value="14">座位14</option>
        <option value="15">座位15</option>
        <option value="16">座位16</option>
        
      </select>
<div class="movie-container">
    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>空位</small>
      </li>
      <li>
        <div class="seat selected"></div>

        <small>選擇</small>


      </li>
      <li>
        <div class="seat occupied"></div>
        <small>已滿</small>
      </li>
    </ul>
</div>
    <div class="container2">
    <div class="wrapper">

      <div class="two"> 
        <div class="seat"><h6>1</h6></div>
        <div class="seat occupied"><h6>2</h6></div>
        <div class="seat occupied"><h6>3</h6></div>
        <div class="seat"><h6>4</h6></div>
        <div class="seat"><h6>5</h6></div>
      </div>

      <div class="three"> 
        <div class="row">
        <div class="seat selected"><h6>6</h6></div>
        <div class="seat"><h6>7</h6></div>
        <div class="seat"><h6>8</h6></div>
        <div class="seat selected"><h6>9</h6></div>
        <div class="seat"><h6>10</h6></div>
       
      </div></div>

      <div class="four">
      
      <div class="seat3"><h6>11</h6></div>
      <div class="seat3"><h6>13</h6></div>
      </div>

     <div class="five">
      <div class="seat3"><h6>12</h6></div>
      <div class="seat3"><h6>14</h6></div>
    </div>

    <div class="six">
      <div class="seat2"><h6>15</h6></div>
      <div class="seat2"><h6>16</h6></div>
    </div>

    <div class="seven">
    <div class="row">
      <div class="screen2"><center>櫃檯</center></div>
    </div></div>

    <div class="eight">
    <div class="row">
      <div class="screen2"><center>自助餐具區</center></div>
    </div></div>

      

      
      
        
      </div>
    </div>
</div>
</div>





  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4 style="font-family: Arial, Helvetica, sans-serif;">

              聯絡我們
            </h4>
            <div class="contact_link_box">
            <a href="https://www.google.com/maps/place/%E6%96%B9%E7%A6%BE%E9%A3%9F%E5%91%82/@25.03403,121.430541,15z/data=!4m2!3m1!1s0x0:0xe3a4beb2b893c821?sa=X&ved=2ahUKEwibkauQl6f3AhV1yosBHaD9AY4Q_BJ6BAhgEAU">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                242新北市新莊區中正路514巷53弄39號
                </span>
              </a>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +02 2908-1397
                </span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
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
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/storyboxtw/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>

            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4 style="font-family: Arial, Helvetica, sans-serif;">

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
  <script src="js/seat.js"></script>


</body>


<link rel="stylesheet" type="text/css" href="css/bootstrap.css" /

</html>