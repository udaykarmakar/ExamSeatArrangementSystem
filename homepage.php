<?php
/*
 * Unset the session vaariable since it is the first page and the session starts here
 */
session_start();
session_unset();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $_SESSION['Details']=$_POST;
    $_SESSION['Details']['noClass']='101';
    $str=<<< _alert
<script>
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
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="custom.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Home Page</title>
                <?php include('head.php'); ?>
</head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container-fluid">
            <!--header-->
            <div class="navbar-header">
                <img src="dist/img/diulogoside.png" style="max-width:150px"/>
                <div class="navbar-brand">
                    <h1>EXAM SEATING ARRANGEMENT SYSTEM</h1>
                </div>
            </div>
        </div>
    </nav>
    <section>
    
    <div class="container">
    <p style="margin:auto; font-optical-sizing:auto; position:relative; text-align: center; padding:20px; font-size:xx-large;">Department of Computer Science & Engineering</p>
<!--        <div class="row">-->
<!--        <header class="col-md-6 col-md-push-3">-->
<!--            <h1>SEATING ARRANGEMENT SYSTEM</h1>-->
<!--        </header>-->
<!--        </div>-->
        <div class="form-group col-md-4 col-md-push-4">
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="form1">
            <div>
                
                <label>Program</label> &nbsp;
                <select name="Exam" title="exam" class="form-control" style="font-size:12px">
                    <option value="Day_Program">Day Program</option>
                    <option value= "Evening_Program">Evening Program</option>
                    <option value= "Masters_Program">Masters Program</option>
                </select><br/>
                <label>Semester</label>
                <select name="Semester" id="sem" title="Semester" class="form-control" style="font-size:12px">
                    <option value="spring">Spring Semester</option>
                    <option value= "summer">Summer Semester</option>
                    <option value= "fall">Fall Semester</option>
                </select><br/>
                <label>Year</label>
                <select name="SemYear" id="SemYear" title="SemYear" class="form-control" style="font-size:12px">
                    <option value= "2020">2020</option>
                    <option value= "2021">2021</option>
                    <option value= "2022">2022</option>
                    <option value= "2023">2023</option>
                    <option value= "2024">2024</option>
                    <option value= "2025">2025</option>
                    <option value= "2026">2026</option>
                    <option value= "2027">2027</option>
                    <option value= "2028">2028</option>
                    <option value= "2029">2029</option>
                    <option value= "2030">2030</option>
                    <option value= "2030">2031</option>
                </select><br/>
            </div>
            <div class="row" style="display: none;">
                <div id="slot1">
                    <header class="col-md-12"><label>First Slot</label></header>
                    <div class="col-md-6">
                    <label for="startTime1">Start Time:</label><input type="time" name="startTime1" title="startTime1" class="form-control" style="font-size:12px"/><br/>
                    </div>
                    <div class="col-md-6">
                    <label for="endTime1">End Time:</label><input type="time" name="endTime1" title="endTime1" class="form-control" style="font-size:12px"/><br/>
                    </div>
                </div>
            </div>
            <div class="row" style="display: none;">
                <div id="slot2">
                    <header class="col-md-12"><label>Second Slot</label></header>
                    <div class="col-md-6">
                        <label for="startTime2">Start Time:</label><input type="time" name="startTime2" title="startTime2" class="form-control" style="font-size:12px"/><br/>
                    </div>
                    <div class="col-md-6">
                        <label for="endTime2">End Time:</label><input type="time" name="endTime2" title="endTime2" class="form-control" style="font-size:12px"/><br/>
                    </div>
                </div>
            </div>
            <label style="display: none;">
                <label for="noClass">Available Class Room</label><br>
                <input type="checkbox" name="classroomCode" value="DT-101" checked>
                <label for="DT-101"> DT-101</label><br>
                <input type="checkbox" name="classroomCode" value="DT-102" checked>
                <label for="DT-102"> DT-102</label><br>
                <input type="checkbox" name="classroomCode" value="DT-103">
                <label for="DT-103"> DT-103</label><br>
                <input type="checkbox" name="classroomCode" value="DT-104">
                <label for="DT-104"> DT-104</label><br>
                <input type="checkbox" name="classroomCode" value="DT-105">
                <label for="DT-105"> DT-105</label><br>
                <input type="checkbox" name="classroomCode" value="DT-106">
                <label for="DT-106"> DT-106</label><br>
            </label>
            <input type="submit" value="Start" class="form-control btn btn-dark" style="font-size:12px">
        </form>
        </div>
    </div>
    </section>
    </body>
</html>
<?php }
?>