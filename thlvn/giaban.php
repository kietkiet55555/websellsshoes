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
            width: 172px;
            height:215px;
            margin: 15px;
            text-decoration: none;
            color:black;
            float:left;
            background:#ffffff;
            border: 1px solid #6D88CB;
        }

        .areashowshoes{
        
            width: 100%;
            height:700px;
            /* background: #5555ff; */
            display : flex;
            flex-direction : row ;
            /* justify-content : space-around; */
            flex-flow : wrap;
            margin-bottom: 0;
            padding-bottom: 0;
            
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
            width:170px;
            height: 150px;
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
            height: 100%;
          
        }
        #show{
            background:#CEC8C8;
            width:70%;
            height: 700x;
            display : block;
        }
        #option p{
            width:100%;
            /* height: 60px; */
            margin-left:0px;
            margin-top:0px;
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
            height: 35px;
            color:black;
            
        }

        #option ul{
         list-style-type: none;
         margin-right:30px;
         
        }
        #option li{
         
            width:100%;
            height: 35px;
            text-align:center;
            margin-bottom:5px;
            align-items: center; 
            line-height: 2;
        }
        #option li:hover{
            background:#4788D4;
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
            height: 75px;
            width: 100%;
            /* background:red; */
        }
        #areashow{
            height: 625px;
            /* background:blue; */
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
            $sqlCom2 = "SELECT * FROM khohang WHERE  thuonghieu  like'$takecharfind%' ";

        else
            $sqlCom2 = "SELECT * FROM khohang WHERE  masp like'$takecharfind%'";
    
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
        $itemsPerPage = 8; 
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
                                     <a id="btncart" href="<?php if(isset($_SESSION['username'])) echo 'giohang.php'; else echo 'login.php' ?>"> 
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
                                <div class="aa" id="contenthelp" >  <a href="hotrogiay.php">Hỗ trợ mã giày</a>  </div>
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
            
                    <div id="option">
                            <p> Giá bán </p> 
                            <ul>
                                <a href="giaban.php?priceStart=100000&priceEnd=300000"> <li> 100.000đ-300.000đ </li></a>  
                                <a href="giaban.php?priceStart=300000&priceEnd=500000"> <li>   300.000đ-500.000đ</li></a> 
                                <a href="giaban.php?priceStart=500000&priceEnd=100000"><li>  500.000đ-1.000.000đ</li></a>   
                                <a href="giaban.php?priceStart=1000000&priceEnd=2000000"> <li> 1.000.000đ-2.000.000đ</li></a> 
                                <a href="giaban.php?priceStart=2000000&priceEnd=4444"> <li> >2.000.000đ</li></a>  
                            </ul>
                    </div>

                    <div id="show">
                        <div id="areashow">
                                <?php 
                                // -----------------------------------------------------------------------------------------------------
                                //  Lọc theo giá 
                                $currentPage = isset($_GET['page']) ? $_GET['page'] : 0;
                                    
                                $_SESSION['page'] =  $currentPage;
                                $itemsPerPage = 8;
                                $startIndex = ($currentPage - 1) * $itemsPerPage;
                                $endIndex = $startIndex + $itemsPerPage;
                                $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");


                                    $priceStart = isset($_GET['priceStart']) ? $_GET['priceStart'] : null;
                                    $priceEnd = isset($_GET['priceEnd']) ? $_GET['priceEnd'] : null;

                                    // Kiểm tra nếu có giá trị 'priceStart' và 'priceEnd'
                                    if ($priceStart !== null && $priceEnd !== null) {
                                    
                                        if($priceEnd == 4444)
                                            $sqlCom2 = "SELECT * FROM khohang WHERE giaban > '$priceStart'";
                                        else
                                        // Sử dụng trong truy vấn SQL
                                        $sqlCom2 = "SELECT * FROM khohang WHERE giaban BETWEEN '$priceStart' AND '$priceEnd'";
                                        // Thực hiện truy vấn và xử lý dữ liệu
                                        $kqkt = mysqli_query($conn, $sqlCom2);
                                        $row_count = mysqli_num_rows($kqkt);
                                        
                                        $_SESSION['rowcount'] = $row_count;
                                        $itemsPerPage = 8; 
                                        $_SESSION['totalPages'] =   ceil($row_count / $itemsPerPage);
                                        

                                        if($currentPage == 0) {
                                            $m=1;
                                            while ($row = mysqli_fetch_array($kqkt)) {
                                            $imgshoes  = $row['anhgiay'];
                                            $nameshoes = $row['tensp'];
                                            $priceshoes = $row['giaban'];
                                            $folder = $row['thuonghieu'];
                                            echo '<a href="themsanpham.php?tensp='.$nameshoes.'" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
                                            <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                                        
                                            if ($m % 4 == 0) {
                                                echo "<br>";
                                            }
                                            if($m == $itemsPerPage) break;
        
                                            $m++;
                                            }
                                        } else if($currentPage == 1){

                                            $m=1;
                                            while ($row = mysqli_fetch_array($kqkt)) {
                                            $imgshoes  = $row['anhgiay'];
                                            $nameshoes = $row['tensp'];
                                            $priceshoes = $row['giaban'];
                                            $folder = $row['thuonghieu'];
                                            echo '<a href="themsanpham.php?tensp='.$nameshoes.'" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
                                            <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                                        
                                            if ($m % 4 == 0) {
                                                echo "<br>";
                                            }
                                            if($m == $itemsPerPage) break;
                                            $m++;
                                            }
            
                                        } else if($currentPage != 1){
                                            $m=1;
                                           
                                            $kqkt = mysqli_query($conn, $sqlCom2);
                                            mysqli_data_seek($kqkt,  $startIndex);
                                            while ($row = mysqli_fetch_array($kqkt)) {
                        
                                                    $imgshoes  = $row['anhgiay'];
                                                    $nameshoes = $row['tensp'];
                                                    $priceshoes = $row['giaban'];
                                                    $folder = $row['thuonghieu'];
                                                    echo '<a href="themsanpham.php?tensp='.$nameshoes.'" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
                                                    <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                                                    if ($m % 4 == 0) {
                                                        echo "<br>";
                                                    }       
                                
                                                    if($m == $row_count) break;
                                                    $m++;
                                            }
                
                                        } 


                                    } else {
                                        unset($_SESSION['totalPages']);
                                        $m=1;
                                        $sqlCom2 = "SELECT * FROM khohang";
                                        $kqkt = mysqli_query($conn, $sqlCom2);
                                        $row_count = mysqli_num_rows($kqkt);
                                        $_SESSION['rowcount'] = $row_count;      
                                        // Tính toán số lượng trang
                                        $itemsPerPage = 8; 
                                        $_SESSION['totalPages'] =   ceil($row_count / $itemsPerPage);

                                        if($currentPage == 0) {
                                            $m=1;
                                            while ($row = mysqli_fetch_array($kqkt)) {
                                            $imgshoes  = $row['anhgiay'];
                                            $nameshoes = $row['tensp'];
                                            $priceshoes = $row['giaban'];
                                            $folder = $row['thuonghieu'];
                                            echo '<a href="themsanpham.php?tensp='.$nameshoes.'" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
                                            <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                                        
                                            if ($m % 4 == 0) {
                                                echo "<br>";
                                            }
                                            if($m == $itemsPerPage) break;
        
                                            $m++;
                                            }
                                        } else if($currentPage == 1){
                                            $m=1;
                                            while ($row = mysqli_fetch_array($kqkt)) {
                                            $imgshoes  = $row['anhgiay'];
                                            $nameshoes = $row['tensp'];
                                            $priceshoes = $row['giaban'];
                                            $folder = $row['thuonghieu'];
                                            echo '<a href="themsanpham.php?tensp='.$nameshoes.'" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
                                            <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                                        
                                            if ($m % 4 == 0) {
                                                echo "<br>";
                                            }
                                            if($m == $itemsPerPage) break;
            
                                            $m++;
                                            }
            
                                        } else if($currentPage != 1){
                                            $m=1;
                                            mysqli_data_seek($kqkt,  $startIndex);
                                            while ($row = mysqli_fetch_array($kqkt)) {
                        
                                                    $imgshoes  = $row['anhgiay'];
                                                    $nameshoes = $row['tensp'];
                                                    $priceshoes = $row['giaban'];
                                                    $folder = $row['thuonghieu'];
                                                    echo '<a href="themsanpham.php?tensp='.$nameshoes.'" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
                                                    <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                                                    if ($m % 4 == 0) {
                                                        echo "<br>";
                                                    }       
                                
                                                    if($m == $row_count) break;
                                                    $m++;
                                                }
                
                                        } 
                                    }
                                        

                        ?>


                            </div> 

                            <div id="numpage">
                                <div class="seprapage">
                                <?php
                                     
                                     $priceStart = isset($_GET['priceStart']) ? $_GET['priceStart'] : null;
                                    $priceEnd = isset($_GET['priceEnd']) ? $_GET['priceEnd'] : null;
                                    // Tạo liên kết phân trang
                                    if(isset($_SESSION['totalPages']))
                                    {
                                        if($_SESSION['totalPages']!=1)
                                        {
                                            
                                                // Số trang hiện tại, có thể được truyền từ URL hoặc bất kỳ nguồn nào khác
                                                $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                
                                                // Số lượng trang bạn muốn hiển thị
                                                $total_pages = $_SESSION['totalPages'];
                
                                                // Số trang sẽ hiển thị trước và sau trang hiện tại
                                                $range = 3;
                
                                                echo '<ul class="pagination">';
                
                                                // Hiển thị liên kết cho các trang
                                                for ($i = max(1, $current_page - $range); $i <= min($current_page + $range, $total_pages); $i++) {
                                                    echo '<li><a href="?priceStart = '.$priceStart.'& priceEnd = '.$priceEnd.' &page=' . $i . '"';
                                                    if ($i == $current_page) {
                                                        echo ' class="active"'; // Thêm lớp "active" cho trang hiện tại
                                                    }
                                                    echo '>' . $i . '</a></li>';
                                                }
                                                // Hiển thị liên kết "Trang trước" nếu có 3 trang trở lên
                                                if ($total_pages > 3 && $current_page > 1) {
                                                    echo '<li><a href="?priceStart = '.$priceStart.'& priceEnd = '.$priceEnd.' &page=' . ($current_page - 1) . '">Trước</a></li>';
                                                }
                
                                                // Hiển thị liên kết "Trang tiếp" nếu có 3 trang trở lên và trang hiện tại không phải là trang cuối cùng
                                                if ($total_pages > 3 && $current_page < $total_pages) {
                                                    echo '<li><a href="?priceStart = '.$priceStart.'& priceEnd = '.$priceEnd.' &page=' . ($current_page + 1) . '">Tiếp</a></li>';
                                                }
                                                echo '</ul>';
                
                                        }
                                    }
                                ?>  
                                </div>
                            </div>  
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