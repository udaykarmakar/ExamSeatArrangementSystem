<?php
/**
 * Created by PhpStorm.
 * User: ashish.sharma
 * Date: 07-04-2017
 * Time: 21:46
 */
 session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else
{?>
    <!doctype html>
    <html>
<head>
    <title>
        Seating Arrangement Print
    </title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            <h1>Seating Arrangement Ready For Print </h1>
        </div>
        <button name="Print" id="Print" onclick="printSeatArrangement()" class="btn btn-primary btn-block">Print</button><br/>
      <!-- <button name="TeacherAllot" id="TeacherAllot" onclick="move()" class="btn btn-primary btn-block" disabled>Seating Arrangement</button>-->
    </div>
</div>
<!-- Button For Seating Arrangement-->
<div>

</div>
<script>
    /*function move()
    {
        alert("Moving Teacher Allocation chart");
        window.location.assign("teacherTime.php");
    }
    */
    function printSeatArrangement()
    {
        alert("Printing Seating Arrangement For All Years");
        //document.getElementById('TeacherAllot').removeAttribute("disabled");
        window.location.assign("SeatingArrangementFormatting.php");
    }
</script>
</body>
</body>
</html>

<?php
}
?>