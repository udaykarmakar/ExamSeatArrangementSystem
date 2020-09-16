<?php
session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else{
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Teacher Allotment</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
        <script src="bootstrap/jquery-3.2.0.js"></script>
        <script src="bootstrap/bootstrap.js"></script>
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
    <div class="container-fluid">
        <!--header-->
        <div class="navbar-header">
            <img src="https://daffodilvarsity.edu.bd/template/images/diulogoside.png" style="max-width:150px"/>
            <a href="homepage.php" class="navbar-brand" style="font-size:25px">EXAM SEATING ARRANGEMENT SYSTEM</a>
        </div>
    </div>
</nav>
<section>
  <form action="tt.php" method="post" class="form-group">
      <div class="container">
        <div class="col-md-6 col-md-push-3">
          <h2>Level 1</h2><br>
            <select name="SUB21" class="form-control">
              <option value="21" selected>MathsIV</option>
              <option value="22">CN</option>
              <option value="23">COA</option>
              <option value="24">AT</option>
              <option value="25">WP</option>
              <option value="26">ITC</option>
            </select>
            <select name="SUB22" class="form-control">
              <option value="21">MathsIV</option>
              <option value="22" selected>CN</option>
              <option value="23">COA</option>
              <option value="24">AT</option>
              <option value="25">WP</option>
              <option value="26">ITC</option>
            </select>
            <select name="SUB23" class="form-control">
              <option value="21">MathsIV</option>
              <option value="22">CN</option>
              <option value="23" selected>COA</option>
              <option value="24">AT</option>
              <option value="25">WP</option>
              <option value="26">ITC</option>
            </select>
            <select name="SUB24" class="form-control">
              <option value="21">MathsIV</option>
              <option value="22">CN</option>
              <option value="23">COA</option>
              <option value="24" selected>AT</option>
              <option value="25">WP</option>
              <option value="26">ITC</option>
            </select>
            <select name="SUB25" class="form-control">
              <option value="21">MathsIV</option>
              <option value="22">CN</option>
              <option value="23">COA</option>
              <option value="24">AT</option>
              <option value="25" selected>WP</option>
              <option value="26">ITC</option>
            </select>
            <select name="SUB26" class="form-control">
              <option value="21">MathsIV</option>
              <option value="22">CN</option>
              <option value="23">COA</option>
              <option value="24">AT</option>
              <option value="25">WP</option>
              <option value="26" selected>ITC</option>
            </select>
          <h2>Level 2</h2><br>
            <select name="SUB31" class="form-control">
              <option value="31" selected>ST</option>
              <option value="32">DS</option>
              <option value="33">SWS</option>
              <option value="34">DMBI</option>
              <option value="35">AIT</option>
            </select>
            <select name="SUB32" class="form-control">
              <option value="31">ST</option>
              <option value="32" selected>DS</option>
              <option value="33">SWS</option>
              <option value="34">DMBI</option>
              <option value="35">AIT</option>
            </select>
            <select name="SUB33" class="form-control">
              <option value="31">ST</option>
              <option value="32">DS</option>
              <option value="33" selected>SWS</option>
              <option value="34">DMBI</option>
              <option value="35">AIT</option>
            </select>
            <select name="SUB34" class="form-control">
              <option value="31">ST</option>
              <option value="32">DS</option>
              <option value="33">SWS</option>
              <option value="34" selected>DMBI</option>
              <option value="35">AIT</option>
            </select>
            <select name="SUB35" class="form-control">
              <option value="31">ST</option>
              <option value="32">DS</option>
              <option value="33">SWS</option>
              <option value="34">DMBI</option>
              <option value="35" selected>AIT</option>
            </select>
          <h2>Level 3</h2><br>
            <select name="SUB41" class="form-control">
              <option value="41" selected>SNMR</option>
              <option value="42">BDS</option>
              <option value="43">BDS</option>
              <option value="44">ELECTIVE</option>
            </select>
            <select name="SUB42" class="form-control">
              <option value="41">SNMR</option>
              <option value="42" selected>BDS</option>
              <option value="43">BDS</option>
              <option value="44">ELECTIVE</option>
            </select>
            <select name="SUB43" class="form-control">
              <option value="41">SNMR</option>
              <option value="42">BDS</option>
              <option value="43" selected>BDS</option>
              <option value="44">ELECTIVE</option>
            </select>
            <select name="SUB44" class="form-control">
              <option value="41">SNMR</option>
              <option value="42">BDS</option>
              <option value="43">BDS</option>
              <option value="44" selected>ELECTIVE</option>
            </select>
            <br><br><br>
<h2>CLASS 1 :</h2>
<select name="class11" class="form-control">
  <option value="2" selected>Level 1</option>
  <option value="3">Level 2</option>
  <option value="4">Level 3</option>
</select>
<select name="class12" class="form-control">
  <option value="2">Level 1</option>
  <option value="3" selected>Level 2</option>
  <option value="4">Level 3</option>
</select>
<br>
<h2>CLASS 2 :</h2>
<select name="class21" class="form-control">
  <option value="2">Level 1</option>
  <option value="3" selected>Level 2</option>
  <option value="4" >Level 3</option>
</select>
<select name="class22" class="form-control">
  <option value="2">Level 1</option>
  <option value="3">Level 2</option>
  <option value="4" selected>Level 3</option>
</select>
<br>
<br>
<h2>CLASS 3 :</h2>
<select name="class31" class="form-control">
  <option value="2" selected>Level 1</option>
  <option value="3">Level 2</option>
  <option value="4">Level 3</option>
</select>
<select name="class32" class="form-control">
  <option value="2">Level 1</option>
  <option value="3">Level 2</option>
  <option value="4" selected>Level 3</option>
</select>
<br>
<input type="submit" class="btn btn-dark btn-block" style="margin-left:20%; font-size:12px">
        </div>>
    </div>
</form>
</section>
</body>
</html>


<?php
}
?>
