<?php
session_start();
$link=mysqli_connect("localhost","root","12345678","sa");

if(isset($_POST["way"])){
  $way = $_POST["way"];
  if($way == 0){
    if(isset($_POST["seatnum"])){
      $seatnum= $_POST["seatnum"];
      $sql="insert into `way`( way, seat) values ('0', '$seatnum')";
      $rs=mysqli_query($link,$sql);
      if($rs){
        $_SESSION["way"] = $way;
      }
    }
  }
  else{
    $sql="insert into `way`(way) values ('1')";
    $rs=mysqli_query($link,$sql);
    if($rs){
      $_SESSION["way"] = $way;
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

 

</head>

<body>
<?php
              $way = $_SESSION["way"];
              if(isset($_SESSION["way"])){
                echo "<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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
                          <input name= 'way' value='1' type='hidden'>  
                          <button class='btn btn-warning' data-dismiss='modal'>自取</button>
                        </form>
                        
                          <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal'>內用</button>
                          
          
                       
                      <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                      <div class='modal-dialog'>
                        <div class='modal-content'>
                        <div class='modal-footer'>
                        <form action='index.php' method='post'>
                          <input name= 'way' value='0' type='hidden'>
                            請輸入桌號：<input type='text' placeholder='桌號' name='seatnum'>
                            <button class='btn btn-warning'>確認</button>
                            <button class='btn btn-secondary' data-dismiss='modal'>不吃了！</button>
                            </form>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
          
                     
                    </div></center>
          </div>
                  </div>
                </div>
              </div>";
              }
              
              ?>

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
              <?php
              echo "$way";
              if($way==0){
                ?>
                <button class='btn btn-warning'><?php echo "內用";?></button>
                <?php
              }
              
              if($way==1){
                ?>
                <button class='btn btn-warning'><?php echo "自取";?></button>
               <?php
              }
              ?>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">訂餐首頁 <span class="sr-only">(current)</span></a>
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
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
              <div class="col-md-7 col-lg-11 ">
                <img src="images/檸檬椒鹽雞胸.jpeg" width="50%" alt="" align="right"> 
                  <div class="detail-box">
                    <h1>
                      熱銷餐點。
                    </h1>
                    <p>
                      檸檬椒鹽雞胸，清爽無負擔
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
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
              <div class="col-md-7 col-lg-11 ">
                <img src="images/素食綜合野菇2.jpeg" width="49%" align="right" alt=""> 
                  <div class="detail-box">
                    <h1>
                     輕食一下。
                    </h1>
                    <p>
                    捲餅系列，給不太餓的你
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
                <img src="images/韓式風味牛.jpeg" width="50%" alt="" align="right"> 
                  <div class="detail-box">
                    <h1>
                      店長推薦。
                    </h1>
                    <p>
                    店長推薦！
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
        <h2 id="menu">
          菜單
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">全部商品</li>

        <a  style="text-decoration: none" href="#classic"><li>經典餐盒</li></a>
        <a href="#roll"><li>輕食捲捲</li></a>
        <a href="#salad"><li>沙拉水果盒</li></a>
        <a href="#main"><li>主食單品</li></a>
        <a href="#other"><li>其他單品</li></a>
        <a href="#drink"><li>飲料</li></a>

      </ul>
    
      <br>
      <h2 id="classic">經典餐盒</h2>
      <hr>
      
          <div class="row grid">
            <div class="col-sm-6 col-lg-4 all classic">   
              <form action="con1.php" method="post" >
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                            <div class="modal-dialog" role="document" id="exampleModalLabel">
                                <div class="modal-content" style="padding: 20px 20px;">
                                <img src="images/義式香草雞胸.jpeg" style="border-radius: 5px;">
                                <div class="modal-body" style="color: black;">
                                  <h5>義式香草雞胸（62kcal）</h5>

                                  <input type="hidden" name ="mealname" value="1">

                                  <h6>蛋白質13.44g 脂肪0.54g 碳水0.84g</h6>
                                  <hr>
                                  <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>餐點備註</p>
                                  <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
            
            <form action="con1.php" method="post" >
              
                  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel1">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/朝日咖哩雞胸.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>朝日咖哩雞胸（70kcal）</h5>

                                    <input type="hidden" name ="mealname" value="2">
                                    <h6>蛋白質13.98g 脂肪1.56g 碳水3.72g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
              <form action="con1.php" method="post" >
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true" role="dialog">
                  <div class="modal-dialog" role="document" id="exampleModalLabel2">
                    <div class="modal-content" style="padding: 20px 20px;">
                      <img src="images/檸檬椒鹽雞胸.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>檸檬椒鹽雞胸（63kcal）</h5>
                                    <input type="hidden" name ="mealname" value="3">
                                    <h6>蛋白質12.6g 脂肪1.02g 碳水0.9g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel3">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/墨西哥紅椒雞胸.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>墨西哥紅椒雞胸（80kcal）</h5>
                                    <input type="hidden" name ="mealname" value="4">
                                    <h6>蛋白質14.22g 脂肪1.26g 碳水2.82g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel4">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/法式香榭雞腿.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>法式香榭雞腿（170kcal）</h5>
                                    <input type="hidden" name ="mealname" value="5">
                                    <h6>蛋白質15.82g 脂肪8.82g 碳水6.91g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel5">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/日式薑燒豬.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>日式薑燒豬（194kcal）</h5>
                                    <input type="hidden" name ="mealname" value="6">
                                    <h6>蛋白質16.5g 脂肪12.75g 碳水2.25g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel6">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/韓式風味牛.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>韓式風味牛（161kcal）</h5>
                                    <input type="hidden" name ="mealname" value="7">
                                    <h6>蛋白質11.5g 脂肪11.2g 碳水3.5g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel7">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/泰式打拋豬.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>泰式打拋豬（176kcal）</h5>
                                    <input type="hidden" name ="mealname" value="8">
                                    <h6>蛋白質16g 脂肪8g 碳水10g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel8">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/普羅旺斯鯛魚.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>普羅旺斯鯛魚（79kcal）</h5>
                                    <input type="hidden" name ="mealname" value="9">
                                    <h6>蛋白質15.6g 脂肪1.84g 碳水0.16g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel9">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <img src="images/素食綜合野菇.jpeg" style="border-radius: 5px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>素食綜合野菇（78kcal）</h5>
                                    <input type="hidden" name ="mealname" value="10">
                                    <h6>蛋白質5.63g 脂肪0.46g 碳水12.82g</h6>
                                    <hr>
                                    <p>選擇副餐</p>
                                  <label><input type="radio" name="sidemeal" value="1"> 紅藜白飯（274kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="2"> 食蔬半飯（157kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sidemeal" value="3"> 地瓜食蔬（109kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <p>選擇醬料</p>
                                  <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                  <label style="float: right;">+$0</label>
                                  <br>
                                  <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                  <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
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
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
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
            </div>

            <br><br>
            <h2 id="roll">輕食捲捲</h2>
            <hr>

            <div class="row grid">
              <div class="col-sm-6 col-lg-4 all roll">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel10" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel10">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>墨西哥嫩雞捲</h5>
                                    <input type="hidden" name ="mealname" value="捲1">
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price10">70</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price10').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price10').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price10').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal10">
                  <div class="detail-box1">
                    <h5>
                    墨西哥嫩雞捲
                    </h5>
                    <div class="options">
                      <h6>
                        $70
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all roll">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel11">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>美式起司牛肉捲</h5>
                                    <input type="hidden" name ="mealname" value="捲2">
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price11">80</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price11').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price11').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price11').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal11">
                  <div class="detail-box1">
                    <h5>
                    美式起司牛肉捲
                    </h5>
                    <h6></h6>
                    <div class="options">
                      <h6>
                        $80
                      </h6>
                      <a href=""></a>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all roll">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel12" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel12">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>地瓜起司嫩雞捲</h5>
                                    <input type="hidden" name ="mealname" value="捲3">
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price12">75</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price12').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price12').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price12').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal12">
                  <div class="detail-box1">
                    <h5>
                    地瓜起司嫩雞捲
                    </h5>
                    <div class="options">
                      <h6>
                        $75
                      </h6>
                      <a href=""></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <br><br>
            <h2 id="salad">沙拉水果盒</h2>
            <hr>

            <div class="row grid">
              <div class="col-sm-6 col-lg-4 all salad">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel13" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel13">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>季節水果盒</h5>
                                    <input type="hidden" name ="mealname" value="沙拉1">
                                    <h6>360ml/份<br>
                                        (水果種類隨季節調整)</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price13">50</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price13').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price13').html(total.toFixed(0));
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
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal13">
                  <div class="detail-box1">
                    <h5>
                    季節水果盒
                    </h5>
                    <div class="options">
                      <h6>
                        $50
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all salad">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel14" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel14">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>陽光沙拉盒</h5>
                                    <input type="hidden" name ="mealname" value="沙拉2">
                                    <h6>360ml/份<br>
                                        (配菜種類隨季節調整)<br>
                                        可以到主食單品區加點主食，補充蛋白質哦！</h6>
                                    <hr>
                                    <p>選擇醬料</p>
                                    <label><input type="radio" name="sauce" value="1"> 焙煎胡麻醬（87kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value="2"> 義式油醋醬（44kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value="3"> 奇亞芥末醬（43kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <br>
                                    <label><input type="radio" name="sauce" value="4"> 水果塔塔醬（36kcal）</label>
                                    <label style="float: right;">+$0</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price14">65</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price14').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price14').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price14').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal14">
                  <div class="detail-box1">
                    <h5>
                    陽光沙拉盒
                    </h5>
                    <div class="options">
                      <h6>
                        $65
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br><br>
            <h2 id="main">主食單品</h2>
            <hr>

            <div class="row grid">
              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel15" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel15">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>義式香草雞胸（62kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品1">
                                    <h6>蛋白質13.44g 脂肪0.54g 碳水0.84g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price15">40</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price15').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price15').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price15').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal15">
                  <div class="detail-box1">
                    <h5>
                    義式香草雞胸（62kcal）
                    </h5>
                    <p>
                    蛋白質11.5g 脂肪11.2g 碳水3.5g
                    </p>
                    <div class="options">
                      <h6>
                        $40
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel16" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel16">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>朝日咖哩雞胸（70kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品2">
                                    <h6>蛋白質13.98g 脂肪1.56g 碳水3.72g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price16">40</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price16').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price16').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price16').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal16">
                  <div class="detail-box1">
                    <h5>
                    朝日咖哩雞胸（70kcal）
                    </h5>
                    <p>
                    蛋白質13.98g 脂肪1.56g 碳水3.72g
                    </p>
                    <div class="options">
                      <h6>
                        $40
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel17" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel17">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>檸檬椒鹽雞胸（63kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品3">
                                    <h6>蛋白質12.6g 脂肪1.02g 碳水0.9g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price17">40</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price17').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price17').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price17').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal17">
                  <div class="detail-box1">
                    <h5>
                    檸檬椒鹽雞胸（63kcal）
                    </h5>
                    <p>
                    蛋白質12.6g 脂肪1.02g 碳水0.9g
                    </p>
                    <div class="options">
                      <h6>
                        $40
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModalLabel18" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel18">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>墨西哥紅椒雞胸（80kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品4">
                                    <h6>蛋白質14.22g 脂肪1.26g 碳水2.82g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price18">40</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price18').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price18').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price18').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal18">
                  <div class="detail-box1">
                    <h5>
                    墨西哥紅椒雞胸（80kcal）
                    </h5>
                    <p>
                    蛋白質14.22g 脂肪1.26g 碳水2.82g
                    </p>
                    <div class="options">
                      <h6>
                        $40
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal19" tabindex="-1" aria-labelledby="exampleModalLabel19" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel19">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>法式香榭雞腿（170kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品5">
                                    <h6>蛋白質15.82g 脂肪8.82g 碳水6.91g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price19">65</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price19').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price19').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price19').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal19">
                  <div class="detail-box1">
                    <h5>
                    法式香榭雞腿（170kcal）
                    </h5>
                    <p>
                    蛋白質15.82g 脂肪8.82g 碳水6.91g
                    </p>
                    <div class="options">
                      <h6>
                        $65
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel20" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel20">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>韓式風味牛（161kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品6">
                                    <h6>蛋白質11.5g 脂肪11.2g 碳水3.5g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price20">85</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price20').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price20').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price20').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal20">
                  <div class="detail-box1">
                    <h5>
                    韓式風味牛（161kcal）
                    </h5>
                    <p>
                    蛋白質11.5g 脂肪11.2g 碳水3.5g
                    </p>
                    <div class="options">
                      <h6>
                        $85
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal21" tabindex="-1" aria-labelledby="exampleModalLabel21" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel21">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>日式薑燒豬（194kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品7">
                                    <h6>蛋白質16.5g 脂肪12.8g 碳水2.25g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price21">55</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price21').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price21').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price21').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal21">
                  <div class="detail-box1">
                    <h5>
                    日式薑燒豬（194kcal）
                    </h5>
                    <p>
                    蛋白質16.5g 脂肪12.8g 碳水2.25g
                    </p>
                    <div class="options">
                      <h6>
                        $55
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModalLabel22" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel22">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>泰式打拋豬（176kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品8">
                                    <h6>蛋白質16g 脂肪8g 碳水10g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price22">70</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price22').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price22').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price22').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal22">
                  <div class="detail-box1">
                    <h5>
                    泰式打拋豬（176kcal）
                    </h5>
                    <p>
                    蛋白質16g 脂肪8g 碳水10g
                    </p>
                    <div class="options">
                      <h6>
                        $70
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel23" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel23">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>普羅旺斯鯛魚（79kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品9">
                                    <h6>蛋白質15.6g 脂肪1.84g 碳水0.16g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price23">70</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price23').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price23').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price23').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal23">
                  <div class="detail-box1">
                    <h5>
                    普羅旺斯鯛魚（79kcal）
                    </h5>
                    <p>
                    蛋白質15.6g 脂肪1.84g 碳水0.16g
                    </p>
                    <div class="options">
                      <h6>
                        $70
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all main">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal24" tabindex="-1" aria-labelledby="exampleModalLabel24" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel24">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>素食綜合野菇（78kcal）</h5>
                                    <input type="hidden" name ="mealname" value="單品10">
                                    <h6>蛋白質5.6g 脂肪0.46g 碳水12.8g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price24">65</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price24').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price24').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price24').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal24">
                  <div class="detail-box1">
                    <h5>
                    素食綜合野菇（78kcal）
                    </h5>
                    <p>
                    蛋白質5.6g 脂肪0.46g 碳水12.8g
                    </p>
                    <div class="options">
                      <h6>
                        $65
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <br><br>
            <h2 id="other">其他單品</h2>
            <hr>

            <div class="row grid">
              <div class="col-sm-6 col-lg-4 all other">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal25" tabindex="-1" aria-labelledby="exampleModalLabel25" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel25">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>水煮青菜（36kcal）</h5>
                                    <input type="hidden" name ="mealname" value="其他1">
                                    <h6>蛋白質2.59g 脂肪2.02g 碳水3.31g<br>
                                        (青菜種類隨季節調整)</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price25">30</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price25').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price25').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price25').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal25">
                  <div class="detail-box1">
                    <h5>
                    水煮青菜（36kcal）
                    </h5>
                    <p>
                    蛋白質2.59g 脂肪2.02g 碳水3.31g
                    </p>
                    <div class="options">
                      <h6>
                        $30
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all other">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal26" tabindex="-1" aria-labelledby="exampleModalLabel26" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel26">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>紅藜白飯（274kcal）</h5>
                                    <input type="hidden" name ="mealname" value="其他2">
                                    <h6>蛋白質4.88g 脂肪0.51g 碳水62.28g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price26">20</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price26').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price26').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price26').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal26">
                  <div class="detail-box1">
                    <h5>
                    紅藜白飯（274kcal）
                    </h5>
                    <p>
                    蛋白質4.88g 脂肪0.51g 碳水62.28g
                    </p>
                    <div class="options">
                      <h6>
                        $20
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all other">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal27" tabindex="-1" aria-labelledby="exampleModalLabel27" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel27">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>整顆溏心蛋（48kcal）</h5>
                                    <input type="hidden" name ="mealname" value="其他3">
                                    <h6>蛋白質5.2g 脂肪2.8g 碳水0.6g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price27">20</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price27').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price27').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price27').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal27">
                  <div class="detail-box1">
                    <h5>
                    整顆溏心蛋（48kcal）
                    </h5>
                    <p>
                    蛋白質5.2g 脂肪2.8g 碳水0.6g
                    </p>
                    <div class="options">
                      <h6>
                        $20
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all other">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal28" tabindex="-1" aria-labelledby="exampleModalLabel28" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel28">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>焙煎胡麻醬（87kcal）</h5>
                                    <input type="hidden" name ="mealname" value="其他4">
                                    <h6>蛋白質0.52g 脂肪8.26g 碳水2.41g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price28">10</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price28').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price28').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price28').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal28">
                  <div class="detail-box1">
                    <h5>
                    焙煎胡麻醬（87kcal）
                    </h5>
                    <p>
                    蛋白質0.52g 脂肪8.26g 碳水2.41g
                    </p>
                    <div class="options">
                      <h6>
                        $10
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all other">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal29" tabindex="-1" aria-labelledby="exampleModalLabel29" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel29">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>義式油醋醬（44kcal）</h5>
                                    <input type="hidden" name ="mealname" value="其他5">
                                    <h6>蛋白質0.06g 脂肪4.26g 碳水1.56g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price29">10</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price29').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price29').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price29').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal29">
                  <div class="detail-box1">
                    <h5>
                    義式油醋醬（44kcal）
                    </h5>
                    <p>
                    蛋白質0.06g 脂肪4.26g 碳水1.56g
                    </p>
                    <div class="options">
                      <h6>
                        $10
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all other">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal30" tabindex="-1" aria-labelledby="exampleModalLabel30" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel30">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>奇亞芥末醬（43kcal）</h5>
                                    <input type="hidden" name ="mealname" value="其他6">
                                    <h6>蛋白質0.15g 脂肪3g 碳水3.75g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price30">10</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price30').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price30').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price30').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal30">
                  <div class="detail-box1">
                    <h5>
                    奇亞芥末醬（43kcal）
                    </h5>
                    <p>
                    蛋白質0.15g 脂肪3g 碳水3.75g
                    </p>
                    <div class="options">
                      <h6>
                        $10
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all other">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal31" tabindex="-1" aria-labelledby="exampleModalLabel31" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel31">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>水果塔塔醬（36kcal）</h5>
                                    <input type="hidden" name ="mealname" value="其他7">
                                    <h6>蛋白質0g 脂肪2.25g 碳水3.9g</h6>
                                    <hr>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price31">10</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price31').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price31').html(total.toFixed(0));
                                          });
                                        
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price31').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal31">
                  <div class="detail-box1">
                    <h5>
                    水果塔塔醬（36kcal）
                    </h5>
                    <p>
                    蛋白質0g 脂肪2.25g 碳水3.9g
                    </p>
                    <div class="options">
                      <h6>
                        $10
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <br><br>
            <h2 id="drink">飲料</h2>
            <hr>

            <div class="row grid">
              <div class="col-sm-6 col-lg-4 all drink">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal32" tabindex="-1" aria-labelledby="exampleModalLabel32" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel32">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>伯爵鮮奶茶</h5>
                                    <input type="hidden" name ="mealname" value="飲料1">
                                    <hr>
                                    <p>選擇冰量</p>
                                    <label><input type="radio" name="temp" value="1"> 冷</label>
                                    <br>
                                    <label><input type="radio" name="temp" value="2"> 溫</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price32">50</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price32').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price32').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price32').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal32">
                  <div class="detail-box1">
                    <h5>
                    伯爵鮮奶茶
                    </h5>
                    <div class="options">
                      <h6>
                        $50
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all drink">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal33" tabindex="-1" aria-labelledby="exampleModalLabel33" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel33">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>美式咖啡</h5>
                                    <input type="hidden" name ="mealname" value="飲料2">
                                    <hr>
                                    <p>選擇冰量</p>
                                    <label><input type="radio" name="temp" value="1"> 冷</label>
                                    <br>
                                    <label><input type="radio" name="temp" value="2"> 溫</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price33">50</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price33').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price33').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price33').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal33">
                  <div class="detail-box1">
                    <h5>
                    美式咖啡
                    </h5>
                    <div class="options">
                      <h6>
                        $50
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all drink">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal34" tabindex="-1" aria-labelledby="exampleModalLabel34" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel34">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>咖啡歐蕾</h5>
                                    <input type="hidden" name ="mealname" value="飲料3">
                                    <hr>
                                    <p>選擇冰量</p>
                                    <label><input type="radio" name="temp" value="1"> 冷</label>
                                    <br>
                                    <label><input type="radio" name="temp" value="2"> 溫</label>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price34">65</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price34').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price34').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price34').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal34">
                  <div class="detail-box1">
                    <h5>
                    咖啡歐蕾
                    </h5>
                    <div class="options">
                      <h6>
                        $65
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all drink">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal35" tabindex="-1" aria-labelledby="exampleModalLabel35" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel35">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>無糖綠茶</h5>
                                    <input type="hidden" name ="mealname" value="飲料4">
                                    <h6>無法客製化甜度與冰塊！</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price35">30</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price35').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price35').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price35').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal35">
                  <div class="detail-box1">
                    <h5>
                    無糖綠茶
                    </h5>
                    <div class="options">
                      <h6>
                        $30
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 all drink">
                <form action="con1.php" method="post" > 
                  <div class="modal fade" id="exampleModal36" tabindex="-1" aria-labelledby="exampleModalLabel36" aria-hidden="true" role="dialog">
                              <div class="modal-dialog" role="document" id="exampleModalLabel36">
                                  <div class="modal-content" style="padding: 20px 20px;">
                                  <div class="modal-body" style="color: black;">
                                    <h5>無糖紅茶</h5>
                                    <input type="hidden" name ="mealname" value="飲料5">
                                    <h6>無法客製化甜度與冰塊！</h6>
                                    <hr>
                                    <p>訂購者姓名（僅用於店家出餐時辨識）</p>
                                    <p><input type="text" name="name" value="" style="border-radius: 5px; width: 100%;"></p>
                                    <p>餐點備註</p>
                                    <p><input type="text" name="note" placeholder="餐點若有特殊需求，請備註在此。僅限20字。" style="border-radius: 5px; width: 100%;"></p>
                                    <div class="goods_num clearfix">
                                    <p class="num_name fl">訂購數量</p>
                                    <p class="num_add fl">
                                      <center>
                                        <input type="button" href="javascript:;" class="minus fr" value="-" style="float: left; width: 40px;">                      
                                        <input type="text" name="num" class="num_show fl" value="1" style="text-align: center; width: 80%;">
                                        <input type="button" href="javascript:;" class="add fr" value="+" style="float: right; width: 40px;"> 
                                      </center>
                                    </p>
                                    <div class="total" style="text-align: right;">總價：<em id="price36">30</em> 元</div>
                                    <script>
                                      $(function () {
                                          //加號
                                          var price1 = parseFloat($('#price36').text());
                                          var num = parseInt($('input[name="num"]').attr('value'));
                                          $('.add').click(function(){
                                              num++;
                                              $('input[name="num"]').attr('value',num);
                                              var total = num * price1;
                                              $('#price36').html(total.toFixed(0));
                                          });
                                          
                                          //減號
                                          $('.minus').click(function () {
                                              if(num>1){
                                                  num--;
                                                  $('input[name="num"]').attr('value',num);
                                                  console.log(num)
                                                  var total = num * price1;
                                                  $('#price36').text(total.toFixed(0));

                                              }
                                          });
                                      });
                                    </script>
                                  </div>   
                                  </div>
                                  <div class="modal-footer">
                                  <?php
                                  if($_SESSION["member_phone"]==NULL){
                                    echo "<a href='login.php' class='btn btn-warning'>請先登入再選擇餐點</a>";
                                  }
                                  else{
                                    echo 
                                    "<input type='button' value='返回' class='btn btn-secondary' data-dismiss='modal'>
                                    <input type='submit' value='新增至購物車'  class='btn btn-warning'>";
                                  }
                                  ?>
                                </div>
                              </div>
                              </div>
                          </div>        
                  </form>
              <div class="box1" data-toggle="modal" data-target="#exampleModal36">
                  <div class="detail-box1">
                    <h5>
                    無糖紅茶
                    </h5>
                    <div class="options">
                      <h6>
                        $30
                      </h6>
                      <a href=""></a>
                    </div>
                  </div>
                </div>
              </div>

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
            <a href="" class="footer-logo">
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
          <h4>
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 

</script>
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