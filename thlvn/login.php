
<?php session_start(); ?>
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
            /* margin-bottom:0; */
        }
        #formregister{
            width: 470px;
            height:470px;
            background:#FFFFFF;
            border-radius:10px;
            position: absolute; 
            right: 50px; 
            top:200px;
       
        }
        #formregister input{
            width: 400px;
            height:50px;

        }
        .text{
            width: 350px;
            height: 40px;
            background:#E2DBDB;
            text-align:left;
            border-radius:3px;
            border:none;
            margin-top:10px;
            margin-left:25px;
            margin-top:27px
        }
        #submit{
            background: #D0E9B0;
            width: 473px;
            height: 40px;
            border-radius:3px;
            border:none;
            margin-top:10px;
            margin-left:25px;
            color: #772A2A;
            font-size:24;
        }
        .register{
            background:red;
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
            right: 200px;

        }
        #nameweb{
            color:yellow;
            font-size:35px;
            font-family: "Kaushan Script", cursive;
            position: absolute; 
            top: 320px; 
            left:320px
        }
        #slogan{
            color: #ffffff;
            font-size:35px;
            font-family: "Kaushan Script", cursive;
            position: absolute; 
            top: 500px; 
            left:130px;
        }
        button {
      padding: 10px 20px;
      background-color: #C20B0B; /* Màu xanh lá cây */
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
     /* Thiết lập kiểu dáng cho nút Đăng kí */
     #registerButton {
        background-color: #D0E9B0; /* Màu xanh lá cây */
        color: yellow;
        width: 350px;
            height: 40px;
        color:#C20B0B;
        border:1px;
        font-size:19px;
    }

    /* Thiết lập kiểu dáng cho nút Đăng nhập */
    #loginButton {
      background-color: #3498db; /* Màu xanh dương */
      color: white;
    }
    .center {
      text-align: center;
      margin-top: 140px;
      position: absolute; 
            top: 225px; 
            left: 30px; 
      
    }
    
   #dangky {
    font-size:16px;
    color:#3120EF;


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

        }
        #tenweb p{
            height: 30px;
        line-height: 0;
        color:#D47373;
        text-align: center;
        margin-top:0px;
        
        }

        #anh{
            text-align: center;
            /* position: absolute; 
            top: 25px; 
            left: 30px;  */

        }
        #anh img{
            width:150px;
            height:160px;

        }
        #imgtextbox{
            display:block
        }
        /* #nameweb{
        height: 30px;
        line-height: 1vh;
        }
        #nameweb{
        text-align: center;
        } */
    </style>
</head>
<?php

$conn = mysqli_connect("localhost", "root", "", "db.websellsshoes") or die ("!!");

if(isset($_POST['dangnhap']))
{

 
        if(($_POST["namelogin"] !== "") && ($_POST["password"] !== ""))
        {
            $cmd = "SELECT * FROM taikhoan WHERE username='".$_POST["namelogin"]."' and password = '".$_POST["password"]."'";
            $kqkt = mysqli_query($conn, $cmd);

            if($row = mysqli_fetch_array($kqkt))
            {
                unset( $_SESSION['username']);
                $_SESSION['username'] = $_POST["namelogin"];
                    echo "<script> 
                    alert('Đăng nhập thành công');
                    window.location='find.php';
                    </script>";
            }   
            
            else
            {
                echo "<script> 
                alert('Vui lòng kiểm tra lại tài khoản hoặc mật khẩu');
                window.location='login.php';
                </script>";
            }
    
        } 
        else {
            echo "<script> 
            alert('Vui lòng nhập đầy đủ tên đăng nhập hoặc mật khẩu');
            window.location='login.php';
            </script>";
        }

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
                   <p id="dk">Đăng Nhập<p>
            </div>
</div>
<div id="content">
                    <div id="namewebslogan">
                            <div id="nameweb"> WEB <br> SELLS <br> SHOES</div>
                            <div id="slogan"> Mang đôi chân của bạn đến mọi nơi</div>
                    </div>
                    <div id="formregister">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                         
                        <div id="imgtextbox">
                            <div id="anh">
                            <img   src="./img/locksmith.png" alt=""> 
                            </div>  
                            <div>
                            <input type="text" class="text" name="namelogin" placeholder="Tên tài khoản"> <br>
                            <input type="text" class="text" name="password" placeholder="Mật khẩu"> <br>
                            </div>
                        </div>
               
                         
                        
                            <div class="center">

                            <input id="registerButton" type="submit" value="Đăng nhập" name="dangnhap">
                            <br></br>
                            <a  id="dangky" style="text-decoration: none;"href="register.php">Đăng Ký</a>
                            </div>
                        </form>
                 
                    </div>
</div>
<div class="footer">
        <div id="contact" ><p>Địa chỉ:  Số 30, đường An Dương Vương, phường  Nhơn Phú, tp Quy Nhơn.<br>
                                        Số điện thoại: 034747382. </div>
                    <hr>
                    <div id="tenweb" ><p>Twoteam-WebSellsShoes</p>
                    </div>
</div>
            
</body>
</html>