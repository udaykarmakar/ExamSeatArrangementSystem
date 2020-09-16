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
    <script src="bootstrap/jquery-3.2.0.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <link rel="stylesheet" href="custom.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light">
    <div class="container-fluid">
        <!--header-->
        <div class="navbar-header">
                <img src="https://daffodilvarsity.edu.bd/template/images/diulogoside.png" style="max-width:150px"/>
                <a href="homepage.php" class="navbar-brand" style="font-size:25px">EXAM SEATING ARRANGEMENT SYSTEM</a>
            </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="col-md-6 col-md-push-3">
            <header class="">
                <h2>Seat Plan</h2>
            </header>
            <fieldset>
                <legend>Details</legend>
                <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" onload="this.reset()">

                    <div class="row">
                        <label for="yearSelect">Level 1: </label><br/>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="eg. 1,2,3,4,5" name="seDefaulter"
                                pattern="^([0-9]+,)*[0-9]+$" required/>
                        </div>
                        <div class="col-md-6">If no defaulters enter 0
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <label for="yearSelect">Level 2: </label><br/>
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
                        <label for="yearSelect">Level 3: </label><br/>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="eg. 1,2,3,4,5" name="beDefaulter"
                                pattern="^([0-9]+,)*[0-9]+$" required/>
                        </div>
                        <div class="col-md-6">
                            If no defaulters enter 0
                        </div>
                    </div>
                    <br/>
                    <input type="submit" value="Submit" id="submit" class="btn btn-dark btn-block">
                </form>
            </fieldset>
        </div>
    </div>
</section>
</body>
</html>
<?php
}
}
?>