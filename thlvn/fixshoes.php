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
            width:200px;
            height: 50px;
            list-style: none; 
            display: flex;
            background:#E8E481;
           
            margin-left: 500px;
          
        }
        #tabTime a{
            text-decoration: none;
        }
        #tabTime li{
            text-align:center;
            line-height: 2;
            display:block;
            width: 170px;
            height:100%;
        }
        #tabTime li:hover{
            background:#AEB11D;
            text-align: 200px;
            width: 200px;
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
            background:red;
        }
        #option {
    width: 50%;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    background-color: #f9f9f9;
}

#duoi {
    display: flex;
    justify-content: center;
}

.form-list {
    list-style: none;
    padding: 0;
    text-align: left;

}

.form-list li {
    margin-bottom: 15px;
}

label {
    display: inline-block;
    width: 120px;
    font-size: 14px;
}

input[type="text"]
{
    padding: 6px;
    border: 1px solid #ddd;
    border-radius: 3px;
    box-sizing: border-box;
    width: 250px;
    font-size: 14px;
}

.all-button {
    padding: 8px 15px;
    font-size: 

}
#label_hinh_anh{
    width: 100px;
    height: 25px;
    background:#D0C7C7;
    text-align:center;
    align-items: center;

    display: inline-block;
    border: 2px solid black; /* Set the border to a solid black line */
    border-radius: 5px;
    line-height: 1.5;

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
        #duoi{
       
       margin:0;
       width: 90%;
       position: absolute; 
               /* top: 20px;  */
               left: 60px;  
               background:white;
   }

   #classify{
       background:#D3CECE;
       width: 100%;
       height: 627px;

   }
   #xn{
            
            width: 100px;
            height: 30px;
            background:#A6D0AA;
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
        <li>Sửa giày</li>
    </ul>
    <?php
       
     
       
        if(isset($_POST['add']))
        { 
            
            $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");

            if(isset($_POST['id'])) 
                           
             $ten_tep_tin = $_FILES['hinh_anh']['name'];

            if ($_FILES['hinh_anh']['error'] === UPLOAD_ERR_OK) {
                // Thư mục để lưu trữ tệp
                $uploadDir = 'img/'.$_POST['hieu_giay'];
            
    

                // Kiểm tra và tạo thư mục nếu nó chưa tồn tại
                if (!is_dir($uploadDir)) {
                    if (!mkdir($uploadDir, 0755, true)) {
                        die('Không thể tạo thư mục.');
                    }
                }
                
            
                // Tạo đường dẫn đầy đủ cho tệp đã tải lên
                $uploadFile = $uploadDir.'/'.basename($_FILES['hinh_anh']['name']);
                
            
                // Di chuyển tệp tải lên vào thư mục đích
                if (move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $uploadFile)) {
                    // Tệp đã được tải lên thành công. Bạn có thể thêm các xử lý bổ sung ở đây nếu cần.
                } else {
                    // echo 'Có lỗi xảy ra khi di chuyển tệp tải lên.';
                }
            } else {
                // echo 'Có lỗi xảy ra khi tải lên tệp.';
            }


         
           
                    if(isset($_POST['id']))
                    {
                        if($_POST['id']==0)
                        {
                            $cmdIn = "INSERT INTO khosoluong (tensp, color, size, soluong ) 
                            values ('".trim($_POST['ten_giay'])."','".trim($_POST['color'])."','".trim($_POST['size'])."','".trim($_POST['num'])."') ";
                            $queryIn = mysqli_query($conn, $cmdIn);
                            // if ($queryIn) {
                            //     echo "success";
                            // } else {
                            //     echo "fail: " . mysqli_error($conn);
                            // }
                        }else{
                            $cmdupdate = "UPDATE khosoluong SET color = '".trim($_POST['color'])."'
                            ,size = '".trim($_POST['size'])."'
                            ,soluong = '".trim($_POST['num'])."' where id = '".$_POST['id']."'";
                            $queryupdate = mysqli_query($conn, $cmdupdate);
                     
                                
                        }
                    }
                // $cmdupdatenum = "UPDATE khosoluong SET color='".$_POST['color']."', size='".$_POST['size']."', soluong='".$_POST['num']."' WHERE id=".$row['id'];
                // $queryupdate = mysqli_query($conn, $cmdupdatenum);
            
            //     if ($queryupdate) {
            //         echo "success";
            //     } else {
            //         echo "fail";
            //     }
            // }
          
            $cmdupdateshoes = "UPDATE khohang SET masp = '".$_POST['ma_giay']."', thuonghieu = '".$_POST['hieu_giay']."', anhgiay = '".$ten_tep_tin."'
            , giaban = '".$_POST['gia_ban']."', nuocsx = '".$_POST['nuoc_san_xuat']."', theloai = '".$_POST['the_loai']."' WHERE tensp like '".trim($_POST['ten_giay'])."'  ";

                $queryupdateshoes = mysqli_query($conn, $cmdupdateshoes);
          
                // if ($queryupdateshoes) {
                //     echo "success";
                // } else {
                //     echo "fail: " . mysqli_error($conn);
                // }
            // $cmdck  = " SELECT * FROM  khohang where tensp = '". trim($_POST['ten_giay'])."'";
            // $queryck= mysqli_query($conn, $cmdck);

   

         } 


         


    ?>

    <div id="duoi">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                    <ul class="form-list">
                        <li>
                            <label for="ma_giay">Mã Giày:</label>
                            <input type="text" id="ma_giay" name="ma_giay" value=" <?php if(isset($_GET['masp'])) echo  trim($_GET['masp']); ?> " required>

                        </li>

                
                        <li>
                            <label for="ten_giay">Tên Giày:</label>
                            <input type="text" id="ten_giay" name="ten_giay" value=" <?php if(isset($_GET['tensp'])) echo  trim($_GET['tensp']); ?>" required>

                        </li>

                        <li>
                            <label for="hieu_giay">Thương Hiệu:</label>
                            <input type="text" id="hieu_giay" value=" <?php if(isset($_GET['thuonghieu'])) echo  trim($_GET['thuonghieu']); ?>" name="hieu_giay" required>
                        </li>

                        <li>

                        <label for="hinh_anh">Tải lên:</label>
                        <input type="file" id="hinh_anh"  hidden name="hinh_anh" accept="image/*" >
                        <label for="hinh_anh" id="label_hinh_anh">Chọn ảnh</label>
                        <span id="file_name"><?php echo isset($_GET['anhgiay']) ? trim($_GET['anhgiay']) : ''; ?></span>

                        <script>
                        document.getElementById('hinh_anh').addEventListener('change', function () {
                            var input = this;
                            var fileNameSpan = document.getElementById('file_name');

                            if (input.files && input.files.length > 0) {
                                fileNameSpan.innerText = input.files[0].name; // Hiển thị tên tệp tin khi đã chọn
                            } else {
                                fileNameSpan.innerText = '<?php echo isset($_GET['anhgiay']) ? $_GET['anhgiay'] : ''; ?>'; // Hiển thị nội dung khác nếu không có tệp tin nào được chọn
                            }
                        });
                    </script>
                        </li>

                      

                        <li>
                            <label for="mau_sac">Màu sắc, số lượng, kích cỡ </label>
                            <div id="mau_sac_entries">
                            <div class="mau_sac_entry">
                                <input type="text" class="mau_sac" name="color" value=" <?php if(isset($_GET['color'])) echo  trim($_GET['color']); ?>"required>
                                <input type="text" class="so_luong" name="num" value=" <?php if(isset($_GET['soluong'])) echo  trim($_GET['soluong']); ?>"  required>
                                <input type="text" class="kich_co" name="size" value=" <?php if(isset($_GET['size'])) echo  trim($_GET['size']); ?>"  required>
                                <?php  
                                          $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");
                                            if(isset($_GET['color']) && isset($_GET['soluong']) && isset($_GET['size'])) {
                                            if (trim($_GET['color']) == "null" && trim($_GET['soluong']) == 0 && trim($_GET['size']) == 0 )
                                            {
                                                echo "<input type='text' name='id' hidden value='0' >";
                                                
                                            }
                                            else {
                                                $cmdtakenum = "SELECT * FROM khosoluong WHERE  tensp like '".trim($_GET['tensp'])."' 
                                                AND color = '".trim($_GET['color'])."' AND size = '".trim($_GET['size'])."' AND soluong = '".trim($_GET['soluong'])."'";
                                                
    
                                                $querytakenum = mysqli_query($conn, $cmdtakenum);
                                                if ($querytakenum) {
                                                    if ($row = mysqli_fetch_array($querytakenum)) {
                
                                                        echo "<input type='text' name='id' hidden value='".$row['id']."' >";
        
                                                    } 
                                                } 
                                               
                                       
                                            }
                                
                                        }

                                ?>
                                
                            </div>
                            </div>
                        </li>

                        <li>
                            <label for="gia_ban">Giá bán:</label>
                            <input type="text" id="gia_ban" value=" <?php if(isset($_GET['giaban'])) echo  trim($_GET['giaban']); ?>" name="gia_ban" required>
                        </li>
                        
                        <li>
                            <label for="the_loai">Thể loại</label>
                            <input type="text" id="the_loai" value=" <?php if(isset($_GET['theloai'])) echo  trim($_GET['theloai']); ?>" name="the_loai" required>
                        </li>

                        <li>
                            <label for="nuoc_san_xuat">Nước sản xuất:</label>
                            <input type="text" id="nuoc_san_xuat" value=" <?php if(isset($_GET['nuocsx'])) echo  trim($_GET['nuocsx']); ?>" name="nuoc_san_xuat" required>
                        </li>

                        <li class="button-li">
                            <input type="submit" id="xn" name="add" value="Xác nhận">
                        </li>
                    </ul>
        </form>
        

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