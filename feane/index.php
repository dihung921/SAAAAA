<?php
session_start();
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

 

</head>

<body>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 請選擇用餐方式</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>
          <center><div class="modal-body">
            <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-warning" data-dismiss="modal">自取</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">內用</button>
          </div></center>
</div>
        </div>
      </div>
    </div>
</div>
</div>
  <div class="hero_area">
    <div class="bg-box">
      <img src="images/ll.png" alt="">
      
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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">訂餐首頁 <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">菜單</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">關於方禾</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">店內座位狀況</a>
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
                echo $_SESSION["member_name"];
                  ?>
                  已登入
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
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
              <div class="col-md-7 col-lg-11 ">
                <img src="images/檸檬椒鹽雞胸.jpeg" width="55%" alt="" align="right"> 
                  <div class="detail-box">
                    <h1>
                      熱銷餐點。
                    </h1>
                    <p>
                      檸檬椒鹽雞胸，清爽無負擔
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        立即點餐
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
              <div class="col-md-7 col-lg-11 ">
                <img src="images/素食綜合野菇2.jpeg" width="55%" align="right" alt=""> 
                  <div class="detail-box">
                    <h1>
                     輕食一下。
                    </h1>
                    <p>
                      素食綜合野菇
                    </p>
                    <div class="btn-box">
                      <a href="#menu" class="btn1">
                        立即點餐
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
              <div class="col-md-7 col-lg-11 ">
                <img src="images/韓式風味牛.jpeg" width="55%" alt="" align="right"> 
                  <div class="detail-box">
                    <h1>
                      店長推薦。
                    </h1>
                    <p>
                    韓式風味牛
                    </p>
                    <div class="btn-box">
                      <a href="#menu" class="btn1">
                        立即點餐
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  

  <!-- end offer section -->

  <!-- food section -->
<br>
  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          菜單
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">全部商品</li>
        <li data-filter=".classic">經典餐盒</li>
        <li data-filter=".roll">輕食捲捲</li>
        <li data-filter=".salad">沙拉水果盒</li>
        <li data-filter=".main">主食單品</li>
        <li data-filter=".other">其他單品</li>
        <li data-filter=".drink">飲料</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all classic">
            
          <form action="" method="post" >
            
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                            <div class="modal-dialog" role="document" id="exampleModalLabel">
                                <div class="modal-content" style="padding: 20px 20px;">
                                <img src="images/義式香草雞胸.jpeg" style="border-radius: 5px;">
                                <div class="modal-body" style="color: black;">
                                  <h5>義式香草雞胸（62kcal）</h5>
                                  <h6>蛋白質13.44g 脂肪0.54g 碳水0.84g</h6>
                                  <hr>
                                  <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                  <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                  <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>餐點備註</p>
                                  <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                  <div class="goods_num clearfix">
                                  <p class="num_name fl">訂購數量</p>
                                  <p class="num_add fl">
                                    <center>
                                      <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                      <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                      <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                    </center>
                                  </p>
                                  <div class="total" style="text-align: right;">總價：<em id="price">110</em> 元</div>
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
                                                $('#price').text(total.toFixed(0));

                                            }
                                        });
                                    });
                                </script>
                                </div>   
                                </div>
                                <div class="modal-footer">
                                  <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                  <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                </div>
                            </div>
                            </div>
                        </div>        
                </form>
            <div class="box" data-toggle="modal" data-target="#exampleModal">
                  <img src="images/義式香草雞胸.jpeg" alt="" width= 100% height= 100%> 
                <div class="detail-box">
                  <h5>
                    義式香草雞胸（62kcal）
                  </h5>
                  <p>
                  蛋白質13.44g 脂肪0.54g 碳水0.84g
                  </p>
                  <div class="options">
                    <h6>
                      $110
                    </h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 all classic">
            
            <form action="" method="post" >
              
                  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel1">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/朝日咖哩雞胸.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>朝日咖哩雞胸（70kcal）</h5>
                                    <h6>蛋白質13.98g 脂肪1.56g 碳水3.72g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price1">110</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price1').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price1').html(total.toFixed(0));
                                          });

                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price1').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                  </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal1">
                    <img src="images/朝日咖哩雞胸.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                      朝日咖哩雞胸（70kcal）
                    </h5>
                    <p>
                    蛋白質13.98g 脂肪1.56g 碳水3.72g
                    </p>
                    <div class="options">
                      <h6>
                        $110
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-sm-6 col-lg-4 all classic">
              <form action="" method="post" >
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true" role="dialog">
                  <div class="modal-dialog" role="document" id="exampleModalLabel2">
                    <div class="modal-content" style="padding: 20px 20px;">
                      <img src="images/檸檬椒鹽雞胸.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>檸檬椒鹽雞胸（63kcal）</h5>
                                    <h6>蛋白質12.6g 脂肪1.02g 碳水0.9g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price2">110</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price2').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price2').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price2').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                  </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal2">
                    <img src="images/檸檬椒鹽雞胸.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                    檸檬椒鹽雞胸（63kcal）
                    </h5>
                    <p>
                    蛋白質12.6g 脂肪1.02g 碳水0.9g
                    </p>
                    <div class="options">
                      <h6>
                        $110
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all classic">
                <form action="" method="post" > 
                  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel3">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/墨西哥紅椒雞胸.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>墨西哥紅椒雞胸（80kcal）</h5>
                                    <h6>蛋白質14.22g 脂肪1.26g 碳水2.82g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price3">110</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price3').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price3').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price3').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                  </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal3">
                    <img src="images/墨西哥紅椒雞胸.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                    墨西哥紅椒雞胸（80kcal）
                    </h5>
                    <p>
                    蛋白質14.22g 脂肪1.26g 碳水2.82g
                    </p>
                    <div class="options">
                      <h6>
                        $110
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

          <div class="col-sm-6 col-lg-4 all classic">
                <form action="" method="post" > 
                  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel4">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/法式香榭雞腿.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>法式香榭雞腿（170kcal）</h5>
                                    <h6>蛋白質15.82g 脂肪8.82g 碳水6.91g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price4">135</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price4').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price4').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price4').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                  </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal4">
                    <img src="images/法式香榭雞腿.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                    法式香榭雞腿（170kcal）
                    </h5>
                    <p>
                    蛋白質15.82g 脂肪8.82g 碳水6.91g
                    </p>
                    <div class="options">
                      <h6>
                        $135
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

          <div class="col-sm-6 col-lg-4 all classic">
                <form action="" method="post" > 
                  <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel5">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/日式薑燒豬.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>日式薑燒豬（194kcal）</h5>
                                    <h6>蛋白質16.5g 脂肪12.75g 碳水2.25g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price5">125</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price5').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price5').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price5').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                  </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal5">
                    <img src="images/日式薑燒豬.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                    日式薑燒豬（194kcal）
                    </h5>
                    <p>
                    蛋白質16.5g 脂肪12.75g 碳水2.25g
                    </p>
                    <div class="options">
                      <h6>
                        $125
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all classic">
                <form action="" method="post" > 
                  <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel6">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/韓式風味牛.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>韓式風味牛（161kcal）</h5>
                                    <h6>蛋白質11.5g 脂肪11.2g 碳水3.5g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price6">155</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price6').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price6').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price6').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                  </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal6">
                    <img src="images/韓式風味牛.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                    韓式風味牛（161kcal）
                    </h5>
                    <p>
                    蛋白質11.5g 脂肪11.2g 碳水3.5g
                    </p>
                    <div class="options">
                      <h6>
                        $155
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all classic">
                <form action="" method="post" > 
                  <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel7">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/泰式打拋豬.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>泰式打拋豬（176kcal）</h5>
                                    <h6>蛋白質16g 脂肪8g 碳水10g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price7">140</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price7').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price7').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price7').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                  </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal7">
                    <img src="images/泰式打拋豬.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                    泰式打拋豬（176kcal）
                    </h5>
                    <p>
                    蛋白質16g 脂肪8g 碳水10g
                    </p>
                    <div class="options">
                      <h6>
                        $140
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all classic">
                <form action="" method="post" > 
                  <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel8">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/普羅旺斯鯛魚.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>普羅旺斯鯛魚（79kcal）</h5>
                                    <h6>蛋白質15.6g 脂肪1.84g 碳水0.16g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price8">140</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price8').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price8').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price8').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                  </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal8">
                    <img src="images/普羅旺斯鯛魚.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                    普羅旺斯鯛魚（79kcal）
                    </h5>
                    <p>
                    蛋白質15.6g 脂肪1.84g 碳水0.16g
                    </p>
                    <div class="options">
                      <h6>
                        $140
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all classic">
                <form action="" method="post" > 
                  <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel9">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/素食綜合野菇.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>素食綜合野菇（78kcal）</h5>
                                    <h6>蛋白質5.63g 脂肪0.46g 碳水12.82g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price9">135</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price9').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price9').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price9').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box" data-toggle="modal" data-target="#exampleModal9">
                    <img src="images/素食綜合野菇.jpeg" alt="" width= 100% height= 100%> 
                  <div class="detail-box">
                    <h5>
                    素食綜合野菇（78kcal）
                    </h5>
                    <p>
                    蛋白質5.63g 脂肪0.46g 碳水12.82g
                    </p>
                    <div class="options">
                      <h6>
                        $135
                      </h6>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-lg-4 all classic">
                <form action="" method="post" > 
                  <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel9">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/素食綜合野菇.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>素食綜合野菇（78kcal）</h5>
                                    <h6>蛋白質5.63g 脂肪0.46g 碳水12.82g</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>選擇副餐</p>
                                    <label><input type="radio" name="sidemeal" value=""> 紅藜白飯（274kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 食蔬半飯（157kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sidemeal" value=""> 地瓜食蔬（109kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value=""> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value=""> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="" placeholder="餐點若有特殊需求，請備註在此。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price9">135</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price9').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price9').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price9').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                    <input type="button" value="返回" class="btn btn-secondary" data-dismiss="modal">
                                    <input type="submit" value="新增至購物車"  class="btn btn-warning">
                                  </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal9">
                  <div class="detail-box1">
                    <h5>
                    素食綜合野菇
                    </h5>
                    <p>
                    蛋白質5.63g 脂肪0.46g 碳水12.82g
                    </p>
                    <div class="options">
                      <h6>
                        $135
                      </h6>
                      <a href=""></a>
                    </div>

                  </div>
                </div>
              </div>

          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f9.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Pasta
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $10
                    </h6>
                    <a href="">
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->


  <!-- end about section -->

  <!-- book section -->
  
  <!-- end book section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Moana Michell
                </h6>
                <p>
                  magna aliqua
                </p>
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Mike Hamell
                </h6>
                <p>
                  magna aliqua
                </p>
              </div>
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              聯絡我們
            </h4>
            <div class="contact_link_box">
              <a href="https://www.google.com/maps/place/%E6%96%B9%E7%A6%BE%E9%A3%9F%E5%91%82/@25.03403,121.430541,15z/data=!4m2!3m1!1s0x0:0xe3a4beb2b893c821?sa=X&ved=2ahUKEwibkauQl6f3AhV1yosBHaD9AY4Q_BJ6BAhgEAU">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                242新北市新莊區中正路514巷53弄39號
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +02 2908-1397
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                storyboxtw@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              方禾食呂
            </a>
            <p>
            健康飲食好夥伴
            </p>
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
          <h4>
            營業時間
          </h4>
          <p>
            每天
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 

rap.js"></script>
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