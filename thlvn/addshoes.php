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
    height: 680px;
  

}

.form-list li {
    margin-bottom: 30px;
    width: 600px;
    height: 40px;
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
    width: 120px;
            height: 40px;
    background:#D0C7C7;
    text-align:center;
    align-items: center;

    display: inline-block;
    border: 2px solid black; /* Set the border to a solid black line */
    border-radius: 5px;
    line-height: 3;

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
        height: 777px;

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
        #xn{
            background:#A6D0AA;
            width: 100px;
            height: 30px;
            /* position: absolute;  
                left: 60px;  */
        }
        #ten_giay {
            width: 400px;
            height: 40px;
        }
        #ma_giay  {
            width: 400px;
            height: 40px;
        }
        #hieu_giay {
            width: 400px;
            height: 40px;
        }
        #color{
            width: 150px;
            height: 40px;
        }
        #num{
            width: 150px;
            height: 40px;
        }
        #size{
            width: 150px;
            height: 40px;
        }
        #gia_ban{
            width: 400px;
            height: 40px;
        }
        #the_loai{
            width: 400px;
            height: 40px;
        }
        #nuoc_san_xuat{
            width: 400px;
            height: 40px;
        }
         #lbinput{
            width: 1000px;
            height: 40px;
        }
        #btnadd{
            width: 250px;
            height: 40px;
            background: #D0C7C7;
            border-radius: 3px;
        }
        /* #duoi form{
            overflow:auto;
        }  */
        #button{
            width: 300px;
            height: 40px;
            padding: 10px 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #D0C7C7;

            cursor: pointer;
        }
        .mau_sac_entry {
            display:flex;
            width: 700px;
        }
        .mau_sac_entry input{
           
            margin-left:15px;
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
    <!-- <div id="wrap"> -->
    <div id="classify">
    <ul id="tabTime">
        <li><a href="donhang.php?option=increase">Thêm giày</a></li>
    </ul>
    <?php

        if(isset($_POST['add']))
        {
            $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes");
            $ten_giay = mysqli_real_escape_string($conn, $_POST['ten_giay']);
            $sqlCom2 = "SELECT * FROM khohang WHERE tensp LIKE '$ten_giay'";

            $querytakename = mysqli_query($conn, $sqlCom2);

       
            // if($querytakename){
               
                if($row = mysqli_fetch_array($querytakename))
                {
                    echo "<script> 
                    alert('Tên giày này đã tồn tại');
                    window.location='addshoes.php';
                    </script>";
                } else {


            //     }
            // }   
            // else {
            //     // Handle the query error here
            //     echo "Query error: " . mysqli_error($conn);
                
            

            

                $so_luong_array = $_POST["so_luong"];
                $kich_co_array = $_POST["kich_co"];
                $mau_sac_array = $_POST["mau_sac"];

                for ($i = 0; $i < count($so_luong_array); $i++) {

                    if( intval($kich_co_array[$i] ) == 0)  echo "<script> 
                    alert('Không hợp lệ');
                    window.location='addshoes.php';
                    </script>";
                   
                    if((intval($so_luong_array[$i])) == 0) 
                    echo "<script> 
                    alert('Không hợp lệ');
                    window.location='addshoes.php';
                    </script>";
             

                    
                }
                if((intval($_POST['gia_ban'])) == 0)
                echo "<script> 
                alert('Không hợp lệ');
                window.location='addshoes.php';
                </script>";
 
    
                           
            $ten_tep_tin = "";

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
                $ten_tep_tin = $_FILES['hinh_anh']['name'];
            
                // Di chuyển tệp tải lên vào thư mục đích
                if (move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $uploadFile)) {
                    // Tệp đã được tải lên thành công. Bạn có thể thêm các xử lý bổ sung ở đây nếu cần.
                } else {
                    echo 'Có lỗi xảy ra khi di chuyển tệp tải lên.';
                }
            } else {
                echo 'Có lỗi xảy ra khi tải lên tệp.';
            }

            for ($i = 0; $i < count($so_luong_array); $i++) {
                // $so_luong = $so_luong_array[$i];
                // $kich_co = $kich_co_array[$i];
                // $mau_sac = $mau_sac_array[$i];
                
                $cmdaddnum = "INSERT INTO khosoluong(tensp, color, size, soluong) VALUES 
                ('" . $_POST['ten_giay'] . "', '" . $mau_sac_array[$i] . "', '" . $kich_co_array[$i] . "', '" . $so_luong_array[$i] . "')";

                $queryaddnum = mysqli_query($conn, $cmdaddnum);
                if( $queryaddnum ) echo "success";
                else echo "fail";

            }

            $cmdaddshoes = "INSERT INTO khohang(`masp`, `tensp`, `thuonghieu`, `anhgiay`, `giaban`, `nuocsx`, `theloai`)
                            values ('".$_POST['ma_giay']."','".$_POST['ten_giay']."',
                            '".$_POST['hieu_giay']."','".$ten_tep_tin."', '".$_POST['gia_ban']."', '".$_POST['the_loai']."', '".$_POST['nuoc_san_xuat']."')";
            $queryaddshoes = mysqli_query($conn, $cmdaddshoes);



         }

        }



    ?>
    <div id="duoi">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                    <ul class="form-list">
                        <li>
                            <label for="ma_giay">Mã Giày</label>
                            <input  type="text" id="ma_giay"  name="ma_giay" placeholder="Nhập mã giày" required>

                        </li>

                
                        <li>
                            <label for="ten_giay">Tên Giày</label>
                            <input  type="text" id="ten_giay" name="ten_giay" placeholder="Tên giày nhập (không quá 50 kí tự)" required>

                        </li>

                        <li>
                            <label for="hieu_giay">Thương Hiệu</label>
                            <input type="text" id="hieu_giay" name="hieu_giay" required>
                        </li>

                        <li>
                        <label for="hinh_anh">Tải lên</label>
                        <input type="file" id="hinh_anh" title="chọn ảnh" hidden name="hinh_anh" accept="image/*" required>
                        <label for="hinh_anh" id="label_hinh_anh">Chọn ảnh</label>
                        <span id="file_name"><?php echo isset($_GET['anhgiay']) ? $_GET['anhgiay'] : ''; ?></span>

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
                            
                            <div id="mau_sac_entries">
                            <div class="mau_sac_entry">
                            <label id="lbinput" for="mau_sac">Màu sắc, số lượng, kích cỡ giày</label>
                                <input type="text" id="color" class="txbadd" name="mau_sac[]" placeholder="Màu sắc" required>
                                <input type="text" id="num" class="txbadd" name="so_luong[]" placeholder="Số lượng" required>
                                <input type="text" id="size" class="txbadd" name="kich_co[]" placeholder="Kích cỡ" required>
                            
                            </div>
                            </div>
                        </li>

                                                                    
                        <br>
                        <li class="buttonli">
                            <button type="button" id="btnadd" onclick="addMauSacEntry()">Thêm màu sắc, số lượng, kích cỡ giày</button>
                        </li>
                        <script>
                                function addMauSacEntry() {
                                    var mauSacEntries = document.getElementById('mau_sac_entries');
                                    var newMauSacEntry = document.createElement('div');
                                    newMauSacEntry.innerHTML = `
                                        <div class="mau_sac_entry">
                                            <input type="text" id="color" class="txbadd" name="mau_sac[]" placeholder="Màu sắc" required>
                                            <input type="text"  id="num" class="txbadd" name="so_luong[]" placeholder="Số lượng" required>
                                            <input type="text"  id="size" class="txbadd" name="kich_co[]" placeholder="Kích cỡ" required>
                                        </div>
                                    `;
                                    mauSacEntries.appendChild(newMauSacEntry);
                                }

                     </script>
                        <li>
                            <label for="gia_ban">Giá bán</label>
                            <input type="text" id="gia_ban" name="gia_ban" required>
                        </li>
                        
                        <li>
                            <label for="the_loai">Thể loại</label>
                            <input type="text" id="the_loai" name="the_loai" required>
                        </li>

                        <li>
                            <label for="nuoc_san_xuat">Nước sản xuất</label>
                            <input type="text" id="nuoc_san_xuat" name="nuoc_san_xuat" required>
                        </li>

                        <li class="button-li">
                            <input id="xn" type="submit" name="add" value="Xác nhận">
                        </li>
                    </ul>
        </form>


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