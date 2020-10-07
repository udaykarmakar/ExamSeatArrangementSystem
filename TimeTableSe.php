<?php
session_start();
        // var_dump($_SESSION);
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['SE'] = $_POST;
        unset($_SESSION['SE']['Year']);
        // var_dump($_SESSION);exit;
        $str =<<<end
<script>
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
            <title>Time Table: Level 1</title>
                <?php include('head.php'); ?>
        </head>
        <body>
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <!--header-->
                <div class="navbar-header">
                <img src="dist/img/diulogoside.png" style="max-width:150px"/>
                    <a href="homepage.php" class="navbar-brand" style="font-size:25px">EXAM SEATING ARRANGEMENT SYSTEM</a>
                </div>

            </div>
        </nav>
        <section>
            <div class="container">
                <div class="col-md-8 col-md-push-2">
                    <div class="row">
                        <header>
                            <p style="padding:20px; font-size:30px">Time Table: Level 1 (Term 1, 2, & 3)</p>
                        </header>
                    </div>
                <div class="row" style="display: none;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="Add">Add Subjects</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select name="RowCount" title="RowCount" class="form-control" style="font-size:12px">
                                <option value="One" id="one">1 Subject</option>
                                <option value="two" id="two">2 Subjects</option>
                                <option value="three" id="three">3 Subjects</option>
                                <option value="four" id="four">4 Subjects</option>
                                <option value="five" id="five">5 Subjects</option>
                                <option value="six" id="six">6 Subjects</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <!-- <button name="Add" onclick="addRow()" class="btn btn-dark btn-block" style="font-size:12px">Add</button> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="Add">Select Term</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select id="termId" name="RowCount" title="RowCount" class="form-control" style="font-size:12px">
                                <option value="One" id="one">Level 1 : Term 1</option>
                                <option value="two" id="two">Level 1 : Term 2</option>
                                <option value="three" id="three">Level 1 : Term 3</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button name="Add" onclick="addRow()" class="btn btn-dark btn-block" style="font-size:12px">Add</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="programId" value="<?php echo $_SESSION['Details']['Exam']=="Day_Program"?1:2; ?>" >
                <input type="hidden" id="levelId" value="1" >
                <form id="form1" method="post" class="form-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <br/>
                    <input type="hidden" name="Year" id="year" value="SE"/>
                    <input type="hidden" name="Arrangement" id="Arrangement" value="" title="Arrangement"/>
                    <table class="table table-bordered table-condensed">
                        <tbody id="table" style="font-size:12px">
                        <tr>
                            <th>Term</th>
                            <th>Date</th>
                            <th>Time Start</th>
                            <th>Time End</th>
                            <th>Room</th>
                            <th>Subject</th>
                        </tr>
                        </tbody>
                    </table>
                    <br/><br/>
                    <input type="Submit" class="btn btn-dark btn-block" style="font-size:12px"/>
                </form>
                </div>
            </div>
        </section>
        <script src="timeTable.js"></script>
        <script>
            document.getElementById('Arrangement').value = "";
        </script>
        </body>
        </html>
    <?php }
}?>