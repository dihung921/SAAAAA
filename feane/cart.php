<?php
session_start();

$link=mysqli_connect("localhost","root","","sa");

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

  <script src="https://kit.fontawesome.com/d02d7e1ecb.js" crossorigin="anonymous"></script>

  <script src="sweetalert2.all.min.js"></script>
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
 

</head>
 
  
  
    

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
    <link rel="stylesheet" href="sweetalert.css">
 
    

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
            <?php
              if($_SESSION['level']=="user"){
              echo"<li class='nav-item '>
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
                              <li class='nav-item'><a class='nav-link' href='horder.php'>歷史訂單</a></li>";
                     }
                  else{
                       echo"<li class='nav-item '>
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
            </ul>
            <div class="user_option">
            

            <?php
            if ($_SESSION["member_name"]){
              echo "<a href='profile.php' class='user_link'>
              <i class='fa-solid fa-user' aria-hidden='true'></i>
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

  <!-- Start Cart  -->
  
  <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr align="center">
                                    
                                    <th>商品名稱</th>
                                    <th>副餐</th>
                                    <th>醬料</th>
                                    <th>備註</th>
                                    <th>數量</th>
                                    <th>總價</th>
                                    <th>刪除</th>
                                </tr>
                            </thead>
                            <tbody align="center">

                            <?php
                                    $sql="select * from `cart` where email = '$email'";
                                    $result=mysqli_query($link,$sql);
                                    $tot_price=0;
                                    if (mysqli_num_rows($result) > 0) {
                                      while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "
                                              <td class='name-pr'>".$row["meal_id"]."</td>
                                              <td class='name'>".$row["sm_id"]."</td>
                                              <td class='name'>".$row["s_id"]."</td>
                                              <td>".$row["note"]."</td>
                                              <td>
                                                <input type='button' href='javascript:;' class='minus fr' value='-' style='margin-right: 5px; width: 40px;'>
                                                <input type='text' name='num' class='num_show fl' value='".$row["amount"]."' style='text-align: center; width: 50px;' readonly>
                                                <input type='button' href='javascript:;' class='add fr' value='+' style='margin-left: 5px;; width: 40px;'>
                                              </td>
                                              <td class='total'><em id ='price'>".$row["price"]."</em></td>
                                              <td><a href='delete.php?meal_id=".$row["meal_id"]."&sm_id=".$row["sm_id"]."&s_id=".$row["s_id"]."'><img src='images/Trash-256.webp' width='16' height='16' align='center'></td>";
                                        echo "</tr>";
                                        $tot_price += $row["price"];
                                      }
                                      $_SESSION["tot_price"]=$tot_price;
                                    }
                                    else{
                                      echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
                                    }
                              ?>
                              <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price13').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
            <div class="row justify-content-end">
            
            <div class="col-6" >
                <div>
                    <div class="update-box">
                    
                      <input value="繼續選購" type="submit" onclick="location.href='index.php'"> 
                      
                    </div>
                </div>
            </div>
          
           
            <?php
                    echo"<form>
                  
                   <div class=detail-box>
                      <div class=row my-12>
                        <div class='col-lg-12 col-sm-15'>
                          <div class='order-box'>
                              <div class='d-flex gr-total'>
                                <h5>總金額</h5>
                                <div class='ml-auto h5'>$".$tot_price."</div>
                                <div class='col-6 d-flex shopping-box'>
                                
                                <input type='button' value='結帳' class='ml-auto btn hvr-hover' data-toggle='modal' data-target='#exampleModal2'>  
                                </div>
                                </div>
                                </div>
                                <hr>
                                </div>
                </div>
              </div>
        </div>
    </div> 

                         
                         
                                <div class='modal fade' id='exampleModal2' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel1' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h3 class='modal-title' id='exampleModalLabel1'>注意！</h3>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                            </div>
                                        <div class='modal-body'>
                                            即將送出訂單！
                                        </div>
                                            <div class='modal-footer'>
                                                <input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                                <a class ='btn btn-warning'  href=insert.php>送出</a>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                                </form>";
                                    
                  ?>
    <!-- End Cart -->

  
  <!-- footer section -->
  <footer class="footer_section" >
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4 style="color:aliceblue; font-family: Arial, Helvetica, sans-serif;">
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
    <script src="js/window.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
 
    


</body>

</html>