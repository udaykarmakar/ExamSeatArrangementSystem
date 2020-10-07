<?php
    require 'Db.php';
    $error = "";
    $success = "";
    if(isset($_POST['uname'])){
        $username=$_POST['uname'];
        $password=$_POST['pass'];
        $sql="select * from login where uname='".$username."' AND pass='".$password."' limit 1";
        
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)==1){
            $error = "";
            $success = "Welcome Sir...!!";

            header("location: homepage.php");
        }
        else{
            $error = "Invalid Password!!!";
            $success = "";
            exit();
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login!</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="custom.css">-->
        <style>
            body{
                margin: 0;
                padding:0;
                font-family: 'Poppins', sans-serif;
                width: 100%;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                
                justify-content:center;
                align-items:center;
            }
            section{    
                height:680px;
                display:flex;
                justify-content:center;
                align-items:center;
                background: linear-gradient(-30deg, #03a9f4 0%, #3a78b7 50%, #262626 50%, #607d8b 100%);
                filter: hue-rotate(120deg);
                animation: animate 10s linear infinite;
            }
            @keyframes animate{
                0%{
                    filter: hue-rotate(0deg);
                }
                100%{
                    filter: hue-rotate(360deg);
                }
            }
            .box{
                justify-content:center;
                align-items:center;
                display: flex;
                color: seashell;
                position: relative;
                transform: translate(0%, 0%);
                width: 400px;
                padding: 40px;
                background: rgba(255, 255, 255, .1);
                box-sizing: border-box;
                box-shadow: 0px 5px 35px rgba(0, 0, 0, .5);
                border-radius: 6px;
            }
            .box::after{
                content: '';
                position: absolute;
                top: 5px;
                left: 5px;
                right: 5px;
                bottom: 5px;
                border-radius: 5px;
                pointer-events: none;
                background: linear-gradient(to bottom, rgba(255, 255, 255,0.3)0%,rgba(255,255,255,0.1)15%, transparent 50%, transparent 85%,
                rgba(255,255,255,0.3)100%);
            }

            .box h2{
                margin: 0 0 30px;
                margin-bottom: 30px;
                padding: 0;
                color: seashell;
                text-align: center;
            }
            .box .inputBox{
                position: relative;
            }
            .box .inputBox input{
                width:100%;
                padding: 8px 0;
                letter-spacing: 1px;
                font-size: 16px;
                color: snow;
                margin-bottom: 30px;
                border:none;
                border-bottom: 2px solid rgba(255, 255, 255, .2);
                outline: none;
                box-shadow: inset 0 0 25px rgba(0, 0, 0, .2);
                background: transparent;
            }
            .box .inputBox i{
                position: absolute;
                top: 8px;
                left:300px;
                transform: scale(0.9);
                filter: drop-shadow(8px 8px 10px gray);
            }
            .box .inputBox label{
                position: absolute;
                bottom: 28px;
                left: 2px;
                padding: 10px 0;
                font-size: 16px;
                color: seashell;
                pointer-events: none;
                transition: .5s;
            }
            .box .inputBox input:focus ~ label,
            .box .inputBox input:valid ~ label{
                top: -30px;
                left: 0;
                color: #03a9f4;
                font-size: 14px;
            }
            .box input[type="submit"]{
                background: transparent;
                border: none;
                letter-spacing: 1px;
                outline: none;
                color:#fff;
                font-weight: 600;
                background: #2e2e33;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                border: 2px solid #dd;
                border-radius: 3px;
                box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
                transition: all 200ms ease-out;
            }
            .box input[type="submit"]:hover{
                box-shadow: 0 0 0 3px rgba(35, 173, 255);
                color:rgba(35, 173, 255);
            }
        </style>
    </head>
    <body>
        <section>
            <p class='error'><?php echo $error;?></p>
            <p class='succcess'><?php echo $success;?></p>
            <div class="box">
                
                <form method = "post">
                    <div class = "form-input">
                    <h2>EXAM SEAT ARRANGEMENT SYSTEM</h2>
                        <div class="inputBox">
                            <input type="text" name="uname" required="">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                            <label>User Name</label>                        
                        </div>                 
                        <div class="inputBox">
                            <input type="password" name="pass" required="">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            <label>Password</label>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn-login" value="Login">
                </form>
            </div>
        </section>
    </body>
</html>
