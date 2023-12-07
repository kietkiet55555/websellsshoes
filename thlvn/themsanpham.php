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
            /* margin-left:100px; */
            text-align:center;
            /* border: 2px black solid; */
            display:block;
            /* width: 100%;
            height:100%; */
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
        
            width: 94%;
            height:85%;
            display : flex;
            flex-direction : row ;
            /* justify-content : space-around; */
            flex-flow : wrap;
          background:#ffffff;
            border-radius:10px;
            position: absolute; 
            top: 170px; 
            left: 40px; 
           
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
        /* padding-top: 0;
        margin-top:0; */
        display: inline-block;
        width: 100%;
        }
        .footer hr{
        background:#979113;
        height: 1px;
        }
        #contact {
        height: 80px;

        }
        #contact p{
        text-align: center;
        line-height: 7vh;
        color:black;
        }
        #tenweb{
        height: 30px;
        line-height: 1vh;
        color:#D47373;
        text-align: center;
        }
    
        #numpage{
            height: 70px;
            width: 100%;
        }
        #frame{
            background:#CEC8C8;
      
            width: 100%;
            height:620px;
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
    #picshoes img{
        width:400px;
        height:400px;
        margin-top:50px;
        margin-left:20px;
    }
    #picandprice{
        display:block;
    }
    #picandprice p{
        color:red;
        font-size:30px;
        text-align:center;
    }
    #luachon {
        display:block;
    }
    #luachon p{
        position: absolute;   
        top: 33px; 
        font-size:30px;
    }
    #size {
       /* position: absolute;   
     
        font-size:20px; */
/*       
       font-weight: bold;  */
       text-align: center;
            align-items: center; 
            /* justify-content: center;  */
      
    }

    #btnSize {
        
        position: absolute;   
            top: 120px; 
            left:425px;
            display: flex;
           text-align:left;
           border:1px solid white;
           display:flex;
           /* margin: 0;
            padding: 0; */
            width: 500px;
            height: 40px;
            /* background:red; */
    }

    #btnSize ul{
        display: flex;
        /* list-style-type: none;
            padding: 0; */
     
    }
    #btnSize li {
           text-align:center;
           
            display:flex;
            line-height: 2;
            margin-right: 10px; 
            width: 80px;
            height:40px;
           
            
    }
    #btnSize a{
            text-decoration: none;
            color:black;
            width: 80px;
            height:40px;
            background:#ECE8E8;
            text-align: center;
            align-items: center; 
            display:flex;
            justify-content: center; 
            font-weight: bold;
        }
        #btnSize a:hover{
            background:#D2CCCC;
        }
        #areaMauSac{
            position: absolute;   
            top: 210px; 
            font-size:20px;
            left:425px;
            font-weight: bold;
    
             
            width: 600px;
            height: 40px;
        }
        #MauSac{
            width: 200px;
            height: 40px;
           
            /* position: absolute;   
            top: 0px; 
            left:5px;  */
        }

        #btnMauSac {
        /* position: absolute;   
            top: 0px; 
            left:45px; 
            margin-top: 0px;   */
            
    }
    #btnMauSac ul{
        display: flex;
    }
    #btnMauSac li {
          text-align:center;
            /* border: 2px black solid; */
            display:flex;
            line-height: 2;
            margin-right: 10px; 
            width: 80px;
            height:40px;
    }
    #btnMauSac a{
        text-decoration: none;
            color:black;
            width: 80px;
            height:40px;
            background:#ECE8E8;
            text-align: center;
            align-items: center; 
            display:flex;
            justify-content: center; 
        }
        #btnMauSac a:hover{
            background:#D2CCCC;
        }
    #areaSoLuong {
        position: absolute;   
        top: 300px; 
        font-size:20px;
        left:455px;
        font-weight: bold;
    }
    #btnChange{
        display:flex;
        position: absolute;   
        top: 420px; 
        font-size:20px;
        left:425px;
        font-weight: bold;
        list-style: none; 
      
        width: 600px;
        height: 40px;
       
    }
    #addInCart, #buy {
    display: inline-block;
    margin: 10px;
    }

    #addInCart a, #buy a {
        text-decoration: none;
        padding: 10px 20px;
        background-color: #8DD790;
        color: black;
        border-radius: 5px;
        font-weight: bold;
    }

    #addInCart a:hover, #buy a:hover {
        background-color: #2980b9;
    }
    
    th, td {
            border: 1px solid #dddddd; /* Add borders to cells */
            text-align: left;
            padding: 8px;
            width: 60px;
            height:35px;
            font-size:30px;
            text-align:center;
    
        }
       a{
          
            text-decoration: none;
        }
        #them {
            width:20px;
            height: 20px;
        }
        /* CSS cho mục được chọn */
        .active {
            background-color: #ff0000; /* Màu nền để đánh dấu */
            color: #fff; /* Màu chữ trắng */
            border: 2px solid #ff0000; /* Viền để đánh dấu */
        }

        /* CSS cho kích cỡ */
        #areaSize li a.active {
            background-color: #ff0000; /* Màu nền để đánh dấu */
            color: #fff; /* Màu chữ trắng */
        }

        /* CSS cho màu sắc */
        #areaMauSac li a.active {
            background-color: #ff0000; /* Màu nền để đánh dấu */
            color: #fff; /* Màu chữ trắng */
        }
        #soluong{
            font-size:20px;
           width: 120px;
           text-align:left;
           border:1px solid white;
          
        }
        #ibsoluong a{
            color:black;

        }
        #size {
            width: 120px;
            height: 40px;
            font-weight: bold;
        }
        #thanh{

        width: 0.8px;
        border: none;
        height: 40px;
        background-color: #333;
        margin:  0;
        box-sizing: content-box; /* Reset box sizing if needed */

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
                            <a href="find.php">
                            <div class="imglogo"> <img src="./img/logo.jpg" width="90px"  height="102px"  alt="logo"  > </div> 
                            <div class="nameweb" > Web <br> sells <br> shoes </div>
                            </a>
                            
                        </button>
                       
            </div>
            <div class="areafind-login">
                
                    <div class="operation">
                            <form action="find.php" class="execfind" method="get">
                                        <div class="combb"  >   
                                         
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
                                    <a id="btncart" href="giohang.php"> 
                                             <img src="./img/shopping-cart.png" alt="cart" width="45px"  height="45px" >
                                    </a> 
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
                            <div> <img src="./img/<?php if(isset($_SESSION['username'])) echo "account.png";
                                        else echo "enter.png"; ?>" width="25px"  height="25px" alt="account"></div>
                                    <div class="aa" id="nameaccount"> <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; 
                                        else echo "<a href = 'login.php'>Đăng nhập </a>";  ?> </div>
                            </button>
                        </div>

                    </div>
                

            </div>
    </div>
    <div class="tab">
        <ul id="tabfilter">
            <li id="locgiay">Lọc giày</li>
            <li><hr id="thanh"></li>
            <a href="giaban.php"><li>Giá bán</li></a>
            <a href="nuocsx.php"><li>Nước sản xuất</li></a>
            <a href="theloai.php"><li>Thể loại</li></a> 
            <a href="thuonghieu.php"><li>Thương hiệu</li></a>
        </ul>
    </div>

<div id="frame">
    <div class="areashowshoes">
     
         <?php 
         
        // -----------------------------------------------------------------------------------------------------
        //  show sp
        if(isset($_GET['tensp']))
        {
            $tengiay =  $_GET['tensp'];
            $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");
            $sqlCom2 = "SELECT * FROM khohang where  tensp = '$tengiay'";
            $kqkt = mysqli_query($conn, $sqlCom2);
            $sqlCom1 =  "SELECT * FROM khosoluong where  tensp = '$tengiay'";
            // $kqkt2 = mysqli_query($conn, $sqlCom1);
                          if($row = mysqli_fetch_array($kqkt)) 
                          {
                            $anhgiay = $row['anhgiay'];
                            $thuonghieu = $row['thuonghieu'];
                            $giaban = $row['giaban'];
                            echo "<div id='picandprice'>";
                            echo '<div id="picshoes"><img src="./img/' . $thuonghieu . '/' . $anhgiay . '" alt="" ></div>';
                            echo "<p>".$giaban."đ</p>";
    
                            echo "</div>";
                            echo "<div id='luachon'> ";
                         

                                echo "<div><p> $tengiay </p></div>";
                           
                               
                                echo "<div id='btnSize'>";
                                echo "<ul>";
                                $kqkt2 = mysqli_query($conn, $sqlCom1);
                                echo "<li id='size'> Kích cỡ</li>";  

                                // echo $soluong;
                                $dc = "?tensp=".$_GET['tensp']."";


                                                            
                                $selectedSize = ""; // Khởi tạo kích cỡ được chọn
                                $selectedColor = ""; // Khởi tạo màu sắc được chọn

                      
  
                                $soluong = isset($_GET['soluong']) ? $_GET['soluong'] : 1;

                                    if(isset($_GET['soluong']))
                                    {
                                        
                                        $soluong = $_GET['soluong'];
                                 
                                            if(isset($_GET['varsl'])){
                                                
                                                if($_GET['varsl'] =='tang')
                                                {
                                                    $arrdc  = explode("&", $dc);
                                                     $cmd =  "SELECT * FROM khosoluong where  tensp = '$tengiay'";
                                                    //  foreach ($arrdc as $value) {
                                                    //     $valu  = explode("=", $value);
                                                        // $strcolor = trim($_GET['mausac']);
                                                        // strstr("mausac", $valu[0]);
                                                        // $strsize = trim($_GET['kichco']);
                                                        // strpos("kichco", $valu[0]);
                                                        // if ($strcolor !== false) 
                                                        if (isset($_GET['mausac']))       
                                                            $cmd = $cmd." and color = '".$_GET['mausac']."'";
                                                        if (isset($_GET['kichco'])) 
                                                            $cmd = $cmd." and size = '".$_GET['kichco']."'";
                         
                                                    // }
                                           
                                                    $query = mysqli_query($conn, $cmd);
                                                  
                                                      
                                                    if ($row = mysqli_fetch_array($query)) {
                                                    
                                                        if($row['soluong'] > $soluong)
                                                            $soluong++;
                                                        else
                                                        {
                                                            echo "<script> 
                                                            alert('Đã vượt quá số lượng có trong kho');
                                                            </script>";
                                                        }
                                                    } 

                                                }
                                                    
                                                else {
                                                    if($soluong > 1) $soluong--;
                                                }   
      
                                            }                              
                                
                                    } else  $soluong = 1;

                                   
                                    // if(isset($_GET['soluong'])) 
                                    $dc = $dc."&soluong=".$soluong." ";
                                    
                                    if(isset($_GET['mausac']))
                                    {
                                        $dc = $dc."&mausac=".$_GET['mausac']."";
                                     
                                    }
                                        
                                    if(isset($_GET['kichco']))
                                        $dc = $dc."&kichco=".$_GET['kichco']."";


                                
                                while($row2 = mysqli_fetch_array($kqkt2) )
                                {
    
                                    $kichco = $row2['size'];  
                                    // $class = ($kichco == $selectedSize) ? 'class="active"' : ''; // Kiểm tra xem nó có phải là kích cỡ được chọn không
                                    // echo "<li $class> <a href='" . $dc . "&kichco=" . $kichco . "'> $kichco </a> </li>";
                                    echo "<li> <a href='".$dc."&kichco=".$kichco."'> $kichco </a> </li>";
                         
                                    
                                }
                            
                                echo "</ul>";
                              
                                echo "</div>";
    
                                echo "<div id='areaMauSac'>";
                                // echo "<div id='MauSac'> Màu sắc</div>"; 
                                echo "<div id='btnMauSac'>";
                                echo "<ul>";
                                echo "<li id='MauSac'> Màu sắc </li>";
                                $kqkt2 = mysqli_query($conn, $sqlCom1);
                                while($row2 = mysqli_fetch_array($kqkt2) )
                                {
    
                                    
                                    $mausac = $row2['color'];
                                 
                                    echo "<li> <a href='".$dc."&mausac=".$mausac."'> $mausac </a> </li>";
                         
                                   
                                }
                                echo "</ul>";
                                echo "</div>";
                                echo "</div>";
    
                                echo "<div id='areaSoLuong'>";
                             
                         
 
                            
                                echo "<div id='tbsoLuong'>   <table> <tr> <th id='soluong'> Số lượng </th> <th><a href='".$dc."&soluong=".$soluong."&varsl=giam'> - </a></th>  <th> <a href=''> 
                                $soluong</a> </th>  <th> <a href='".$dc."&soluong=".$soluong."&varsl=tang'> + </a> </th> </tr> </table> </div>";
                                
                                echo "</div>";
    
                                echo "<div id='btnChange'>";
                                
                                if(isset( $_SESSION['username'])) $link = 'giohang.php'.$dc; else $link = 'login.php';
                                echo "<div id='addInCart'> <a href='$link'> <img src='./img/cart.png' id='them' alt=''> Thêm giày vào giỏ hàng </a> </div>";
    
                                if(isset( $_SESSION['username'])) $link2 = 'bangiay.php'.$dc; else $link2 = 'login.php';
                                echo "<div id='buy'> <a href='$link2'> Mua hàng </a> </div>";
                                echo "</div>";
    
                            
                            echo "</div>";
                           
                          }
                          else echo "not exist";

        }




      
            
                ?>


    </div>
                
                <div id="numpage">
                    <div class="seprapage">
                    <?php
 
                    ?>  
                    </div>
                </div>
 
    </div>
    <div class="footer">
        <div id="contact" class="fixsite"><p>Địa chỉ:  Số 30, đường An Dương Vương, phường  Nhơn Phú, tp Quy Nhơn.<br>
                                        Số điện thoại: 034747382. </div>
                    <hr>
                    <div id="tenweb" class="fixsite"><p>Twoteam-WebSellsShoes</p></div>
    </div>
</body>

</html>


                        