
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
            background-color: #FFFFFF;
            width: 1271px;
            height: 102px; 
            line-height: 100px;
            

        }
        #dk{
            color:black;
            position: absolute; 
            left: 180px; 
            top:0px;
            font-style: italic;
            font-family: "Kaushan Script", cursive;
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
        #content{
            background:#348426;
            height:663px;
            width: 100%;
            display: flex;
        }
        #formregister{
            width: 541px;
            height:514px;
            background:#FFFFFF;
            border-radius:10px;
            position: absolute; 
            right: 50px; 
            top:200px;
       
        }
        .text{
            width: 470px;
            height: 40px;
            background:#E2DBDB;
            text-align:left;
            border-radius:3px;
            border:none;
            margin-top:10px;
            margin-left:25px;
        }
        #submit{
            background: #D0E9B0;
            width: 473px;
            height: 40px;
            border-radius:3px;
            border:none;
            margin-top:10px;
            margin-left:25px;
            color:#C20B0B;
            font-size:24;
        }
        p{
            text-align:center;
            color:#0E3AAC;
        }
        #namewebslogan{

        }
        #nameweb{
            color:yellow;
            font-size:30px;
            font-family: "Kaushan Script", cursive;
            position: absolute; 
            top: 350px; 
            left:200px
        }
        #slogan{
            color: #ffffff;
            font-size:30px;
            font-family: "Kaushan Script", cursive;
            position: absolute; 
            top: 500px; 
            left:30px;
        }
        .footer{
        background:#EEDCDC;
        height: 132px;
        /* padding: 0;
        margin:0; */
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
        }
        #tenweb{
        text-align: center;
        }
    </style>
</head>

<body>
<div id="head">
            <div class="homepage">
                        <button id="btnhome">
                            <div class="imglogo"> <img src="./img/logo.jpg" width="90px"  height="102px"  alt="logo"  > </div> 
                            <div class="nameweb" > Web <br> sells <br> shoes </div>
                        </button>
                       
            </div>
            <div class="areafind-login">
                   <p id="dk">Đăng ký<p>
            </div>

</div>
<?php

                           if(isset($_POST['register']))
                           {
                          

                                $account = $_POST['namelogin'];
                                $password = $_POST['password'];
                                $repassword = $_POST['repassword'];
                                $fullname = $_POST['fullname'];
                                $numberphone = $_POST['numberphone'];
                                $live = $_POST['live'];
                                $identify = $_POST['identify'];
                               
                 
                                $conn = mysqli_connect("localhost", "root", "", "db.websellsshoes") or die ("!!");
                            



                                if( ($account === "")||
                                  ( $password === "") || 
                                    ($repassword ==="")||
                                  ("" === $fullname ) ||
                                  ($numberphone === "") ||
                                ( $live ==="")||
                                  ($identify === ""))
                                {
                                    echo "<script> 
                                    alert('Chưa nhập đầy đủ thông tin.');
                                    </script>";
                                } else {
                                   
                                    $sqlCom2 = "SELECT * FROM taikhoan WHERE username='".$account."'";
                                    $kqkt = mysqli_query($conn, $sqlCom2);
                                       
                                    if(mysqli_fetch_array($kqkt)) 
                                        echo "<script> 
                                        alert('Tên đăng nhập đã tồn tại.');
                                        </script>";
                                    else {
                                        if($password != $repassword){
                                            echo "<script> 
                                            alert('Mật khẩu không khớp.');
                                            </script>";
                                        }else {

                                            $cmdInsert = "INSERT INTO taikhoan (username, password , fullname, numberphone, site, identify )
                                            VALUES ('".$account."', '". $password."', '".$fullname."', '".$numberphone."', '".$live."', '".$identify."');";
                                            $queryInsert= mysqli_query($conn, $cmdInsert);
                                            echo "<script> 
                                            alert('Đăng ký thành công');
                                            window.location='login.php';
                                            </script>";
                                        }

                                    }

                                }


                           } 

                    ?>
<div id="content">
                    <div id="namewebslogan">
                            <div id="nameweb"> WEB <br> SELLS <br> SHOES</div>
                            <div id="slogan"> Mang đôi chân của bạn đến mọi nơi</div>
                    </div>
                    <div id="formregister">
                        <p> Đăng ký</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="text" class="text" name="namelogin" placeholder= "Tên đăng nhập" > <br>
                            <input type="password" class="text" name="password" placeholder="Mật khẩu"> <br>
                            <input type="password" class="text" name="repassword" placeholder="Nhập lại mật khẩu"> <br>
                            <input type="text" class="text" name="fullname" placeholder="Họ và tên"> <br>
                            <input type="text" class="text" name="numberphone" placeholder="Số điện thoại"> <br>
                            <input type="text" class="text" name="live" placeholder="Địa chỉ"> <br>
                            <input type="text" class="text" name="identify" placeholder="Căn cước công dân"> <br>
                            <input type="submit" id="submit" name="register" value="Đăng ký"> <br>
                        </form>

                    </div>

                   
        </div>
        <div class="footer">
        <div id="contact" class="fixsite"><p>Địa chỉ:  Số 30, đường An Dương Vương, phường  Nhơn Phú, tp Quy Nhơn.<br>
                                        Số điện thoại: 034747382. </div>
                    <hr>
                    <div id="tenwb" class="fixsite"><p>Twoteam-WebSellsShoes</p></div>
    </div>
</body>
</html>





