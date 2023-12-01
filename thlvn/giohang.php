<?php session_start(); 
        //  unset($_SESSION['content']);
        if (isset($_GET["choose"])) $selected = $_GET["choose"];
        else $selected='thuonghieu';
        $_SESSION['bandOrCode'] =  $selected;
    //  echo $_SESSION['username'] = 'abc';



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

        #areashowshoes{
        
            width: 100%;
            height:70px;
            display : flex;
            flex-direction : row ;
            /* justify-content : space-around; */
            flex-flow : wrap;
        
            border-radius:10px;
            border: 2px solid black;
           
            /* position: absolute; 
            top: 180px; 
            left: 50px;  */
   
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
            background:#ffffff;
              
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
        position: absolute;   
        /* top: 120px;  */
        font-size:20px;
       /* left:425px; */
       font-weight: bold;
        /* height:40px; */
    }
    #areaSize {
            list-style: none; 
            display: flex;
    
            position: absolute;   
            top: 120px; 
            left:425px;
            margin: 0;
            padding: 0;
      
            width: 600px;
            height: 40px;
    }
    #btnSize {
        position: absolute;   
            top: 0px; 
            left:45px; 
            margin-top: 0px;  
    }
    #btnSize ul{
        display: flex;
    }
    #btnSize li {
          text-align:center;
            /* border: 2px black solid; */
            display:flex;
            line-height: 2;
            margin-right: 10px; 
            width: 50px;
            height: 40px;
    }
    #btnSize a{
            text-decoration: none;
            color:black;
             width: 100%;
            height:100%;
            background:yellow;
        }
        #areaMauSac{
            position: absolute;   
            top: 230px; 
            font-size:20px;
            left:425px;
            font-weight: bold;
    
             
            width: 600px;
            height: 40px;
        }

        #btnMauSac {
        position: absolute;   
            top: 0px; 
            left:45px; 
            margin-top: 0px;  
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
            width: 50px;
            height: 40px;
    }
    #btnMauSac a{
            text-decoration: none;
            color:black;
             width: 100%;
            height:100%;
            background:yellow;
        }
    #areaSoLuong {
        position: absolute;   
        top: 340px; 
        font-size:20px;
        left:425px;
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
        color: #ffffff;
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
        }
        #areashowshoes ul{
        display: flex;
    }
    #areashowshoes li {
          text-align:center;
            display:flex;
            line-height: 2;
            margin-left: 120px; 
            width: 70px;
            height: 40px;
           
    }
    #areashowshoes ul{
        /* background:blue; */
        position: absolute; 
            top: 110px; 
            right: 10px; 
    }
    #areashowshoes p{
            position: absolute; 
            top: 130px; 
            left: 30px; 
        }
        #thanhtoan{
            background:#F9F7F7;
            width: 100%;
            height: 70px;
            display:flex;
            text-align:center;
        }
        #product {
            /* width: 100%; */
            height:447px;
            /* padding: 20px;  */
            /* display:flex; */
            background-color: #f2f2f2; /* Màu nền */
            /* border: 2px solid #333;  */
            /* border-radius: 15px; */
            text-align: center; /* Căn giữa nội dung */
            margin: auto; /* Căn giữa theo chiều ngang */
            overflow:auto;

        }
        #sp{
            margin-top: 20px;
            background:#B9B1B1;
            height: 120px;
            width: 100%;
            display:block;
        }
        #sp ul{
            display:flex;
            overflow: auto;
        }
        #sp li{
            margin-right: 100px;
            list-style-type: none; 
        }
        #thanhtoan ul {
            display:flex;
            position: absolute; 
            top: 620px; 
            right: 30px; 
        }
        #thanhtoan li {
          text-align:center;
            display:flex;
            line-height: 2;
            margin-left: 120px; 
            width: 90px;
            height: 40px;
                
         }
         #thanhtoan li a{
            width: 110px;
            height: 40px;   
            background:red;  
            text-decoration: none;     
            color:#ffffff;
         }
         #sp img{
            width:120px;
            height: 120px;
         }
        #sp input{
            background:blue;
        }
        #sp a{
            /* display:flex; */
            text-decoration: none;
            width: 15px;
            height: 15px;
            background:blue;
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
        #mh {
            color:white;
            background:red;
            width: 120px;
            height: 30px;
            border: 1px solid red;

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


<div id="frame">
    <div id="areashowshoes">
           <p> Sản phẩm</p>    
           <ul>
            <li>Đơn giá</li>
            <li>Số lượng</li>
            <li>Số tiền</li>
            <li>Thao tác</li>
           </ul>   
    </div>

            


  
    <div id="product">

    <?php
            
                        if(isset($_SESSION['username']))
                        {
                            
                         
                            if(isset($_GET['tensp']) && isset($_GET['kichco']) && isset($_GET['mausac']) && isset($_GET['soluong']) )
                            {
    
                                echo "<script> 
                                alert('Thêm thành công');
                              
                                </script>";
                                $tensp = $_GET['tensp'];
                                $kichco = $_GET['kichco'];
                                $mausac = $_GET['mausac'];
                                $soluong = $_GET['soluong'];
                              
    
                                $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");
                              
                                $cmdCheck = "SELECT * FROM khosoluong WHERE tensp = '$tensp' and size = '$kichco' AND color like '$mausac'  ";
    
                                $queryCheck =  mysqli_query($conn,  $cmdCheck );
                                $kqkt = mysqli_query($conn, $cmdCheck);

                                // if ($kqkt !== false) {
                                //     echo "Query executed successfully";
                                //     // Additional code for handling the case when $kqkt is successful
                                //     // You might fetch results or perform other operations here
                                // } else {
                                //     echo "Error executing query: " . mysqli_error($conn);
                                //     // Additional code for handling the case when $kqkt is not successful
                                // }
                                
                               
                                if ($queryCheck) {
                                  
                                    
                                    if($row = mysqli_fetch_array($queryCheck))
                                    {
                                        if($row['soluong'] > 0)
                                        {
                                            
                                                $sqlCom2 = "INSERT INTO giohang (tensp, soluong, mausac, kichco, giaban, username )
                                                VALUES ('".$tensp."', '". $soluong."', '".$mausac."', '".$kichco."', '', '".$_SESSION['username']."');";
                                                $kqkt = mysqli_query($conn, $sqlCom2);
                                
                                        }
                                        else
                                        {
                                            echo "<script> 
                                            alert('Đã hết hàng');
                                            window.location='themsanpham.php?tensp=".$_GET['tensp']." ';
                                            </script>";
                                        }
        
                                    } else  {
                                        echo "<script> 
                                        alert('Kích thước hoặc màu sắc không hợp lệ');
                                        window.location='themsanpham.php?tensp=".$_GET['tensp']." ';
                                        </script>";
                                    }
    
    
                                } else {
                                
                                    echo "<script> 
                                    alert('Kích thước hoặc màu sắc không hợp lệ');
                                    window.location='themsanpham.php?tensp=".$_GET['tensp']." ';
                                    </script>";
                                }
    
                        
                            }
                            else {
                                // echo "<script> 
                                //         alert(' Vui lòng nhập đủ thông tin');
                                //         window.location='themsanpham.php?tensp=".$_GET['tensp']." ';
                                //       </script>";
                            }


                            echo '<form action="bangiay.php" method = "get">';
                            

                            $cmdcheckuser = "SELECT * FROM giohang where username = '".$_SESSION['username']."'";
                            $querytake =  mysqli_query($conn,  $cmdcheckuser );


                            if($querytake)
                            {
                        
                                while($row = mysqli_fetch_array($querytake))
                                {
                                    echo " <input type='text' hidden name='id[]' value='".$row['id']."'>";
                                    $cmdcheckuser = "SELECT * FROM khohang where tensp = '".$row['tensp']."'";
                                    $queryCheckUser = mysqli_query($conn, $cmdcheckuser);
                                   
                                    echo '<div id="sp">';
                                    echo '<ul>';
                                    if($row2 = mysqli_fetch_array($queryCheckUser))
                                    {
                                        echo " <li><input type='checkbox' name='option[]' value='".$row['id']."' id='ck'></li>";
                                        echo '<li> <img src="./img/'.$row2['thuonghieu'].'/'.$row2['anhgiay'].'" alt=""></li>';
                                    }

                                    // echo " <li><input type='text' hidden  name='arrnum[]' value='".$row['id']."'  ></li> ";
                                  

                                            echo '<li> <p> '.$row['tensp'].'</p></li>';

                                            echo '<li><p> Màu sắc: '.$row['mausac'] .' </p> <p> Kích cỡ: '.$row['kichco'].' </p></li>';
                                            echo ' <li> <p>'.$row2['giaban'].' </p> </li>';
                                            echo '<li> '.$row['soluong'].' </li>';
                                            echo ' <li> '.$row['soluong']*$row2['giaban'].' </li>';
                                            echo "<li id = 'fd'>  <a href='suagiay.php?".$row['tensp']."'>sửa</a> 
                                             <a  href='giohang.php?thaotac=xoa&id=".$row['id']."&tensp=".$row['tensp']."&color=".$row['mausac']."&soluong=".$row['soluong']."&size=".$row['kichco']."'>xóa</a></li>";
                                            echo '</ul>';
                                            echo '</div>';

                                }
                            
                                
                            
                            }
                         
                           
                            
                        }
                       
?>
            <!-- <div id="sp">

            </div> -->

    </div>
    <div id="thanhtoan">
            <ul>
               
                <input type="submit" id = "mh" name="sb" value="Mua hàng">
            </ul>
    </div>
                
    </form>         
 
    </div>
    <div class="footer">
        <div id="contact" class="fixsite"><p>Địa chỉ:  Số 30, đường An Dương Vương, phường  Nhơn Phú, tp Quy Nhơn.<br>
                                        Số điện thoại: 034747382. </div>
                    <hr>
                    <div id="nameweb" class="fixsite"><p>Twoteam-WebSellsShoes</p></div>
    </div>
</body>

</html>


                        