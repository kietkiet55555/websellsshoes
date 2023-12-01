<?php session_start(); 
        //  unset($_SESSION['content']);
        if (isset($_GET["choose"])) $selected = $_GET["choose"];
        else $selected='thuonghieu';
        $_SESSION['bandOrCode'] =  $selected;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #head{
            display: flex;
            background-color: #A9EDED;
            border-color:#5AA183;
            border-radius:10px;
            width: 100%;
            height: 102px;
        }
        #btnhome{
            background-color: #4FBCA3;
            width: 159px;
            height: 102px; 
            /* border-radius:10px; */
            display: flex;
            border: none;
        }
        #btnhome:hover {
        background-color: #00ff00; 
        }
        .homepage{
         
            width: 169px;
            height: 102px; 
            /* display: flex; */
         
        }
        .areafind-login{
            /* background-color: yellow; */
            width: 1271px;
            height: 102px; 

        }
        .imglogo img{
            border-radius: 10px ;
            position: absolute; 
            left: 8px; 
            top:8px;
        }
        .nameweb{
            font-size: 20px;
            color: #772A2A;
            font-style: italic;
            font-weight: bold;
            /* transform: translate(5px, 17px);  */
            position: absolute; 
            top: 25px; 
            left: 100px; 
        }
    
        .combb{
            /* position: relative; */
            /* width: 200px; */
            display: inline-block;
        }
        #combobox-options{
  
            width: 120px;
            height: 35px;
            background: #A1AAA6;
       
            padding-left: 44px; 
            border-radius: 3px;
        
            background-size:20px 20px; 
            text-align: left;
            position: absolute; 
            top: 31px; 
            left: 185px; 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            /* background: url('./img/sort-down.png') no-repeat right center; */
        
        }
      #iconsoftdown{
      
            width: 20px;
            height: 20px;
            background: url('./img/sort-down.png') no-repeat;
            background-size: contain;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            }
      
        #inputfind{
            width: 408px;
            height: 48px;
            position: absolute; 
            top: 31px; 
            left: 320px; 
        }

        .equimentfind{
            position: relative;
            display: inline-block;
            transition:  0.3s;
            border-radius:10px;
            width: 60px;
            height: 48px;
            position: absolute; 
            top: 36px; 
            left: 750px; 
            /* background-color: #80B3D9;  */
          
        }
        .equimentfind img{
            width: 60px;
            height: 48px;
            position: absolute;
            left: 0px;
            top: 0px; 
            border-radius:10px;
        }
        #btnsearch{
            width: 60px;
            height: 48px;
            background-color: #80B3D9; 
            border:none;
            border-radius:10px;
        }
        .equimentfind :hover {
            background-color: #00ff00; 
            border-radius: 10px ;
        }
        .cart{
            position: absolute; 
            top: 31px; 
            left: 840px; 
          
        }
        #btncart{
            background-color: transparent; 
             border: none;
        }
        #btncart:hover {
        background-color: #00ff00; 
        }
        #ph{
            display: flex;
            position: absolute; 
            top: 10px; 
            left: 910px; 
            text-align: center;
            background-color: transparent; 
            border: none;
            width: 150px;
            height: 30px;
             
        }

        #ph:hover {
        background-color: #00ff00; 
        }
        #login{
            display: flex;
            position: absolute; 
            top: 10px; 
            left: 1060px; 
            text-align: center;
            background-color: transparent; 
            border: none;
            width: 160px;
            height: 30px;
        }
        #login:hover {
        background-color: #00ff00; 
        }
        #contenthelp{
            font-size:14px;
            position: absolute; 
            top: 6px; 
            left: 40px; 
        }
        #nameaccount{
            font-size:14px;
            position: absolute; 
            top: 6px; 
            left: 40px; 
        }
        #tabfilter{
            list-style: none; 
            display: flex;
            /* width:1440px; */
            height: 100%;
            /* padding: 5px; */
            background: linear-gradient(to bottom, #48754D, #B4FEBB,#497F4F);
            align-items:center;
            margin: 0;
            padding: 0;
        }
        #tabfilter li{
            text-align:center;
            /* border: 2px black solid; */
            display:block;
            line-height: 2;
         
        }
        #tabfilter a{
            text-decoration: none;
            color:black;
             width: 100%;
            height:100%;
        }
        #tabfilter li:hover{
                background:#589465;
        }
        #locgiay{
            text-align:left;
            width: 100%;
            height:100%;
   
        }
        
        .frameshoes{
            border:2px red solid;
            width: 202px;
            height:245px;
            margin: 15px;
            text-decoration: none;
            color:black;
            background:#ffffff;
            border: 1px solid #6D88CB;
        }

        .areashowshoes{
        
            width: 90%;
            height:700px;
            
            display : flex;
            flex-direction : row ;
            /* justify-content : space-around; */
            flex-flow : wrap;
            position: absolute; 
            top:143px;
            right: 50px; 
            background:#ffffff;
           
        }
        #notfound{
            position: absolute; 
            top: 400px; 
            left: 430px; 
        }
        .seprapage{
      

            display: flex;
            font-size:20px;
            background:#ffffff;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            /* height: 80; */
            position: absolute; 
            /* margin:5px; */
            right: 50px; 
          
        }
        .seprapage a{
            background:#E5DDDD;
             margin: 5px;
            width: 45px;
            height:45px; 
            text-align: center;
            align-items: center; 
            /* justify-content: center;  */
            text-decoration: none; 
            line-height: 2;
            color:black;
    
        
        }
        .seprapage a:hover{
            background:#8B8080;
        }
        .frameshoes img{
            width:200px;
            height: 180px;
         
        
        }
        p{
            margin:5px;
        }
    
        #price{
            color:red;
            margin-top:7px;
        }
        .footer{
        background:#EEDCDC;
        height: 132px;
        padding: 0;
        margin:0;
        }
        .footer hr{
        background:#979113;
        height: 1px;
        }
        #contact {
        height: 100px;

        }
        #contact p{
        text-align: center;
        line-height: 8vh;
        }
        #nameweb{
        height: 30px;
        line-height: 1vh;
        }
        #nameweb{
        text-align: center;
        }
        #numpage{
            height: 70px;
            width: 100%;
        }
        #frame{
            background:#CEC8C8;
            width:100%;
            height:700px;
        }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        width: 100%;
        height: 20px;
      
    }
    .pagination li {
        margin-right: 5px;
   
        
    }

    .pagination a {
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ccc;
        /* border-radius: 5px; */
        color: #333;
    }

    .pagination a.active {
        background-color: #8B8080;
        color: white;
    }
    .aa a{
        text-decoration: none;
        color: black;
    }

    </style>
</head>
  <?php
  
                      //--------------- thực hiện tìm kiếm----------------------
                      $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");
                      if (isset($_GET["contentfind"])) {
                        
                         
                        $contentfind = $_GET["contentfind"];
                       
                        if (isset($_GET["choose"])) $selected = $_GET["choose"];
                       
                        unset($_SESSION['bandOrCode']);  
                        unset($_SESSION['content']);
                        unset($_SESSION['page']); 
                        unset( $_SESSION['takecharfind']); 
                        unset($_SESSION['totalPages']);
                        unset( $_SESSION['rowcount']);
                        unset($_SESSION['boolean']);
                    
                        //----------------------Lấy kí tự từ textbox kiểm tra--------------------------------------
                        $filtercontentfind = str_replace(' ', '',  $contentfind);
                        $takecharfind =  substr($filtercontentfind, 0, 4);
                        $_SESSION['takecharfind'] =  $takecharfind;

                        $_SESSION['bandOrCode'] =  $selected;
                        $_SESSION['content'] =  $contentfind;
                        
                        //------------------Kết nối đến cơ sở dữ liệu--------------------------------
                     
                        // Kiểm tra kết nối
                        if (!$conn) {
                            die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
                        }
                        if( $selected=="thuonghieu")
                        $sqlCom2 = "SELECT * FROM khohang WHERE SUBSTRING(thuonghieu , 1, 4)  like '$takecharfind'  ";
                        else
                        $sqlCom2 = "SELECT * FROM khohang WHERE  SUBSTRING(masp , 1, 4)   like'$takecharfind' ";
                    
                        // $wordsfind = if( $selected=="thuonghieu") ?  "thuonghieu" : "masp"; 
                        
                        $kqkt = mysqli_query($conn, $sqlCom2);
                        $row = mysqli_fetch_array($kqkt);
                        $_SESSION['boolean'] = ($row) ? true : false;
                     

                        if (!$kqkt) {
                            die("Query failed: " . mysqli_error($conn));
                        }

                        //  đếm số dòng kết quả từ câu lệnh truy vấn của kqkt
                        $row_count = mysqli_num_rows($kqkt);
                    
                        $_SESSION['rowcount'] = $row_count;

                              
                        // Tính toán số lượng trang
                        $itemsPerPage = 10; //15
                        $_SESSION['totalPages'] =   ceil($row_count / $itemsPerPage);
                       
          
                    }  
                     
  ?>
<body>
    <div id="head">
            <div class="homepage">
                        <button id="btnhome">
                            <div class="imglogo"> <img src="./img/logo.jpg" width="90px"  height="102px"  alt="logo"  > </div> 
                            <div class="nameweb" > Web <br> sells <br> shoes </div>
                        </button>
                       
            </div>
            <div class="areafind-login">
                
                    <div class="operation">
                            <form action="find.php" class="execfind" method="get">
                                        <div class="combb"  >   
                                            <div id="iconsoftdown">  <img src="./img/sort-down.png" width="20px"  height="20px"  alt="">  </div> 
                                            <select id="combobox-options" name="choose">
                                                    <option value="thuonghieu"  <?php 
                                                        if ((isset($_SESSION['bandOrCode'])) && ($_SESSION['bandOrCode'] == "thuonghieu")) {
                                                            echo 'selected';
                                                        }
                                                    ?>>Hiệu giày</option>
                                                    
                                                    <option value="masp" <?php 
                                                        if ((isset($_SESSION['bandOrCode'])) && ($_SESSION['bandOrCode'] == "masp")) {
                                                            echo 'selected';
                                                        }
                                                    ?>>Mã giày</option>
                                         </select>

                                        </div>
                                        <div class="find"> 
                                                <div class="textfind">
                                                    <input type="text" id="inputfind" name="contentfind"  
                                                    value=" <?php 
                                                                if(isset($_GET["contentfind"])) echo $_GET["contentfind"]; 
                                                                else if(isset($_SESSION['content'])) echo $_SESSION['content'];
                                                                else echo "Bạn nhập ít nhất 4 kí tự";
                                                            ?>" >
                                                </div>
                                                <div class="equimentfind">
                                                    <button type="submit" id="btnsearch">
                                                            <img src="./img/search.png" width="45px"  height="45px"  alt="find">  
                                                    </button>
                                                   
                                                </div>
                                        </div>
                            </form>
                            <div class="cart"> 
                                    <button id="btncart"> 
                                             <img src="./img/shopping-cart.png" alt="cart" width="45px"  height="45px" >
                                    </button> 
                            </div>
                    </div>
                    <div class="help">

                        <div class="pagehelp">
                            <button id="ph">
                                <div class="iconhelp">
                                    <img src="./img/question.png"  width="25px"  height="25px" alt="question">
                                </div>
                                <div class="aa" id="contenthelp" > <a href="hotrogiay.php">Hỗ trợ mã giày </a>  </div>
                            </button>
                        </div>

                        <div class="account">
                            <button id="login">
                                <div> <img src="./img/account.png" width="25px"  height="25px" alt="account"></div>
                                <div class="aa" id="nameaccount"> <a href="">abc</a> </div>
                            </button>
                        </div>

                    </div>
                

            </div>
    </div>
    <div class="tab">
        <ul id="tabfilter">
            <li id="locgiay">Lọc giày</li>
            <a href="giaban.php"><li>Giá bán</li></a>
            <a href="nuocsx.php"><li>Nước sản xuất</li></a>
            <a href="theloai.php"><li>Thể loại</li></a> 
            <a href="thuonghieu.php"><li>Thương hiệu</li></a>
        </ul>
    </div>

<div id="frame">
    <div class="areashowshoes">
        <div id="sua"> Sửa giày </div>
        <div id="formSua">
               <form action="">
                <ul>
                        <li><label for="">Mã giày</label> <input type="text"> <input type="button" value=""></li>
                        <li><label for="">Tên giày</label> <input type="text"> <input type="button" value=""></li>
                        <li><label for="">Thương hiệu</label> <input type="text"> </li>
                        <li><label for="">Tải ảnh giày</label>  <input type="button" value=""></li>
                        <li><label for="">Màu sắc, số lượng, kích cỡ giày</label> <input type="text"> <input type="text"> <input type="text">  </li>
                        <li> <input type="button" value="Thêm màu sắc, số lượng, kích cỡ"> </li>
                        <li></li>
                        <li></li>

                    </ul>
               </form>


        </div>
         <?php 
         
        // -----------------------------------------------------------------------------------------------------
        // 

            


      
            
                ?>


             
    </div>
                
              
 
</div>
    <div class="footer">
        <div id="contact" class="fixsite"><p>Địa chỉ:  Số 30, đường An Dương Vương, phường  Nhơn Phú, tp Quy Nhơn.<br>
                                        Số điện thoại: 034747382. </div>
                    <hr>
                    <div id="nameweb" class="fixsite"><p>Twoteam-WebSellsShoes</p></div>
    </div>
</body>

</html>

<?php 
                        