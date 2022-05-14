<?php
session_start();
$link=mysqli_connect("localhost","root","","sa");
$email=$_SESSION["member_email"];

if(isset($_POST["note"])){
  $note=$_POST["note"];
  $sql10="update order1 set note = '$note'";
  $rs10=mysql_query($link,$sql10);

  if($rs10){
    echo"<script>{window.alert('成功新增備註！'); location.href='manage.php'}</script>";
  }

  else{
    echo"<script>{window.alert('新增備註失敗，請再試一次！'); location.href='manage.php'}</script>";
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
              </li>
              ";
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

  <!-- Start Cart  -->
  <br>
  <br>


  <div class="container">
    <div class="main-body">
    
          
    
          
            

            

                
                    <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                        <h1 class="font-weight-bold mt-0 mb-4" style="text-align: center;">訂單管理</h1>
                        <?php
                          $sql="select * from `order1` where cond = 0 order by time ASC";
                          $rs=mysqli_query($link,$sql);
                          $sql3="select * from `order1` where cond = 1 order by time ASC";
                          $rs3=mysqli_query($link,$sql3);

                          echo"<h3 class=font-weight-bold mt-0 mb-4'>待準備訂單</h3>";

                          if(mysqli_num_rows($rs) > 0 ){
                            
                            while($row = mysqli_fetch_array($rs)){
                              $orderid=$row["order_id"];
                              $email=$row["email"];
                              $sql1="select * from `detail` where order_id = '$orderid' and email = '$email'";
                              $rs1=mysqli_query($link,$sql1);
                              $sql2="select name from `member` where email = '$email'";
                              $rs2=mysqli_query($link,$sql2);
                              $row2=mysqli_fetch_array($rs2);
                              echo"
                              <div class='bg-white card mb-4 order-list shadow-sm'>
                                  <div class='gold-members p-4'>
                                      <div class='media'>
                                        <div class='media-body'>
                                          <p class='text-gray mb-3'><i class='icofont-list'></i> 訂單編號:".$row["order_id"]."<i class='icofont-clock-time ml-2'></i>成立時間:".$row["time"]."
                                          <span class='float-right text-warning'>訂購者姓名：".$row2["name"]."<i class='icofont-check-circled text-success'></i></span></p>";


                                while($row1 = mysqli_fetch_array($rs1)){
                                  echo"<p class='ext-dark'>".$row1["meal_id"]."(".$row1["sm_id"].",".$row1["s_id"].") x ".$row1["amount"]."</p>";
                                }
                              echo"
                              <hr>
                              <div class='float-right'>
                                <a class='btn btn-sm btn-danger' href='dorder.php?order_id=".$row["order_id"]."&email=".$row["email"]."&time=".$row["time"]."'><i class='icofont-headphone-alt'></i>刪除訂單</a>&nbsp
                                <a class='btn btn-sm btn-primary' href='index.php' data-toggle='modal' data-target='#exampleModal'><i class='icofont-refresh'></i>新增備註</a>&nbsp
                                <a class='btn btn-sm btn-warning' href='complete.php?order_id=".$row["order_id"]."&email=".$row["email"]."&time=".$row["time"]."'><i class='icofont-refresh'></i>準備完成</a>&nbsp
                                
                              </div>";

                              if($row["note"] == NULL){
                                echo"<p class='mb-0 text-black text-warning pt-2'><span class='text-black font-weight-bold'> 訂單總金額 : </span>".$row["tot_price"]."</p>";
                              }
                              else{
                              echo"<p class='mb-0 text-black text-warning pt-2'><span class='text-black font-weight-bold'> 訂單總金額 : </span>".$row["tot_price"]."</p>
                                  <p class='mb-0 text-black text-warning pt-2'><span class='text-black font-weight-bold'> 店家備註: </span>".$row["note"]."</p>";
                              }
                              echo"</div>
                                  </div>
                                  </div>
                                  </div>";         
                            }

                            echo"<form action='edit.php' method='post' >
                                <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' role='dialog'>
                                  <div class='modal-dialog' role='document' id='exampleModalLabel'>
                                    <div class='modal-content' style='padding: 20px 20px;'>
                                      <div class='modal-body' style='color: black;'>
                                        <p>新增備註</p>
                                        <p><input type='text' name='note' placeholder='新增備註至此訂單...' style='border-radius: 5px; width: 100%;'></p>
                                        <div class='modal-footer'>
                                          <input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                          <input type='submit' value='新增'  class='btn btn-warning'>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>       
                              </form>";

                          }
                          

                          else {
                            echo"尚未有待準備訂單。";
                          }

                          echo"<hr>";

                          echo"<h3 class=font-weight-bold mt-0 mb-4'>待取餐訂單</h3>";
                          
                          if(mysqli_num_rows($rs3) > 0 ){
                            
                            while($row3 = mysqli_fetch_array($rs3)){
                              $orderid3=$row3["order_id"];
                              $email3=$row3["email"];
                              $sql4="select * from `detail` where order_id = '$orderid3' and email = '$email3'";
                              $rs4=mysqli_query($link,$sql4);
                              $sql5="select name from `member` where email = '$email3'";
                              $rs5=mysqli_query($link,$sql5);
                              $row5=mysqli_fetch_array($rs5);
                              echo"
                              <div class='bg-white card mb-4 order-list shadow-sm'>
                                  <div class='gold-members p-4'>
                                      <div class='media'>
                                        <div class='media-body'>
                                          <p class='text-gray mb-3'><i class='icofont-list'></i> 訂單編號:".$row3["order_id"]."<i class='icofont-clock-time ml-2'></i>成立時間:".$row3["time"]."
                                          <span class='float-right text-warning'>訂購者姓名：".$row5["name"]."<i class='icofont-check-circled text-success'></i></span></p>";


                                while($row4 = mysqli_fetch_array($rs4)){
                                  echo"<p class='ext-dark'>".$row4["meal_id"]."(".$row4["sm_id"].",".$row4["s_id"].") x ".$row4["amount"]."</p>";
                                }
                              echo"
                              <hr>
                              <div class='float-right'>
                                
                                <a class='btn btn-sm btn-success' href='receive.php?order_id=".$row3["order_id"]."&email=".$row3["email"]."&time=".$row3["time"]."'><i class='icofont-refresh'></i>取餐完成</a>&nbsp
                              </div>
                              <p class='mb-0 text-black text-warning pt-2'><span class='text-black font-weight-bold'> 訂單總金額 : </span>".$row3["tot_price"]."</p>
                              </div>
                            </div>
                            </div>
                            </div>";         
                            }


                          }

                          else {
                            echo"尚未有待取餐訂單。";
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