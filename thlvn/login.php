
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
      background-color: #4CAF50; /* Màu xanh lá cây */
      color: greenyellow;
    }

    /* Thiết lập kiểu dáng cho nút Đăng nhập */
    #loginButton {
      background-color: #3498db; /* Màu xanh dương */
      color: white;
    }
    .center {
      text-align: center;
      margin-top: 140px;
      
    }
    
element.style {
   
}
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
                            <p> Đăng Nhập</p>
                            <img style=" width: 100px; text-align: center;" src="./img/locksmith.png">
                            <br>
                            <input type="text" class="text" name="namelogin" placeholder="Tên tài khoản"> <br>
                            <input type="text" class="text" name="password" placeholder="Mật khẩu"> <br>
                        
                            <div class="center">

                            <input id="registerButton" type="submit" value="Đăng nhập" name="dangnhap">
                            <br></br>
                            <a style="text-decoration: none;"href="register.php">Đăng Kí</a>
                            </div>
                        </form>
                 
                    </div>
</div>
</body>
</html>