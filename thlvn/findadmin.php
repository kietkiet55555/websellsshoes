<?php session_start(); 
        //  unset($_SESSION['content']);
        if (isset($_GET["choose"])) $selected = $_GET["choose"];
        else $selected='thuonghieu';
        $_SESSION['bandOrCode'] =  $selected;
        unset($_SESSION['takecharfind']);

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
            display:block;
            width: 100%;
            height:100%;
            text-align:center;
            line-height: 2;
         
        }
        #tabfilter a{
            text-decoration: none;
            color:black;
             width: 100%;
            height:100%;
        }
        #tabfilter li:hover{
            background:#61E34B;
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
        
            width: 100%;
            height:620px;
            background:#ffffff;
            display : flex;
            flex-direction : row ;
            /* justify-content : space-around; */
            flex-flow : wrap;
          
           
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
        padding-top: 0;
        margin-top:0;
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
        #tenweb{
    
        }
        #numpage{
            height: 70px;
            width: 100%;
        }
        #frame{
            background:#ffffff;
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
    th, td,tr {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        }
        th{
            width:100px;
            height: 10px;
        }
        .areashowshoes table{
            border:2px black;
            border-collapse: collapse;
            overflow:auto;
        }
        #rowcode{
            width:150px;
        }
        #rowname{
            width:400px;
        }
        th {
        background-color: #f2f2f2;
        }
        .aaa{
            width:100px;
            height: 1px;
            text-align:center;
          
        }
        .areashowshoes img{
             width:100px;
            height: 100px;
        }
              
         #fd{
            display:flex;
            width:120px;
            height: 120px;
        }
        
        #fd a{
            text-decoration: none; 
            width:60px;
            height: 50px;
            background: #DFD9D9;
            margin:5px;
            color:black;
            display: flex;
            justify-content: center; /* Horizontally center */
            align-items: center; /* Vertically center */
            text-align: center; /* Center text */

            border-radius:2px;

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
                        $countnumrow =0;
                       while( $row = mysqli_fetch_array($kqkt))
                       {
                            $cmdtakenum = "SELECT * FROM khosoluong where tensp = '".$row['tensp']."'";
                            $query  = mysqli_query($conn, $cmdtakenum);
                            $row_count = mysqli_num_rows($kqkt);
                            $_SESSION['boolean'] = ($row) ? true : false;
                          
                       }
                    //    if( $kqkt )
                    //         echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasuccess";
                    //    else 
                    //    echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaafail";

                      
                     
                    //    echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa:".$_SESSION['boolean'];

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
                            <form action="findadmin.php" class="execfind" method="get">
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
                                                    placeholder=" <?php 
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
                          
                    </div>
                    <div class="help">

                        <div class="pagehelp">
                          
                        </div>

                        <div class="account">
                            <button id="login">
                            <div> <img src="./img/<?php if(isset($_SESSION['username'])) echo "account.png";
                                         ?>" width="25px"  height="25px" alt="account"></div>
                                    <div class="aa" id="nameaccount"> <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; 
                                          ?> </div>
                            </button>
                        </div>

                    </div>
                

            </div>
    </div>
    <div class="tab">
        <ul id="tabfilter">
        <li><a href="donhang.php">Xem đơn hàng</a></li>
            <li><a href="doanhsobanhang.php">Xem doanh số đã bán</a></li>
            <li><a href="xemtatcagiay.php">Xem tất cả giày(có thể xóa, sửa)</a> </li> 
            <li><a href="addshoes.php">Thêm giày</a></li>
        </ul>
    </div>

<div id="frame">
    <div class="areashowshoes">

      

         <?php 
         



        // -----------------------------------------------------------------------------------------------------
        //  Truy vấn lấy dữ liệu tìm kiếm

            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
            
            $_SESSION['page'] =  $currentPage;


            $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");

                                                  

            $itemsPerPage = 10; //10                              
         
          
                                   
                if(isset($_SESSION['rowcount'])) $row_count =  $_SESSION['rowcount'];

                // Xác định phạm vi dữ liệu cho trang hiện tại
                $startIndex = ($currentPage - 1) * $itemsPerPage;
                $endIndex = $startIndex + $itemsPerPage;
                if(isset($_SESSION['takecharfind']))
                {
                    
                //  echo "hiiiiiiiiiiiiiiiiiiiiiiiiiiiii".$_SESSION['takecharfind'];
                    //   echo "hiiiiiiiiiiiiiiiiiiiiiiiiiiiii".$currentPage;
                     if(isset($_SESSION['boolean']) && $_SESSION['boolean']){
                        $takecharfind = $_SESSION['takecharfind'];
                        if( $selected=="thuonghieu")
                        $sqlCom2 = "SELECT * FROM khohang WHERE SUBSTRING(thuonghieu , 1, 4)  like '$takecharfind'  ";
                        else
                        $sqlCom2 = "SELECT * FROM khohang WHERE  SUBSTRING(masp , 1, 4)   like'$takecharfind' ";
                        
                        $kqkt = mysqli_query($conn, $sqlCom2);
                   
                        echo " <table>";
                        echo " <tr>";
                        echo '<th class="aaa">Mã giày</th>';
                        echo "<th class='aaa' id='rowname'>Tên giày</th>";
                        echo '<th class="aaa">Số lượng</th>';
                        echo '<th class="aaa">Kích cỡ</th>';
                        echo '  <th class="aaa">Màu sắc</th>';
                        echo ' <th class="aaa">Thương hiệu</th>';
                        echo '  <th class="aaa">Giá bán</th>';
                        echo ' <th class="aaa">Ảnh giày</th>';
                        echo ' <th class="aaa">Nước sản xuất</th>';
                        echo ' <th class="aaa">Loại giày</th>';
                        echo '<th class="aaa">Thay đổi</th>';
                        echo ' </tr>';
                          if($currentPage == 1){
                                $m=1;
                             
                                while ($row = mysqli_fetch_array($kqkt)) {
            
                                    $masp =  $row['masp'];
                                    $imgshoes  = $row['anhgiay'];
                                    $nameshoes = $row['tensp'];
                                    $priceshoes = $row['giaban'];
                                    $thuonghieu = $row['thuonghieu'];
                                    $born = $row['nuocsx'];
                                    $type = $row['theloai'];
    
                                    $cmdtakenum = "SELECT * FROM   khosoluong where tensp = '".$row['tensp']."' ";
                                    $querytakenum =  mysqli_query($conn, $cmdtakenum);
                                    if($querytakenum)
                                    {
                                        while($result= mysqli_fetch_array($querytakenum))
                                        {
                                            $soluong = $result['soluong'];
                                            $size = $result['size'];
                                            $color = $result['color'];

                                            // echo '<pre>';
                                            // print_r($row);
                                            // echo '</pre>';
    
                                            echo '<tr>';
                                            echo "<td>".$masp." </td>";
                                            echo "<td> ". $nameshoes ." </td>";
                                            echo "<td> ".$result['soluong']."</td>";
                                            echo "<td> ".$result['size']." </td>";
                                            echo "<td> ".$result['color']."</td>";
                                            echo "<td> ".$thuonghieu."</td>";
                                            echo "<td>".$priceshoes." </td>";
                                            echo "<td> <img src='./img/".$thuonghieu."/".$imgshoes."' alt=''> </td>";
    
    
                                            echo "<td>". $born." </td>";
                                            echo "<td>".$type." </td>";
                                            echo "<td id='fd'> <a href='fixshoes.php
                                            ?tensp=".$nameshoes."&masp=".$masp."&thuonghieu=".$thuonghieu."& giaban=".$priceshoes."
                                            &anhgiay=".$imgshoes."&nuocsx=". $born."&theloai=".$type."
                                            &color=".$result['color']."&soluong=".$result['soluong']."&size=".$result['size']."'>
                                             Sửa </a> <a href='xemtatcagiay.php'>
                                             Xóa  </a> </td>";
                                            echo '</tr>';
    
                                        }
                                    }
    
                            
     
                                // if($m > 11) break;
    
                                $m++;
                            }

                        } else {
                           
                            $m=1;
                            mysqli_data_seek($kqkt,  $startIndex);
                            while ($row = mysqli_fetch_array($kqkt)) {
                             // echo '<pre>';
                                    // print_r($row);
                                    // echo '</pre>';
                                    $masp =  $row['masp'];
                                    $imgshoes  = $row['anhgiay'];
                                    $nameshoes = $row['tensp'];
                                    $priceshoes = $row['giaban'];
                                    $thuonghieu = $row['thuonghieu'];
                                    $born = $row['nuocsx'];
                                    $type = $row['theloai'];
    
                                    $cmdtakenum = "SELECT * FROM   khosoluong where tensp = '".$row['tensp']."' ";
                                    $querytakenum =  mysqli_query($conn, $cmdtakenum);
                                    if($querytakenum)
                                    {
                                        while($result= mysqli_fetch_array($querytakenum))
                                        {
                                            $soluong = $result['soluong'];
                                            $size = $result['size'];
                                            $color = $result['color'];

                                            // echo '<pre>';
                                            // print_r($row);
                                            // echo '</pre>';
    
                                            echo '<tr>';
                                            echo "<td>".$masp." </td>";
                                            echo "<td> ". $nameshoes ." </td>";
                                            echo "<td> ".$result['soluong']."</td>";
                                            echo "<td> ".$result['size']." </td>";
                                            echo "<td> ".$result['color']."</td>";
                                            echo "<td> ".$thuonghieu."</td>";
                                            echo "<td>".$priceshoes." </td>";
                                            echo "<td> <img src='./img/".$thuonghieu."/".$imgshoes."' alt=''> </td>";
    
    
                                            echo "<td>". $born." </td>";
                                            echo "<td>".$type." </td>";
                                            echo "<td id='fd'> <a href='fixshoes.php
                                            ?tensp=".$nameshoes."&masp=".$masp."&thuonghieu=".$thuonghieu."& giaban=".$priceshoes."
                                            &anhgiay=".$imgshoes."&nuocsx=". $born."&theloai=".$type."
                                            &color=".$result['color']."&soluong=".$result['soluong']."&size=".$result['size']."'>
                                             Sửa </a> <a href='xemtatcagiay.php'>
                                             Xóa  </a> </td>";
                                            echo '</tr>';
    
                                        }
                                    }
    
                            
     
                                // if($m > 11) break;
    
                                $m++;
                            
                            }

                        } 
                        echo " <table>";
                 } else echo "<p id='notfound'>Không có kết quả tìm kiếm</p>";
                       
               }  else {
                        $m=1;
                        $sqlCom2 = "SELECT * FROM khohang";
                        $kqkt = mysqli_query($conn, $sqlCom2);
                        $row_count = mysqli_num_rows($kqkt);
                        $_SESSION['rowcount'] = $row_count;
   
                        // Tính toán số lượng trang
                        $itemsPerPage = 10; //15
                        $_SESSION['totalPages'] =   ceil($row_count / $itemsPerPage);
                        echo " <table>";
                        echo " <tr>";
                        echo '<th class="aaa">Mã giày</th>';
                        echo "<th class='aaa' id='rowname'>Tên giày</th>";
                        echo '<th class="aaa">Số lượng</th>';
                        echo '<th class="aaa">Kích cỡ</th>';
                        echo '  <th class="aaa">Màu sắc</th>';
                        echo ' <th class="aaa">Thương hiệu</th>';
                        echo '  <th class="aaa">Giá bán</th>';
                        echo ' <th class="aaa">Ảnh giày</th>';
                        echo ' <th class="aaa">Nước sản xuất</th>';
                        echo ' <th class="aaa">Loại giày</th>';
                        echo '<th class="aaa">Thay đổi</th>';
                        echo ' </tr>';

                        if($currentPage == 1){
                         
                            $m=1;
                            while ($row = mysqli_fetch_array($kqkt)) {
                                
                               // echo '<pre>';
                                    // print_r($row);
                                    // echo '</pre>';
                                    $masp =  $row['masp'];
                                    $imgshoes  = $row['anhgiay'];
                                    $nameshoes = $row['tensp'];
                                    $priceshoes = $row['giaban'];
                                    $thuonghieu = $row['thuonghieu'];
                                    $born = $row['nuocsx'];
                                    $type = $row['theloai'];
    
                                    $cmdtakenum = "SELECT * FROM   khosoluong where tensp = '".$row['tensp']."' ";
                                    $querytakenum =  mysqli_query($conn, $cmdtakenum);
                                    
                               

                                    if($querytakenum)
                                    {
                                        while($result= mysqli_fetch_array($querytakenum))
                                        {
                                            $soluong = $result['soluong'];
                                            $size = $result['size'];
                                            $color = $result['color'];

    
                                            echo '<tr>';
                                            echo "<td>".$masp." </td>";
                                            echo "<td> ". $nameshoes ." </td>";
                                            echo "<td> ".$result['soluong']."</td>";
                                            echo "<td> ".$result['size']." </td>";
                                            echo "<td> ".$result['color']."</td>";
                                            echo "<td> ".$thuonghieu."</td>";
                                            echo "<td>".$priceshoes." </td>";
                                            echo "<td> <img src='./img/".$thuonghieu."/".$imgshoes."' alt=''> </td>";
    
    
                                            echo "<td>". $born." </td>";
                                            echo "<td>".$type." </td>";
                                            echo "<td id='fd'> <a href='fixshoes.php
                                            ?tensp=".$nameshoes."&masp=".$masp."&thuonghieu=".$thuonghieu."& giaban=".$priceshoes."
                                            &anhgiay=".$imgshoes."&nuocsx=". $born."&theloai=".$type."
                                            &color=".$result['color']."&soluong=".$result['soluong']."&size=".$result['size']."'>
                                             Sửa </a> <a href='xemtatcagiay.php'>
                                             Xóa  </a> </td>";
                                            echo '</tr>';
    
                                        }
                                    }
 
                                // if($m > 11) break;
    
                                $m++;
                        }

                        } else {
                        
                            $m=1;
                            mysqli_data_seek($kqkt,  $startIndex);
                            while ($row = mysqli_fetch_array($kqkt)) {
                             // echo '<pre>';
                                    // print_r($row);
                                    // echo '</pre>';
                                    $masp =  $row['masp'];
                                    $imgshoes  = $row['anhgiay'];
                                    $nameshoes = $row['tensp'];
                                    $priceshoes = $row['giaban'];
                                    $thuonghieu = $row['thuonghieu'];
                                    $born = $row['nuocsx'];
                                    $type = $row['theloai'];
    
                                    $cmdtakenum = "SELECT * FROM   khosoluong where tensp = '".$row['tensp']."' ";
                                    $querytakenum =  mysqli_query($conn, $cmdtakenum);
                                    if($querytakenum)
                                    {
                                        while($result= mysqli_fetch_array($querytakenum))
                                        {
                                            $soluong = $result['soluong'];
                                            $size = $result['size'];
                                            $color = $result['color'];

                                            // echo '<pre>';
                                            // print_r($row);
                                            // echo '</pre>';
    
                                            echo '<tr>';
                                            echo "<td>".$masp." </td>";
                                            echo "<td> ". $nameshoes ." </td>";
                                            echo "<td> ".$result['soluong']."</td>";
                                            echo "<td> ".$result['size']." </td>";
                                            echo "<td> ".$result['color']."</td>";
                                            echo "<td> ".$thuonghieu."</td>";
                                            echo "<td>".$priceshoes." </td>";
                                            echo "<td> <img src='./img/".$thuonghieu."/".$imgshoes."' alt=''> </td>";
    
    
                                            echo "<td>". $born." </td>";
                                            echo "<td>".$type." </td>";
                                            echo "<td id='fd'> <a href='fixshoes.php
                                            ?tensp=".$nameshoes."&masp=".$masp."&thuonghieu=".$thuonghieu."& giaban=".$priceshoes."
                                            &anhgiay=".$imgshoes."&nuocsx=". $born."&theloai=".$type."
                                            &color=".$result['color']."&soluong=".$result['soluong']."&size=".$result['size']."'>
                                             Sửa </a> <a href='xemtatcagiay.php'>
                                             Xóa  </a> </td>";
                                            echo '</tr>';
    
                                        }
                                    }
    
                            
     
                                // if($m > 11) break;
    
                                $m++;


                                }

                        } 
                        echo " <table>";

               }

            
                ?>


</div>         
    </div>
                
                <div id="numpage">
                    <div class="seprapage">
                    <?php
                    // Tạo liên kết phân trang
                    if(isset($_SESSION['totalPages']))
                    {
                        // if($_SESSION['totalPages']!=1)
                        // {
                            
                        //         // Số trang hiện tại, có thể được truyền từ URL hoặc bất kỳ nguồn nào khác
                        //         $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                        //         // Số lượng trang bạn muốn hiển thị
                        //         $total_pages = $_SESSION['totalPages'];

                        //         // Số trang sẽ hiển thị trước và sau trang hiện tại
                        //         $range = 3;

                        //         echo '<ul class="pagination">';

                        //         // Hiển thị liên kết cho các trang
                        //         for ($i = max(1, $current_page - $range); $i <= min($current_page + $range, $total_pages); $i++) {
                        //             echo '<li><a href="?page=' . $i . '"';
                        //             if ($i == $current_page) {
                        //                 echo ' class="active"'; // Thêm lớp "active" cho trang hiện tại
                        //             }
                        //             echo '>' . $i . '</a></li>';
                        //         }
                        //         // Hiển thị liên kết "Trang trước" nếu có 3 trang trở lên
                        //         if ($total_pages > 3 && $current_page > 1) {
                        //             echo '<li><a href="?page=' . ($current_page - 1) . '">Trước</a></li>';
                        //         }

                        //         // Hiển thị liên kết "Trang tiếp" nếu có 3 trang trở lên và trang hiện tại không phải là trang cuối cùng
                        //         if ($total_pages > 3 && $current_page < $total_pages) {
                        //             echo '<li><a href="?page=' . ($current_page + 1) . '">Tiếp</a></li>';
                        //         }
                        //         echo '</ul>';

                        // }
                    }
                    
                    ?>  
                    </div>
                </div>
 
    <!-- </div> -->
    <div class="footer">
        <div id="contact" class="fixsite"><p>Địa chỉ:  Số 30, đường An Dương Vương, phường  Nhơn Phú, tp Quy Nhơn.<br>
                                        Số điện thoại: 034747382. </div>
                    <hr>
                    <div id="tenweb" class="fixsite"><p>Twoteam-WebSellsShoes</p></div>
    </div>
</body>

</html>

                        