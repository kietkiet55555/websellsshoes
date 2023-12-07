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
            height: 40px;
            /* padding: 5px; */
            background: linear-gradient(to bottom, #48754D, #B4FEBB,#497F4F);
            align-items:center;
            margin: 0;
            padding: 0;
        }
        #tabfilter a{
            text-decoration: none;
        }
        #tabfilter li{
            /* margin-left:100px; */
           
            /* border: 2px black solid; */
            display:block;
            width: 100%;
            height:100%;
            text-align:center;
            line-height: 2;
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
        }

        .areashowshoes{
        
            width: 100%;
            height:700px;
            background: #ffffff;
            display : flex;
            flex-direction : row ;
            /* justify-content : space-around; */
            flex-flow : wrap;
            margin: 0;
            padding: 0;
            overflow:auto;
            
        }
        .areashowshoes p{
        
        text-align: center; /* Center-align text horizontally */
        position: absolute; 
        right: 650px;
        top: 400px; 
    }


        .seprapage{
      

            display: flex;
            font-size:20px;    
            width: 200px;
            height:50px;
            position: absolute; 
            right: 0px; 
          
        }
        .seprapage a{
            background:#E5DDDD;
             margin: 5px;
            width: 50px;
            height:50px; 
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
            background:red;
        
        }
        p{
            margin:5px;
        }
    
        #price{
            color:red;
            margin-top:7px;
        }
        #option{

            /* background: #40B6DC; */
            background: linear-gradient(to bottom, #40B6DC, #F5F5F5);
            display : block;
            width:30%;
            height: inherit;
            align-items: center; 
        }
        #show{
            background:yellow;
            width:70%;
            height: 700px;
            display : flex;
            /* text-align: center; 
            line-height: 30; */
        }
        #show p{
            position: absolute; 
            top: 400px; 
            left: 700px; 
        }
        #option p{
            font-size:30px;
            text-align:center;
            background: linear-gradient(to bottom, #A5C49A, #ABA796);

        }
        #option a{
            text-decoration: none;
            /* margin:20px; */
            /* background:red;  */
            /* line-height: 10px; */
            width:100%;
            height: 45px;
        }

        #option ul{
         list-style-type: none;
        
        }
        #option li{
            /* background:blue;  */
            width:100%;
            height: 55px;
            text-align:center;
            margin-bottom:5px;
            align-items: center; 
            line-height: 3;
        }
        #option li:hover{
            background:yellow;
            
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
        .fixsite{
            /* position: absolute; 
            top: 20px; 
            left: 600px;   */
        }
        #classify{
            background:#F5F5F5;
            /* width: 53%;
            height: 45px; */
        }
        #tabTime{
            width: 53%;
            height: 40px;
            list-style: none; 
            display: flex;
            background:#E8E481;
            margin:0;
            padding:0;
        }
        #tabTime a{
            text-decoration: none;
        }
        #tabTime li{
            text-align:center;
            line-height: 2;
            display:block;
            width: 100%;
            height:100%;
        }
        #tabTime li:hover{
            background:#AEB11D;
        }

        .areashowshoes {
            width: 100%;
            height:700px;
            background: #ffffff;
            /* display : flex; */
            flex-direction : row ;
            /* justify-content : space-around; */
            flex-flow : wrap;
            margin: 0;
            padding: 0;
            overflow:auto;
        }

        /* table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
            background:#ffffff;
        } */
        th, td,tr {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        }

        #rowname{
            width:400px;
        }
        th{
            width:110px;
            height: 10px;
        }

        .aaa {
            font-weight: bold;
            width:100px;
            height: 1px;
            text-align:center;
        }

        td:last-child {
            font-style: italic;
            
        }

        /* tr:nth-child(even) {
          
        } */
        .areashowshoes table{
            border:2px black;
            border-collapse: collapse;
        }
        .areashowshoes p{
               position: absolute; 
            top: 400px; 
            left: 570px;  
            
            
        }
        #treat{
            text-decoration: none; 
            color:black;
            width: 100px;
            height: 25px;
            background:#9F9B9B;
            color:#ffffff;
            margin-left:15px;
        }
    </style>
</head>
     
<body>
    <div id="head">
            <div class="homepage">
                        <button id="btnhome">
                            <a href="donhang.php">
                            <div class="imglogo"> <img src="./img/logo.jpg" width="90px"  height="102px"  alt="logo"  > </div> 
                            <div class="nameweb" > Web <br> sells <br> shoes </div>
                            </a>                  
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
                            <div class="cart"> 
                                    <button id="btncart"> 
                                             <img src="./img/shopping-cart.png" alt="cart" width="45px"  height="45px" >
                                    </button> 
                            </div>
                    </div>
                    <div class="help">

                        <div class="pagehelp">
                            <button id="ph">
                            
                               
                            </button>
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
      <div id="classify">
        <ul id="tabTime">
        
            <li><a href="donhang.php?option=treat">Đơn hàng chưa xử lí</a></li>
            <li><a href="donhang.php?option=treated">Đơn hàng đã xử lý</a></li>

        </ul>
      </div>                          
    <div class="areashowshoes">


           
             <?php 

            $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");

             if(isset($_GET['option']) && $_GET['option'] == 'treated')
             {
                       //============================
                       $sqlCom2 = "SELECT * FROM hoadonselled";
                       $querytakebill = mysqli_query($conn, $sqlCom2);
                       $num =  mysqli_num_rows($querytakebill);
                       if( mysqli_num_rows($querytakebill) == 0)
                       {
                           echo "<p>Danh sách rỗng<p>";
                       }
                       else{
                           
                           echo " <table>";
                           echo " <tr>";
                           echo "<th class='aaa' id='rowname'>Tên giày</th>";
                           echo '<th class="aaa">Số lượng</th>';
                           echo '<th class="aaa">Kích cỡ</th>';
                           echo '  <th class="aaa">Màu sắc</th>';
                           echo '  <th class="aaa">Đơn giá</th>';
                           echo ' <th class="aaa">Tên khách hàng</th>';
                           echo ' <th id="rowname" class="aaa">Địa chỉ</th>';
                           echo ' <th class="aaa">Số điện thoại</th>';
                           echo '<th class="aaa">Ngày bán</th>';
                           echo ' </tr>';
                           while($row = mysqli_fetch_array($querytakebill))
                           {
                               $cmdtakename = "SELECT * FROM taikhoan where username='".$row['username']."'";
                               $querytakeName = mysqli_query($conn, $cmdtakename);
                           
                               echo '<tr>';
                               echo "<td> ".$row['tengiay']." </td>";
                               echo "<td> ".$row['soluong']."</td>";
                               echo "<td> ".$row['kichco']." </td>";
                               echo "<td> ".$row['mausac']."</td>";
                               echo "<td>".$row['giaban']." </td>";
                               if($result = mysqli_fetch_array($querytakeName))
                               {
                                   echo "<td> ".$result['fullname']."</td>";

                               echo "<td id='rowname'> ".$result['site']." </td>";
                               echo "<td> ".$result['numberphone']." </td>";
                               }
                               $dmy = explode("-",$row['ngayban']);
                               $arrdmy = "";
                               for($i=2;$i>=0;$i--)
                                   {
                                    $arrdmy = $arrdmy.$dmy[$i];
                                    if($i>0) $arrdmy .= "-"; 
                                   }
                               echo "<td> ". $arrdmy." </td>";

                               echo '</tr>';
                           }
                       }

             } else {

                if(isset($_POST['sb']))
                {
                    if(isset($_POST['selected_shoe_id']))
                    {
                       
                    
                        $selectedShoeId = mysqli_real_escape_string($conn, $_POST['selected_shoe_id']);
                        $cmdtakeIn4 = "SELECT * FROM hoadonsell where madonmua = ". $selectedShoeId."";
                        $querytakeIn4 = mysqli_query($conn, $cmdtakeIn4);
                        if($row = mysqli_fetch_array($querytakeIn4))
                        {
                            $currentDateTime = date('Y-m-d');
                      
                            $cmdadd = "INSERT INTO hoadonselled (madonmua, magiay, tengiay, soluong, kichco, mausac, username, giaban, ngayban, tongtien) 
                            VALUES ('".$selectedShoeId."', '".$row['magiay']."', '".$row['tengiay']."',
                            '".$row['soluong']."', '".$row['kichco']."', '".$row['mausac']."', 
                            '".$row['username']."', '".$row['giaban']."', '".$currentDateTime."', '".$row['giaban']*$row['soluong']."')";

                            $queryadd = mysqli_query($conn, $cmdadd);
                            
                            $cmdupdate = "UPDATE khosoluong SET soluong -= ".$row['soluong']."  
                            WHERE tensp like ".$row['tengiay']." and color = ".$row['mausac']." and size = ".$row['kichco']." ";
                            $queryupdate = mysqli_query($conn, $cmdupdate);
    
                            $cmdremove = "DELETE FROM hoadonsell WHERE madonmua = ". $selectedShoeId." ";
                            $queryremove = mysqli_query($conn, $cmdremove);

                         
 

                        }

                    }
                   
                }
                $sqlCom2 = "SELECT * FROM hoadonsell";
                $querytakebill = mysqli_query($conn, $sqlCom2);
                $num =  mysqli_num_rows($querytakebill);
                if( mysqli_num_rows($querytakebill) == 0)
                {
                    echo "<p>Danh sách rỗng<p>";
                }
                else{
                    
                    echo " <table>";
                    echo " <tr>";
                    echo "<th class='aaa' id='rowname'>Tên giày</th>";
                    echo '<th class="aaa">Số lượng</th>';
                    echo '<th class="aaa">Kích cỡ</th>';
                    echo '  <th class="aaa">Màu sắc</th>';
                    echo '  <th class="aaa">Đơn giá</th>';
                    echo ' <th class="aaa">Tên khách hàng</th>';
                    echo ' <th id="rowname" class="aaa">Địa chỉ</th>';
                    echo ' <th class="aaa">Số điện thoại</th>';
                    echo '<th class="aaa">Kiểm tra</th>';
                    echo ' </tr>';
                    while($row = mysqli_fetch_array($querytakebill))
                    {
                        $cmdtakename = "SELECT * FROM taikhoan where username='".$row['username']."'";
                        $querytakeName = mysqli_query($conn, $cmdtakename);
                      
                        echo '<tr>';
                        echo "<td> ".$row['tengiay']." </td>";
                        echo "<td> ".$row['soluong']."</td>";
                        echo "<td> ".$row['kichco']." </td>";
                        echo "<td> ".$row['mausac']."</td>";
                        echo "<td>".$row['giaban']." </td>";
                        if($result = mysqli_fetch_array($querytakeName))
                        {
                            echo "<td> ".$result['fullname']."</td>";
    
                        echo "<td id='rowname'> ".$result['site']." </td>";
                        echo "<td> ".$result['numberphone']." </td>";
                        }
              
                        echo "<td> <form action='".$_SERVER['PHP_SELF']."' method='post'> 
                        <input type='hidden' name='selected_shoe_id' value='".$row['madonmua']."'>
                        <input type='submit' value='Chưa xử lý' name = 'sb' id='treat'> </form></td>";
                        echo '</tr>';
                    }
                }


             }

               echo " </table>";

               
             
    ?>
       

 

         <?php 
         

         $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");

         if(isset($_GET['nuocsx']))
         {

            $sqlCom2 = "SELECT * FROM khohang where '".$_GET['nuocsx']."' = nuocsx";
            $kqkt = mysqli_query($conn, $sqlCom2);
            if (!$kqkt) {
                die("Query failed: " . mysqli_error($conn));
            }
            $i=1;
            while ($row = mysqli_fetch_array($kqkt)) {
                $imgshoes  = $row['anhgiay'];
                $nameshoes = $row['tensp'];
                $priceshoes = $row['giaban'];
            
                echo '<a href="test.php" class="frameshoes"><img src="./img/adidas/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
                <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
            
                if ($i % 5 == 0) {
                    echo "<br>";
                }
                $i++;
            }


         }


        // -----------------------------------------------------------------------------------------------------
        //  Truy vấn lấy dữ liệu tìm kiếm

        //     $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
            
        //     $_SESSION['page'] =  $currentPage;

    

        //   $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");



        //   $itemsPerPage = 5; //15                              
        //   if($currentPage != 1)
        //   {
                                   
        //     if(isset($_SESSION['rowcount'])) $row_count =  $_SESSION['rowcount'];
        //     // Số lượng mục trên mỗi trang
     


        //     // Xác định phạm vi dữ liệu cho trang hiện tại
        //     $startIndex = ($currentPage - 1) * $itemsPerPage;
        //     $endIndex = $startIndex + $itemsPerPage;
        //         if(isset($_SESSION['takecharfind']))
        //         {

        //                 $takecharfind = $_SESSION['takecharfind'];
        //                 if( $selected=="thuonghieu")
        //                 $sqlCom2 = "SELECT * FROM khohang WHERE  thuonghieu  like'$takecharfind%' LIMIT $startIndex, $endIndex ";
        //                 else
        //                 $sqlCom2 = "SELECT * FROM khohang WHERE  masp like'$takecharfind%' LIMIT $startIndex, $endIndex";
                        
        //             $kqkt = mysqli_query($conn, $sqlCom2);

        //             if (!$kqkt) {
        //                 die("Query failed: " . mysqli_error($conn));
        //             }
        //             $i=1;
        //             while ($row = mysqli_fetch_array($kqkt)) {
        //                 $imgshoes  = $row['anhgiay'];
        //                 $nameshoes = $row['tensp'];
        //                 $priceshoes = $row['giaban'];
                    
        //                 echo '<a href="donhang.php" class="frameshoes"><img src="./img/adidas/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
        //                 <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                    
        //                 if ($i % 5 == 0) {
        //                     echo "<br>";
        //                 }
        //                 $i++;
        //             }
                    
        //                 // Đóng kết nối đến cơ sở dữ liệu
        //                 // mysqli_close($conn);
        //        } 

        //      } 
        //      else {

        //             if(isset($_SESSION['takecharfind']))
        //             {

        //                     $takecharfind = $_SESSION['takecharfind'];
        //                     if( $selected=="thuonghieu")
        //                     $sqlCom2 = "SELECT * FROM khohang WHERE  thuonghieu  like'$takecharfind%' LIMIT 1, $itemsPerPage ";
        //                     else
        //                     $sqlCom2 = "SELECT * FROM khohang WHERE  masp like'$takecharfind%' LIMIT 1, $itemsPerPage";
                            
        //                 $kqkt = mysqli_query($conn, $sqlCom2);

        //                 if (!$kqkt) {
        //                     die("Query failed: " . mysqli_error($conn));
        //                 }
        //                 $i=1;
        //                 while ($row = mysqli_fetch_array($kqkt)) {
        //                     $imgshoes  = $row['anhgiay'];
        //                     $nameshoes = $row['tensp'];
        //                     $priceshoes = $row['giaban'];
                        
        //                     echo '<a href="donhang.php" class="frameshoes"><img src="./img/adidas/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
        //                     <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                        
        //                     if ($i % 5 == 0) {
        //                         echo "<br>";
        //                     }
        //                     $i++;
        //                 }
                        
        //                     // Đóng kết nối đến cơ sở dữ liệu
        //                     // mysqli_close($conn);
        //         } 
        //      } 

        //             // thực hiện tìm kiếm
        //             if (isset($_GET["contentfind"])) {
                        
                         
        //                 $contentfind = $_GET["contentfind"];

        //                 if (isset($_GET["choose"])) $selected = $_GET["choose"];
                       
        //                 unset($_SESSION['bandOrCode']);  
        //                 unset($_SESSION['content']);
        //                 unset($_SESSION['page']); 
        //                 unset( $_SESSION['takecharfind']); 
        //                 unset($_SESSION['totalPages']);
        //                 $_SESSION['bandOrCode'] =  $selected;
        //                 $_SESSION['content'] =  $contentfind;
                    
        //                 $filtercontentfind = str_replace(' ', '',  $contentfind);
        //                 $takecharfind =  substr($filtercontentfind, 0, 4);
        //                 // $contentfind = $_GET["contentfind"];
              
                  
        //                 $_SESSION['takecharfind'] =  $takecharfind;
        //                 // Kết nối đến cơ sở dữ liệu
                     
        //                 // Kiểm tra kết nối
        //                 if (!$conn) {
        //                     die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
        //                 }
        //                 if( $selected=="thuonghieu")
        //                     $sqlCom2 = "SELECT * FROM khohang WHERE  thuonghieu  like'$takecharfind%' ";

        //                 else
        //                     $sqlCom2 = "SELECT * FROM khohang WHERE  masp like'$takecharfind%'";
                    
        //                 $kqkt = mysqli_query($conn, $sqlCom2);
        //                 // if (!$kqkt) {
        //                 //     die("Query failed: " . mysqli_error($conn));
        //                 // }
        //                 unset( $_SESSION['rowcount']);
        //                 $row_count = mysqli_num_rows($kqkt);
                    
        //                 $_SESSION['rowcount'] = $row_count;

                                        
        //                 // Tính toán số lượng trang
        //                 $itemsPerPage = 5; //15
        //                 $_SESSION['totalPages'] =   ceil($row_count / $itemsPerPage);
                          
        //                 $row = mysqli_fetch_array($kqkt);
        //                 if(!($row)) {
        //                     echo "Không có kết quả tìm kiếm";
        //                     $_SESSION['totalPages'] = 0;
        //                 }
        //                 // Kiểm tra và xử lý kết quả truy vấn
        //                 if($currentPage==1) {
        //                      $i=1;
        //                     while(($row = mysqli_fetch_array($kqkt))) 
        //                     {
                            
        //                             if($i==16) break;
        //                                 $imgshoes  = $row['anhgiay'];
        //                                 $nameshoes = $row['tensp'];
        //                                 $priceshoes = $row['giaban'];
        //                                 echo '<a href="test.php" class="frameshoes"><img src="./img/adidas/'.(isset($imgshoes)?$imgshoes:'').'" alt="anh giay">
        //                                 <p>'.(isset($nameshoes)?$nameshoes:'').' </p><p id="price"> '.(isset($priceshoes)?$priceshoes:'').' </p></a> ';
        //                                 if($i%5==0)  echo"<br>"; 
                                        
        //                                 $i++;
        //                             // } 
                                    
        //                     }
        //                         // Đóng kết nối đến cơ sở dữ liệu
        //                         // mysqli_close($conn);
        //              }


        //             }   
                    // else
                    // {
                    //     echo "Không có kết quả tìm kiếm";
                    // }
      
            
                ?>

    </div>
                
                
                <div class="seprapage">
                    <?php
                    // Tạo liên kết phân trang
                    // for ($page = 1; $page <=  $_SESSION['totalPages']; $page++) {
                            
                            // echo '<a href="?page=' . $page . '">' . $page . '</a> ';

                    // }
                    echo '</div>';
                    ?>  
                </div>

    <div class="footer">
                <div id="contact" class="fixsite"><p>Địa chỉ:  Số 30, đường An Dương Vương, phường  Nhơn Phú, tp Quy Nhơn.<br>
Số điện thoại: 034747382.</div>
                <hr>
                <div id="tenweb" class="fixsite"><p>Twoteam-WebSellsShoes</p></div>
    </div>
</body>
</html>