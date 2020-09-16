<?php
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $error = "";
    $success = "";

    if(isset($_POST['login'])){
        if($uname == "admin"){
            if($pass == "admin"){
                $error = "";
                $success = "Welcome Sir...!!";

                header("location: homepage.php");
            }
            else{
                $error = "Invalid Passwprd!!!";
                $success = "";
            }
        }
        else{
            $error = "Invalid User Name!!!";
            $success = "";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login!</title>
        <link rel="stylesheet" href="custom.css">
    </head>
    <body>
        <p class='error'><?php echo $error;?></p>
        <p class='succcess'><?php echo $success;?></p>
        <div class="box">
            <h2>EXAM SEAT ARRANGEMENT SYSTEM</h2>
            <form method = "post">
                <div class = "form-input">
                    <div class="inputBox">
                        <input type="text" name="uname" required="">
                        <label>User Name</label>
                    </div>
                    
                    <div class="inputBox">
                        <input type="password" name="pass" required="">
                        <label>Password</label>
                    </div>
                </div>
                <input type="submit" name="login" value="Login">

            </form>
        </div>

    </body>
</html>
<?php 
?>