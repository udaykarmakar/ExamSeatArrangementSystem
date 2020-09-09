<?php
/**
 * Created by PhpStorm.
 * User: ashish.sharma
 * Date: 07-04-2017
 * Time: 22:39
 */
?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<table class="table table-condensed table-striped">
    <thead>
    <td>Name</td>
    <td>Roll No.</td>
    </thead>
    <tbody>
    <tr>
        <td>Ashish</td>
        <td  onclick="this.parentNode.remove()">61<span class="glyphicon glyphicon-remove"></span></td>
    </tr>
    </tbody>

</table>
<script src="bootstrap/jquery-3.2.0.js"></script>
<script src="bootstrap/bootstrap.js"></script>
</body>
</html>
