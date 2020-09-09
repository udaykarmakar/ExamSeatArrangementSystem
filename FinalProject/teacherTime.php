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
        <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
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
<form action="tt.php" method="post" class="form-group">
    <div class="container-fluid">
        <div class="col-md-6 col-md-push-3">
<p>SE</p><br>
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
<p>TE</p><br>
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
<p>BE</p><br>
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
<p>CLASS 1 :</p>
<select name="class11" class="form-control">
  <option value="2" selected>SE</option>
  <option value="3">TE</option>
  <option value="4">BE</option>
</select>
<select name="class12" class="form-control">
  <option value="2">SE</option>
  <option value="3" selected>TE</option>
  <option value="4">BE</option>
</select>
<br>
<p>CLASS 2 :</p>
<select name="class21" class="form-control">
  <option value="2">SE</option>
  <option value="3" selected>TE</option>
  <option value="4" >BE</option>
</select>
<select name="class22" class="form-control">
  <option value="2">SE</option>
  <option value="3">TE</option>
  <option value="4" selected>BE</option>
</select>
<br>
<br>
<p>CLASS 3 :</p>
<select name="class31" class="form-control">
  <option value="2" selected>SE</option>
  <option value="3">TE</option>
  <option value="4">BE</option>
</select>
<select name="class32" class="form-control">
  <option value="2">SE</option>
  <option value="3">TE</option>
  <option value="4" selected>BE</option>
</select>
<br>
<input type="submit" class="btn btn-primary btn-block" style="margin-left:20%;">
        </div>>
    </div>
</form>

</body>
</html>


<?php
}
?>
