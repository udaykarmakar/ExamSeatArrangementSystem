<?php
    $db = "seatingarrangement";
    $error = "";
    $success = "";
    $conn = mysqli_connect('localhost','root','') or die();
    $db = mysqli_select_db($conn, $db);

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
        <link rel="stylesheet" href="custom.css">
        <style>
            
        </style>
    </head>
    <body style="background: linear-gradient(-30deg, #03a9f4 0%, #3a78b7 50%, #262626 50%, #607d8b 100%)">
    
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
    </body>
</html>
