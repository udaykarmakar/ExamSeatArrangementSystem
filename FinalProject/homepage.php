<?php
/*
 * Unset the session vaariable since it is the first page and the session starts here
 */
session_start();
session_unset();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $_SESSION['Details']=$_POST;
    $str=<<< _alert
<script>
alert('Moving To Prepare TimeTable');
window.location.assign("TimeTableSe.php");
</script>
_alert;
echo $str;
}
else
{
?>
<!doctype html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
    <body style="font-size:12px">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <!--header-->
            <div class="navbar-header">
                <div class="navbar-brand">
                    <h1>SEATING ARRANGEMENT SYSTEM</h1>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="form-group col-md-4 col-md-push-4">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="form1" >
            <div>
                <label>Exam</label> &nbsp;
                <select name="Exam" title="exam" class="form-control">
                    <option value="Unit Test 1" >Mid - Term</option>
                    <option value= "Unit Test 2">Semester Final</option>
                </select><br/>
                <label>Semester</label>
                <select name="Semester" id="sem" title="Semester" class="form-control">
                    <option value= "spring">Spring</option>
                    <option value="summer">Summer</option>
                    <option value="fall">Fall</option>
                </select><br/>
                <label>Year</label>
                <select name="Year" id="year" title="Year" class="form-control">
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                </select><br/>
            </div>
            <div class="row">
                <div id="slot1">
                    <header class="col-md-12"><label>First Slot</label></header>
                    <div class="col-md-6">
                    <label for="startTime1">Start Time:</label><input type="time" name="startTime1" title="startTime1" class="form-control" required /><br/>
                    </div>
                    <div class="col-md-6">
                    <label for="endTime1">End Time:</label><input type="time" name="endTime1" title="endTime1" class="form-control" required/><br/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="slot2">
                    <header class="col-md-12"><label>Second Slot</label></header>
                    <div class="col-md-6">
                        <label for="startTime2">Start Time:</label><input type="time" name="startTime2" title="startTime2" class="form-control" required/><br/>
                    </div>
                    <div class="col-md-6">
                        <label for="endTime2">End Time:</label><input type="time" name="endTime2" title="endTime2" class="form-control" required/><br/>
                    </div>
                </div>
            </div>
            <label for="noClass">Available Class Room</label><input type="number" min="0" max="15" title="noClass" name="noClass" pattern="^[1-15]$" class="form-control" placeholder="0" required/><br/>
            <input type="submit" value="Start" class="form-control btn btn-dark active">
        </form>
        </div>
    </div>
    </body>
</html>
<?php }
?>