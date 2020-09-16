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
        <title>
            Print Routine
        </title>
        <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
        <link rel="stylesheet" href="custom.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light">
            <div class="navbar-header">
                <img src="https://daffodilvarsity.edu.bd/template/images/diulogoside.png" style="max-width:150px"/>
                <a href="homepage.php" class="navbar-brand" style="font-size:25px">EXAM SEATING ARRANGEMENT SYSTEM</a>
            </div>
    </nav>
    <section>
        <div class="container">
            <div class="col-md-4 col-md-push-4">
                <div class="data">
                    <h1>Time Table is Ready For Print </h1>
                </div>
                <button name="Print" id="Print" onclick="printTimeTable()" class="btn btn-dark btn-block">Print</button><br/>
                <button name="SeatingArrangement" id="seatingArrangement" onclick="move()" class="btn btn-dark btn-block" disabled>Seating Arrangement</button>
            </div>
        </div>
    </section>
<!-- Button For Seating Arrangement-->
    <script>
        function move()
        {
            alert("Moving To Print Seating Arrangement Chart");
            window.location.assign("seatingArrangement.php");
        }
        function printTimeTable()
        {
            document.getElementById('seatingArrangement').removeAttribute("disabled");
            window.location.assign("TimeTablePdf.php");
        }
    </script>
    </body>
    </html>
    <?php
}
?>