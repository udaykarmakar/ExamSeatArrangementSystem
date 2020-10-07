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
          <p>Term - 1</p>
            <select name="SUB21" class="form-control">
              <option value="21" selected>CSE112</option>
              <option value="22">MAT111</option>
              <option value="23">ENG113</option>
              <option value="24">PHY113</option>
            </select>
            <select name="SUB22" class="form-control">
              <option value="21">CSE112</option>
              <option value="22" selected>MAT111</option>
              <option value="23">ENG113</option>
              <option value="24">PHY113</option>
            </select>
            <select name="SUB23" class="form-control">
              <option value="21">CSE112</option>
              <option value="22">MAT111</option>
              <option value="23" selected>ENG113</option>
              <option value="24">PHY113</option>
            </select>
            <select name="SUB24" class="form-control">
              <option value="21">CSE112</option>
              <option value="22">MAT111</option>
              <option value="23">ENG113</option>
              <option value="24" selected>PHY113</option>
            </select>
            <p>Term - 2</p>
            <select name="SUB25" class="form-control">
              <option value="21" selected>MAT121</option>
              <option value="22">CSE122</option>
              <option value="23">CSE123</option>
              <option value="24">PHY123</option>
              <option value="25">PHY124</option>
              <option value="26">ENG123</option>
            </select>
            <select name="SUB26" class="form-control">
              <option value="21">MAT121</option>
              <option value="22" selected>CSE122</option>
              <option value="23">CSE123</option>
              <option value="24">PHY123</option>
              <option value="25">PHY124</option>
              <option value="26">ENG123</option>
            </select>
            <select name="SUB27" class="form-control">
              <option value="21">MAT121</option>
              <option value="22">CSE122</option>
              <option value="23" selected>CSE123</option>
              <option value="24">PHY123</option>
              <option value="25">PHY124</option>
              <option value="26">ENG123</option>
            </select>
            <select name="SUB28" class="form-control">
              <option value="21">MAT121</option>
              <option value="22">CSE122</option>
              <option value="23">CSE123</option>
              <option value="24" selected>PHY123</option>
              <option value="25">PHY124</option>
              <option value="26">ENG123</option>
            </select>
            <select name="SUB29" class="form-control">
              <option value="21">MAT121</option>
              <option value="22">CSE122</option>
              <option value="23">CSE123</option>
              <option value="24">PHY123</option>
              <option value="25" selected>PHY124</option>
              <option value="26">ENG123</option>
            </select>
            <select name="SUB30" class="form-control">
              <option value="21">MAT121</option>
              <option value="22">CSE122</option>
              <option value="23">CSE123</option>
              <option value="24">PHY123</option>
              <option value="25">PHY124</option>
              <option value="26" selected>ENG123</option>
            </select>
            <p>Term - 3</p>
            <select name="SUB31" class="form-control">
              <option value="21" selected>CSE131</option>
              <option value="22">CSE132</option>
              <option value="23">CSE133</option>
              <option value="24">CSE134</option>
              <option value="25">CSE135</option>
              <option value="26">MAT131</option>
            </select>
            <select name="SUB32" class="form-control">
              <option value="21">CSE131</option>
              <option value="22" selected>CSE132</option>
              <option value="23">CSE133</option>
              <option value="24">CSE134</option>
              <option value="25">CSE135</option>
              <option value="26">MAT131</option>
            </select>
            <select name="SUB33" class="form-control">
              <option value="21">CSE131</option>
              <option value="22">CSE132</option>
              <option value="23" selected>CSE133</option>
              <option value="24">CSE134</option>
              <option value="25">CSE135</option>
              <option value="26">MAT131</option>
            </select>
            <select name="SUB34" class="form-control">
              <option value="21">CSE131</option>
              <option value="22">CSE132</option>
              <option value="23">CSE133</option>
              <option value="24" selected>CSE134</option>
              <option value="25">CSE135</option>
              <option value="26">MAT131</option>
            </select>
            <select name="SUB35" class="form-control">
              <option value="21">CSE131</option>
              <option value="22">CSE132</option>
              <option value="23">CSE133</option>
              <option value="24">CSE134</option>
              <option value="25" selected>CSE135</option>
              <option value="26">MAT131</option>
            </select>
            <select name="SUB36" class="form-control">
              <option value="21">CSE131</option>
              <option value="22">CSE132</option>
              <option value="23">CSE133</option>
              <option value="24">CSE134</option>
              <option value="25">CSE135</option>
              <option value="26" selected>MAT131</option>
            </select>
            <br><h2>Level 2</h2>
          <p>Term - 1</p>
            <select name="SUB37" class="form-control">
              <option value="31" selected>MAT211</option>
              <option value="32">CSE212</option>
              <option value="33">CSE213</option>
              <option value="34">CSE214</option>
              <option value="35">CSE215</option>
              <option value="36">ED201</option>
            </select>
            <select name="SUB38" class="form-control">
              <option value="31">MAT211</option>
              <option value="32" selected>CSE212</option>
              <option value="33">CSE213</option>
              <option value="34">CSE214</option>
              <option value="35">CSE215</option>
              <option value="36">ED201</option>
            </select>
            <select name="SUB39" class="form-control">
              <option value="31">MAT211</option>
              <option value="32">CSE212</option>
              <option value="33" selected>CSE213</option>
              <option value="34">CSE214</option>
              <option value="35">CSE215</option>
              <option value="36">ED201</option>
            </select>
            <select name="SUB40" class="form-control">
              <option value="31">MAT211</option>
              <option value="32">CSE212</option>
              <option value="33">CSE213</option>
              <option value="34" selected>CSE214</option>
              <option value="35">CSE215</option>
              <option value="36">ED201</option>
            </select>
            <select name="SUB41" class="form-control">
              <option value="31">MAT211</option>
              <option value="32">CSE212</option>
              <option value="33">CSE213</option>
              <option value="34">CSE214</option>
              <option value="35" selected>CSE215</option>
              <option value="36">ED201</option>
            </select>
            <select name="SUB42" class="form-control">
              <option value="31">MAT211</option>
              <option value="32">CSE212</option>
              <option value="33">CSE213</option>
              <option value="34">CSE214</option>
              <option value="35">CSE215</option>
              <option value="36" selected>ED201</option>
            </select>
            <p>Term - 2</p>
              <select name="SUB43" class="form-control">
                <option value="31" selected>CSE221</option>
                <option value="32">CSE222</option>
                <option value="33">STA133</option>
                <option value="34">CSE224</option>
                <option value="35">CSE225</option>
              </select>
              <select name="SUB44" class="form-control">
                <option value="31">CSE221</option>
                <option value="32" selected>CSE222</option>
                <option value="33">STA133</option>
                <option value="34">CSE224</option>
                <option value="35">CSE225</option>
              </select>
              <select name="SUB45" class="form-control">
                <option value="31">CSE221</option>
                <option value="32">CSE222</option>
                <option value="33" selected>STA133</option>
                <option value="34">CSE224</option>
                <option value="35">CSE225</option>
              </select>
              <select name="SUB46" class="form-control">
                <option value="31">CSE221</option>
                <option value="32">CSE222</option>
                <option value="33">STA133</option>
                <option value="34" selected>CSE224</option>
                <option value="35">CSE225</option>
              </select>
              <select name="SUB47" class="form-control">
                <option value="31">CSE221</option>
                <option value="32">CSE222</option>
                <option value="33">STA133</option>
                <option value="34">CSE224</option>
                <option value="35" selected>CSE225</option>
              </select>

            <p>Term - 3</p>
              <select name="SUB48" class="form-control">
                <option value="31" selected>CSE231</option>
                <option value="32">CSE232</option>
                <option value="33">CSE233</option>
                <option value="34">CSE234</option>
                <option value="35">CSE235</option>
              </select>
              <select name="SUB49" class="form-control">
                <option value="31">CSE231</option>
                <option value="32" selected>CSE232</option>
                <option value="33">CSE233</option>
                <option value="34">CSE234</option>
                <option value="35">CSE235</option>
              </select>
              <select name="SUB50" class="form-control">
                <option value="31">CSE231</option>
                <option value="32">CSE232</option>
                <option value="33" selected>CSE233</option>
                <option value="34">CSE234</option>
                <option value="35">CSE235</option>
              </select>
              <select name="SUB51" class="form-control">
                <option value="31">CSE231</option>
                <option value="32">CSE232</option>
                <option value="33">CSE233</option>
                <option value="34" selected>CSE234</option>
                <option value="35">CSE235</option>
              </select>
              <select name="SUB52" class="form-control">
                <option value="31">CSE231</option>
                <option value="32">CSE232</option>
                <option value="33">CSE233</option>
                <option value="34">CSE234</option>
                <option value="35" selected>CSE235</option>
              </select>
          <br><h2>Level 3</h2>
          <p>Term - 1</p>
            <select name="SUB53" class="form-control">
              <option value="41" selected>CSE311</option>
              <option value="42">CSE312</option>
              <option value="43">CSE313</option>
              <option value="44">CSE314</option>
              <option value="45">ECO314</option>
            </select>
            <select name="SUB54" class="form-control">
              <option value="41">CSE311</option>
              <option value="42" selected>CSE312</option>
              <option value="43">CSE313</option>
              <option value="44">CSE314</option>
              <option value="45">ECO314</option>
            </select>
            <select name="SUB55" class="form-control">
              <option value="41">CSE311</option>
              <option value="42">CSE312</option>
              <option value="43" selected>CSE313</option>
              <option value="44">CSE314</option>
              <option value="45">ECO314</option>
            </select>
            <select name="SUB56" class="form-control">
              <option value="41">CSE311</option>
              <option value="42">CSE312</option>
              <option value="43">CSE313</option>
              <option value="44" selected>CSE314</option>
              <option value="45">ECO314</option>
            </select>
            <select name="SUB57" class="form-control">
              <option value="41">CSE311</option>
              <option value="42">CSE312</option>
              <option value="43">CSE313</option>
              <option value="44">CSE314</option>
              <option value="45" selected>ECO314</option>
            </select>
          <p>Term - 2</p>
              <select name="SUB58" class="form-control">
                <option value="41" selected>CSE321</option>
                <option value="42">CSE322</option>
                <option value="43">CSE323</option>
                <option value="44">CSE324</option>
                <option value="45">GED321</option>
              </select>
              <select name="SUB59" class="form-control">
                <option value="41">CSE321</option>
                <option value="42" selected>CSE322</option>
                <option value="43">CSE323</option>
                <option value="44">CSE324</option>
                <option value="45">GED321</option>
              </select>
              <select name="SUB60" class="form-control">
                <option value="41">CSE321</option>
                <option value="42">CSE322</option>
                <option value="43" selected>CSE323</option>
                <option value="44">CSE324</option>
                <option value="45">GED321</option>
              </select>
              <select name="SUB61" class="form-control">
                <option value="41">CSE321</option>
                <option value="42">CSE322</option>
                <option value="43">CSE323</option>
                <option value="44" selected>CSE324</option>
                <option value="45">GED321</option>
              </select>
              <select name="SUB62" class="form-control">
                <option value="41">CSE321</option>
                <option value="42">CSE322</option>
                <option value="43">CSE323</option>
                <option value="44">CSE324</option>
                <option value="45" selected>GED321</option>
              </select>
            <p>Term - 3</p>
                <select name="SUB63" class="form-control">
                  <option value="41" selected>CSE331</option>
                  <option value="42">CSE332</option>
                  <option value="43">CSE333</option>
                  <option value="44">CSE334</option>
                  <option value="45">ACT301</option>
                </select>
                <select name="SUB64" class="form-control">
                  <option value="41">CSE331</option>
                  <option value="42" selected>CSE332</option>
                  <option value="43">CSE333</option>
                  <option value="44">CSE334</option>
                  <option value="45">ACT301</option>
                </select>
                <select name="SUB65" class="form-control">
                  <option value="41">CSE331</option>
                  <option value="42">CSE332</option>
                  <option value="43" selected>CSE333</option>
                  <option value="44">CSE334</option>
                  <option value="45">ACT301</option>
                </select>
                <select name="SUB66" class="form-control">
                  <option value="41">CSE331</option>
                  <option value="42">CSE332</option>
                  <option value="43">CSE333</option>
                  <option value="44" selected>CSE334</option>
                  <option value="45">ACT301</option>
                </select>
                <select name="SUB67" class="form-control">
                  <option value="41">CSE331</option>
                  <option value="42">CSE332</option>
                  <option value="43">CSE333</option>
                  <option value="44">CSE334</option>
                  <option value="45" selected>ACT301</option>
                </select>
            <br><br><br>
<h2>DT 101 :</h2>
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
<h2>DT 102 :</h2>
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
<h2>DT 103 :</h2>
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
<input type="submit" class="btn btn-dark btn-block" style="font-size:12px">
        </div>>
    </div>
</form>
</section>
  
</body>
</html>


<?php
}
?>
