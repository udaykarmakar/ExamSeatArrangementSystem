<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else
{
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $_SESSION['seDefaulter'] = $_POST['seDefaulter'];
    $_SESSION['teDefaulter'] = $_POST['teDefaulter'];
    $_SESSION['beDefaulter'] = $_POST['beDefaulter'];
    $str = <<<str
<script>
window.location.assign("seatingArrangement2.php");
</script>
str;
    echo $str;
}
else{
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Seating Arrangement</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="bootstrap/jquery-3.2.0.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-default bg-primary">
    <div class="container-fluid">
        <!--header-->
        <div class="navbar-header">
            <a href="#" class="navbar-brand">SEATING ARRANGEMENT SYSTEM</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="col-md-6 col-md-push-3">
        <header class="">
            <h2>Seating Arrangement</h2>
        </header>
        <fieldset>
            <legend>Details</legend>
            <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" onload="this.reset()">

                <div class="row">
                    <label for="yearSelect">Second Year: </label><br/>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="eg. 1,2,3,4,5" name="seDefaulter"
                               pattern="^([0-9]+,)*[0-9]+$" required/>
                    </div>
                    <div class="col-md-6">If no defaulters enter 0
                    </div>
                </div>
                <br/>
                <div class="row">
                    <label for="yearSelect">Third Year: </label><br/>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="eg. 1,2,3,4,5" name="teDefaulter"
                               pattern="^([0-9]+,)*[0-9]+$" required/>
                    </div>
                    <div class="col-md-6">
                        If no defaulters enter 0
                    </div>
                </div>
                <br/>
                <div class="row">
                    <label for="yearSelect">Fourth Year: </label><br/>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="eg. 1,2,3,4,5" name="beDefaulter"
                               pattern="^([0-9]+,)*[0-9]+$" required/>
                    </div>
                    <div class="col-md-6">
                        If no defaulters enter 0
                    </div>
                </div>
                <br/>
                <input type="submit" value="Submit" id="submit" class="btn btn-primary btn-block">
            </form>
        </fieldset>
    </div>
</div>
</body>
</html>
<?php
}
}
?>