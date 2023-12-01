<?php session_start(); 
        //  unset($_SESSION['content']);
        if (isset($_GET["choose"])) $selected = $_GET["choose"];
        else $selected='thuonghieu';
        $_SESSION['bandOrCode'] =  $selected;

        $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");
                        
        // if(isset($_GET['thaotac']))
        // {
        //     $tensp = $_GET['tensp'];
        //     $color = $_GET['color'];
        //     $size = $_GET['size'];

        //     $sqlRemove = "DELETE FROM khosoluong WHERE tensp LIKE '$tensp' AND color = '$color' AND size = '$size'";
        //     $queryRemove = mysqli_query($conn, $sqlRemove);

        // }
        if(isset($_GET['thaotac']))
        {
            $cmd = "DELETE FROM khosoluong WHERE color='" . $_GET['color'] . "' AND soluong=" . $_GET['soluong'] . " AND size=" . $_GET['size'];
            $querynum = mysqli_query($conn, $cmd);
        }

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
        .fixsite{
            /* position: absolute; 
            top: 20px; 
            left: 600px;   */
        }
        #classify{
            /* background:red; */
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

        th, td,tr {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        }
        th{
            width:100px;
            height: 10px;
        }
        .areashowshoes table{
            border:2px black;
            border-collapse: collapse;
          /* background:blue; */
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
        }
        #fd a{
            text-decoration: none; 
            width:60px;
            height: 40px;
            background: #DFD9D9;
            margin:5px;
            color:black;
          
            text-align:center;

            border-radius:3px;

        }
    </style>
</head>
     
<body>
    <div id="head">
            <div class="homepage">
                            <a id="btnhome" href="findadmin.php">
                            <div class="imglogo"> <img src="./img/logo.jpg" width="90px"  height="102px"  alt="logo"  > </div> 
                            <div class="nameweb" > Web <br> sells <br> shoes </div>
                            </a>
                       
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
        <li>Sắp xếp theo</li>
        <li><a href="xemtatcagiay.php?option=increase">Tăng dần(số lượng)</a></li>
        <li><a href="xemtatcagiay.php?option=reduce">Giảm dần(số lượng)</a></li>

     </ul>
      </div>                          
    <div class="areashowshoes">
        
        <table>
             <?php 

                   

                        if(isset($_GET['option']) )
                        {
                                //============================


                                if( $_GET['option'] == 'reduce')
                                    $cmdnum = "SELECT * FROM khosoluong  ORDER BY soluong  DESC";
                                else {
                                    $cmdnum = "SELECT * FROM khosoluong  ORDER BY soluong  ASC";
                                }
                                $querynum = mysqli_query($conn, $cmdnum);


                                
                                // $num =  mysqli_num_rows($querynum);

                                // echo "hi".mysqli_num_rows($num);
                                if( mysqli_num_rows($querynum) == 0)
                                {
                                    echo "<p>Danh sách rỗng<p>";
                                } 
                                // else {
                                //     echo "Lỗi trong quá trình thực hiện truy vấn: " . mysqli_error($conn);
                                // }
                                
                                else{
                                    
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
                                    while($row = mysqli_fetch_array($querynum))
                                    {
                                        // $cmdnum = "SELECT * FROM khosoluong WHERE tensp = '" . $row['tensp'] . "' ORDER BY soluong  DESC";
                                        // $querynum = mysqli_query($conn, $cmdnum);

                                        $sqlCom2 = "SELECT * FROM khohang where tensp = '".$row['tensp']."'";
                                        $querytakebill = mysqli_query($conn, $sqlCom2);
                                    
                                        // if ( $querytakebill) {
                                          
                                        //     echo "ok";
                                        // } else {
                                        //     echo "Lỗi trong quá trình thực hiện truy vấn: " . mysqli_error($conn);
                                        // }

                                        if(  mysqli_num_rows($querytakebill) != 0)
                                        {
                                            if($result = mysqli_fetch_array($querytakebill))
                                            {
                                                echo '<tr>';
                                                echo "<td>".$result['masp']." </td>";
                                                echo "<td> ".$result['tensp']." </td>";
                                                echo "<td> ".$row['soluong']."</td>";
                                                echo "<td> ".$row['size']." </td>";
                                                echo "<td> ".$row['color']."</td>";
                                                echo "<td> ".$result['thuonghieu']."</td>";
                                                echo "<td>".$result['giaban']." </td>";
                                                echo "<td> <img src='./img/".$result['thuonghieu']."/".$result['anhgiay']."' alt=''> </td>";


                                                echo "<td>".$result['nuocsx']." </td>";
                                                echo "<td>".$result['theloai']." </td>";
                                                echo "<td id= 'fd'> <a  href='fixshoes.php
                                                ?tensp=".$result['tensp']."&masp=".$result['masp']."&thuonghieu=".$result['thuonghieu']."& giaban=".$result['giaban']."
                                                &anhgiay=".$result['anhgiay']."&nuocsx=".$result['nuocsx']."&theloai=".$result['theloai']."
                                                &color=".$row['color']."&soluong=".$row['soluong']."&size=".$row['size']."'>
                                                 Sửa </a> <a  href='xemtatcagiay.php?xoa&color=".$row['color']."&soluong=".$row['soluong']."&size=".$row['size']."'>
                                                 Xóa  </a> </td>";
                                                echo '</tr>';
                                            }

                                        } 
                                    }
                                }

                        } 
                         else {

                          
                            
                                $cmdnum = "SELECT * FROM khosoluong  ORDER BY soluong  ASC";
                                
                                $querynum = mysqli_query($conn, $cmdnum);


                                
                                // $num =  mysqli_num_rows($querynum);

                                // echo "hi".mysqli_num_rows($num);
                                if( mysqli_num_rows($querynum) == 0)
                                {
                                    echo "<p>Danh sách rỗng<p>";
                                } 
                                // else {
                                //     echo "Lỗi trong quá trình thực hiện truy vấn: " . mysqli_error($conn);
                                // }
                                
                                else{
                                    
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
                                    while($row = mysqli_fetch_array($querynum))
                                    {
                                        // $cmdnum = "SELECT * FROM khosoluong WHERE tensp = '" . $row['tensp'] . "' ORDER BY soluong  DESC";
                                        // $querynum = mysqli_query($conn, $cmdnum);

                                        $sqlCom2 = "SELECT * FROM khohang where tensp = '".$row['tensp']."'";
                                        $querytakebill = mysqli_query($conn, $sqlCom2);
                                    
                                        // if ( $querytakebill) {
                                          
                                        //     echo "ok";
                                        // } else {
                                        //     echo "Lỗi trong quá trình thực hiện truy vấn: " . mysqli_error($conn);
                                        // }

                                        if(  mysqli_num_rows($querytakebill) != 0)
                                        {
                                            if($result = mysqli_fetch_array($querytakebill))
                                            {
                                                echo '<tr>';
                                                echo "<td>".$result['masp']." </td>";
                                                echo "<td> ".$result['tensp']." </td>";
                                                echo "<td> ".$row['soluong']."</td>";
                                                echo "<td> ".$row['size']." </td>";
                                                echo "<td> ".$row['color']."</td>";
                                                echo "<td> ".$result['thuonghieu']."</td>";
                                                echo "<td>".$result['giaban']." </td>";
                                                echo "<td> <img src='./img/".$result['thuonghieu']."/".$result['anhgiay']."' alt=''> </td>";


                                                echo "<td>".$result['nuocsx']." </td>";
                                                echo "<td>".$result['theloai']." </td>";
                                                echo "<td id='fd'> <a  href='fixshoes.php
                                                ?tensp=".$result['tensp']."&masp=".$result['masp']."&thuonghieu=".$result['thuonghieu']."& giaban=".$result['giaban']."
                                                &anhgiay=".$result['anhgiay']."&nuocsx=".$result['nuocsx']."&theloai=".$result['theloai']."
                                                &color=".$row['color']."&soluong=".$row['soluong']."&size=".$row['size']."'>
                                                 Sửa </a> <a  href='xemtatcagiay.php?thaotac=xoa&color=".$row['color']."&soluong=".$row['soluong']."&size=".$row['size']."'>
                                                 Xóa  </a> </td>";
                                                echo '</tr>';
                                            }

                                        } 
                                    }
                                }




                         }


                        //     $sqlCom2 = "SELECT * FROM khohang";
                        //     $querytakebill = mysqli_query($conn, $sqlCom2);
                        //     $num =  mysqli_num_rows($querytakebill);
                        //     if( mysqli_num_rows($querytakebill) == 0)
                        //     {
                        //         echo "<p>Danh sách rỗng<p>";
                        //     }
                        //     else{
                                
                        //         echo " <table>";
                        //         echo " <tr>";
                        //         echo '<th class="aaa">Mã giày</th>';
                        //         echo "<th class='aaa' id='rowname'>Tên giày</th>";
                        //         echo '<th class="aaa">Số lượng</th>';
                        //         echo '<th class="aaa">Kích cỡ</th>';
                        //         echo '  <th class="aaa">Màu sắc</th>';
                        //         echo ' <th class="aaa">Thương hiệu</th>';
                        //         echo '  <th class="aaa">Giá bán</th>';
                        //         echo ' <th class="aaa">Ảnh giày</th>';
                        //         echo ' <th class="aaa">Nước sản xuất</th>';
                        //         echo ' <th class="aaa">Loại giày</th>';
                        //         echo '<th class="aaa">Thay đổi</th>';
                        //         echo ' </tr>';
                        //         while($row = mysqli_fetch_array($querytakebill))
                        //         {
                        //             $cmdnum = "SELECT * FROM khosoluong WHERE tensp = '" . $row['tensp'] . "' ORDER BY soluong  ASC";

                        //             $querynum = mysqli_query($conn, $cmdnum);
                                
                        //             if( $querynum ){
                        //                 if( mysqli_num_rows($querynum) != 0)
                        //                 {
                        //                     while($result = mysqli_fetch_array($querynum))
                        //                     {
                        //                         echo '<tr>';
                        //                         echo "<td>".$row['masp']." </td>";
                        //                         echo "<td> ".$row['tensp']." </td>";
                        //                         echo "<td> ".$result['soluong']."</td>";
                        //                         echo "<td> ".$result['size']." </td>";
                        //                         echo "<td> ".$result['color']."</td>";
                        //                         echo "<td> ".$row['thuonghieu']."</td>";
                        //                         echo "<td>".$row['giaban']." </td>";
                        //                         echo "<td> <img src='./img/".$row['thuonghieu']."/".$row['anhgiay']."' alt=''> </td>";

                        //                         echo "<td>".$row['nuocsx']." </td>";
                        //                         echo "<td>".$row['theloai']." </td>";
                        //                         echo "<td> <a href='fixshoes.php
                        //                         ?tensp=".$row['tensp']."&masp=".$row['masp']."&thuonghieu=".$row['thuonghieu']."& giaban=".$row['giaban']."
                        //                         &anhgiay=".$row['anhgiay']."&nuocsx=".$row['nuocsx']."&theloai=".$row['theloai']."
                        //                         &color=".$result['color']."&soluong=".$result['soluong']."&size=".$result['size']."'>
                        //                          Sửa </a> <a href='xemtatcagiay.php'>
                        //                          Xóa  </a> </td>";
                        //                         echo '</tr>';
                        //                     }
                        //                 } else {
                        //                     echo '<tr>';
                        //                         echo "<td>".$row['masp']." </td>";
                        //                         echo "<td> ".$row['tensp']." </td>";
                        //                         echo "<td> 0 </td>";
                        //                         echo "<td> 0 </td>";
                        //                         echo "<td> null </td>";
                        //                         echo "<td> ".$row['thuonghieu']."</td>";
                        //                         echo "<td>".$row['giaban']." </td>";
                        //                         echo "<td> <img src='./img/".$row['thuonghieu']."/".$row['anhgiay']."' alt=''> </td>";

                        //                         echo "<td>".$row['nuocsx']." </td>";
                        //                         echo "<td>".$row['theloai']." </td>";
                        //                         echo "<td> <a href='fixshoes.php?tensp=".urlencode(str_replace("%20", " ", $row['tensp']))."&masp=".urlencode(str_replace("%20", " ", $row['masp']))." &thuonghieu=".urlencode(str_replace("%20", " ", $row['thuonghieu']))."&giaban=".urlencode(str_replace("%20", " ", $row['giaban']))."&anhgiay=".urlencode(str_replace("%20", " ", $row['anhgiay']))."&nuocsx=".urlencode(str_replace("%20", " ", $row['nuocsx']))."&theloai=".urlencode(str_replace("%20", " ", $row['theloai']))."&color=null&soluong=0&size=0'>
                        //                             Sửa </a> <a href='xemtatcagiay.php'>
                        //                             Xóa  </a> </td>";

                        //                         echo '</tr>';

                                               
                        //                 }

                        //             }
                                   

                        //         }
                        //     }


                        // }


             ?>
        </table>

         <?php 
         

        //  $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");

        //  if(isset($_GET['nuocsx']))
        //  {

        //     $sqlCom2 = "SELECT * FROM khohang where '".$_GET['nuocsx']."' = nuocsx";
        //     $kqkt = mysqli_query($conn, $sqlCom2);
        //     if (!$kqkt) {
        //         die("Query failed: " . mysqli_error($conn));
        //     }
        //     $i=1;
        //     while ($row = mysqli_fetch_array($kqkt)) {
        //         $imgshoes  = $row['anhgiay'];
        //         $nameshoes = $row['tensp'];
        //         $priceshoes = $row['giaban'];
            
        //         echo '<a href="test.php" class="frameshoes"><img src="./img/adidas/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
        //         <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
            
        //         if ($i % 5 == 0) {
        //             echo "<br>";
        //         }
        //         $i++;
        //     }


        //  }
       


                        



        // -----------------------------------------------------------------------------------------------------
        //  Truy vấn lấy dữ liệu tìm kiếm

        
      
            
                ?>



    </div>
                
                
                <div class="seprapage">
                    <?php
                    // Tạo liên kết phân trang
                    // for ($page = 1; $page <=  $_SESSION['totalPages']; $page++) {
                            
                    //         echo '<a href="?page=' . $page . '">' . $page . '</a> ';

                    // }
                    echo '</div>';
                    ?>  
                </div>

    <div class="footer">
                <div id="contact" class="fixsite"><p>Địa chỉ:  Số 30, đường An Dương Vương, phường  Nhơn Phú, tp Quy Nhơn.<br>
Số điện thoại: 034747382.</div>
                <hr>
                <div id="nameweb" class="fixsite"><p>Twoteam-WebSellsShoes</p></div>
    </div>
</body>
</html>