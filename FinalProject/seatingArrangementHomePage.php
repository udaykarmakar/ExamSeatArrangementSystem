<?php
/**
 * Created by PhpStorm.
 * User: ashish.sharma
 * Date: 06-04-2017
 * Time: 19:18
 */
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
        <title>
            Print TimeTable
        </title>
        <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
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
    <div class="col-md-4 col-md-push-4">
        <div class="data">
            <h1>Time Table Ready For Print </h1>
        </div>
        <button name="Print" id="Print" onclick="printTimeTable()" class="btn btn-primary btn-block">Print</button><br/>
        <button name="SeatingArrangement" id="seatingArrangement" onclick="move()" class="btn btn-primary btn-block" disabled>Seating Arrangement</button>
    </div>
</div>
<!-- Button For Seating Arrangement-->
    <div>

</div>
<script>
    function move()
    {
        alert("Moving To Print Seating Arrangement Chart");
        window.location.assign("seatingArrangement.php");
    }
    function printTimeTable()
    {
        alert("Printing TimeTable For All Years");
        document.getElementById('seatingArrangement').removeAttribute("disabled");
        window.location.assign("TimeTablePdf.php");
    }
</script>
</body>
    </html>
    <?php
}
?>