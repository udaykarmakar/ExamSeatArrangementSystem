<?php
session_start();
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['SE'] = $_POST;
        unset($_SESSION['SE']['Year']);
        $str =<<<end
<script>
alert('TimeTable For Second Year Is Set');
window.location.assign("TimeTableTe.php");
</script>
end;
        echo $str;
    }
    else
        {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Time Table of Departments</title>
            <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </head>
        <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <!--header-->
                <div class="navbar-header">
                    <a href="homepage.php" class="navbar-brand">SEATING ARRANGEMENT SYSTEM</a>
                </div>

            </div>
        </nav>
        <div class="container-fluid">
            <div class="col-md-6 col-md-push-3">
                <div class="row">
                    <header>
                        <h1 style="font-size:30px">Time Table of Departments</h1>
                    </header>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="Add">Select Subjects</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select name="RowCount" title="RowCount" class="form-control">
                            <option value="one" id="one">1 Subject</option>
                            <option value="two" id="two">2 Subjects</option>
                            <option value="three" id="three">3 Subjects</option>
                            <option value="four" id="four">4 Subjects</option>
                            <option value="five" id="five">5 Subjects</option>
                            <option value="six" id="six">6 Subjects</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="Add">Select Department</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select name="Dept" title="Dept" class="form-control">
                            <option value="BBA" id="BBA">Bachelor of Business Administration (BBA)</option>
                            <option value="BBS" id="BBS">Bachelor of Business Studies (BBS)</option>
                            <option value="BRE" id="BRE">Bachelor of Real Estate (BRE)</option>
                            <option value="BTHM" id="BTHM">Bachelor of Tourism & Hospitality Management (BTHM)</option>
                            <option value="BE" id="BE">Bachelor of Innovation & Entrepreneurship (BE)</option>
                            <option value="CSE" id="CSE">B.Sc. in Computer Science & Engineering (CSE)</option>
                            <option value="CIS" id="CIS">B.Sc. in Computing & Information System (CIS)</option>
                            <option value="SWE" id="SWE">B.Sc. in Software Engineering (SWE)</option>
                            <option value="ESDM" id="ESDM">B.Sc. in Environmental Science and Disaster Management (ESDM)</option>
                            <option value="MCT" id="MCT">B.Sc. in Multimedia & Creative Technology (MCT)</option>
                            <option value="GED" id="GED">B.Sc. in General Educational Development (GED)</option>
                            <option value="ITM" id="ITM">B.Sc. in Information Technology & Management (ITM)</option>
                            <option value="ETE" id="ETE">B.Sc. in Electronics & Telecommunication Engineering (ETE)</option>
                            <option value="TE" id="TE">B.Sc. in Textile Engineering (TE)</option>
                            <option value="EEE" id="EEE">B.Sc. in Electrical & Electronic Engineering (EEE)</option>
                            <option value="B.Arch" id="B.Arch">B.Sc. in Architecture (B. Arch)</option>
                            <option value="CE" id="CE">Department of Civil Engineering (CE)</option>
                            <option value="Hons" id="Hons">Bachelor of Pharmacy (Hons)</option>
                            <option value="NFE" id="NFE">B.Sc. in Nutrition & Food Engineering (NFE)</option>
                            <option value="BAE" id="BAE">Bachelor of Arts (Hons) in English</option>
                            <option value="LLB" id="LLB">Bachelor of Law (Hons)(LLB)</option>
                            <option value="BJMC" id="BJMC">BSS (Hons) in Journalism & Mass Communication</option>
                            <option value="MBA" id="MBA">Master of Business Administration (MBA)(Regular)</option>
                            <option value="MBAE" id="MBAE">Master of Business Administration (MBA)(Executive)</option>
                            <option value="MCSE" id="MCSE">M.Sc. in Computer Science & Engineering (CSE)</option>
                            <option value="MIS" id="MIS">M.Sc.in Management Information System (MIS)</option>
                            <option value="MSWE" id="MSWE">M.Sc. in Software Engineering (SWE)</option>
                            <option value="METE" id="METE">M.Sc. in Electronics & Telecommunication Engineering (ETE)</option>
                            <option value="MTE" id="MTE">M.Sc. in Textile Engineering (TE)</option>
                            <option value="MPH" id="MPH">Master of Public Health (MPH)</option>
                            <option value="MPHARM" id="MPHARM">Master of Pharmacy</option>
                            <option value="MAE" id="MAE">Master of Arts in English</option>
                            <option value="LLM" id="LLM">Master of Law (LLM)</option>
                            <option value="MJMC" id="MJMC">MSS in Journalism & Mass Communication</option>
                            <option value="PGDISL" id="PGDISL">Post Graduate Diploma in Information Science and Library Management</option>
                            
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button name="Add" onclick="addRow()" class="btn btn-primary btn-dark">Add</button>
                    </div>
                </div>
                
            </div>
            <form id="form1" method="post" class="form-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <br/>
                <input type="hidden" name="Year" id="year" value="SE"/>
                <input type="hidden" name="Arrangement" id="Arrangement" value="" title="Arrangement"/>
                <table class="table table-bordered table-condensed">
                    <tbody id="table">
                    <tr>
                        <th>Date</th>
                        <th>Department</th>
                        <th>Subject</th>
                    </tr>
                    </tbody>
                </table>
                <br/><br/>
                <input type="Submit" class="btn btn-dark btn-block"/>
            </form>
            </div>
        </div>
        <script src="timeTable.js"></script>
        <script>
            document.getElementById('Arrangement').value = "";
        </script>
        </body>
        </html>
    <?php }
}?>