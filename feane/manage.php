<?php
session_start();


$link=mysqli_connect("localhost","root","12345678","sa");

$email=$_SESSION["member_email"];
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
                              <li class='nav-item'><a class='nav-link' href='manage.php'>訂單管理</a></li>";
                     }
                  else{
                       echo"<td>&nbsp;</td></tr>";
                      }
                      mysqli_close($link);
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

  <!-- Start Cart  -->

  <div class="cart-box-main">
      <form action="manage.php" method="post" style="text-align:center;">
          <select name="item">
              <option selected>請選擇查詢項目</option>
              <option value="">訂購編號</option>
              <option value="meal_id">商品名稱</option>
              <option value="sm_id">副餐</option>
              <option value="s_id">醬料</option>
              <option value="note">備註</option>
              <option value="amount">數量</option>
              <option value="price">總價</option>
          </select>
          <input type="text" name="val">
          <button type="submit" class="btn btn-warning">查詢</button>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr align="center">
                                    <th>訂購編號</th>
                                    <th>商品名稱</th>
                                    <th>副餐</th>
                                    <th>醬料</th>
                                    <th>備註</th>
                                    <th>數量</th>
                                    <th>總價</th>
                                    <th>功能</th>
                                </tr>
                            </thead>
                            <tbody align="center">

                            <?php
                                    $sql="select * from cart where email = '$email'";
                                    $result=mysqli_query($link,$sql);
                                    if (mysqli_num_rows($result) > 0) {
                                      while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td></td>
                                              <td class='name-pr'>".$row["meal_id"]."</td>
                                              <td class='name'>".$row["sm_id"]."</td>
                                              <td class='name'>".$row["s_id"]."</td>
                                              <td>".$row["note"]."</td>
                                              <td>".$row["amount"]."</td>
                                              <td>".$row["price"]."</td>";
                                        echo "<td>
                                                <a href = 'reserve.php?meal_id = ".$row["meal_id"]."'>修改</a>、
                                                <a href = 'delete2.php?meal_id = ".$row["meal_id"]."'>刪除</a>
                                              </td>";
                                            
                                        echo "</tr>";
                                        
                                    }
                                  }
                                  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </div>
    <!-- End Cart -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4 style="color:aliceblue">
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
            <a href="index.php" class="footer-logo">
              方禾食呂
            </a>
            <h4 style="color:aliceblue">
            健康飲食好夥伴
            </h4>
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
          <h4 style="color:aliceblue">
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

