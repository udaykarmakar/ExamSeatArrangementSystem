<?php
session_start();
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $_SESSION['BE'] = $_POST;
        unset($_SESSION['BE']['Year']);
        $str = <<< end
<script>
alert('Time Table Set For Final Year');
window.location.assign("seatingArrangementHomePage.php");
</script>
end;
    echo $str;
}
else {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Time Table: Fourth Year</title>
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
      <div class="col-md-6 col-md-push-3">
          <div class="row">
              <header>
                  <h1>Time Table: Fourth Year</h1>
              </header>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-12">
                          <label for="Add">Add Row</label>
                      </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                      <select name="RowCount" title="RolwCount" class="form-control">
                          <option value="One" id="one">1 Subject</option>
                          <option value="two" id="two">2 Subjects</option>
                      </select>
                  </div>
                  <div class="col-md-4">
                      <button name="Add" onclick="addRow()" class="btn btn-primary btn-block">Add</button>
                  </div>
                  </div>
              </div>
          </div>
      <br/><br/>
      <form id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
          <input type="hidden" name="Year" id="year" value="BE"/>
          <input type="hidden" name="Arrangement"  id="Arrangement" value="" title="Arrangement"/>
          <table class="table table-bordered table-condensed">
              <tbody id="table">
              <tr>
                  <th >Date</th>
                  <th >Subject</th>
              </tr>
              </tbody>
          </table>
          <br/><br/>
          <input type="Submit" class="btn btn-primary btn-block"/>
      </form>
      </div>
  </div>
  <script src="timeTable.js"></script>
  <script>
      document.getElementById('Arrangement').value = "";
  </script>
  </body>
</html>
<?php }}?>