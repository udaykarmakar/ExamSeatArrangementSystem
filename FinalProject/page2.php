<?php
session_start();
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else
{
?>

<!doctype html>
<html>
<head>
    <title>Exam Management System: Selection Page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="custom.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function timeTable()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('TimeTableSe.php');
            }
        }
        function seatingArrangement()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('seatingArrangement.php');
            }
        }
        function superVisorAllot()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('teacherTime.php');
            }
        }
    </script>
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
        <div class="row">
            <div class="col-md-4">
                <input type="button" class="form-control btn btn-primary btn-block" onclick="timeTable()" value="Time Table"/><br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="button" class="form-control btn btn-primary btn-block"  onclick="seatingArrangement()" value="Seating Arrangement"/><br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="button" class="form-control btn btn-primary btn-block" onclick="superVisorAllot()" value="Allocate Supervisor"/><br/>
            </div>
        </div>
    </div>
    </section>
    </body>
</html>
<?php }?>