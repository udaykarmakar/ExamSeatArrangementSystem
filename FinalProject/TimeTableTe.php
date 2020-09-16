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
            $_SESSION['TE'] = $_POST;
            unset($_SESSION['TE']['Year']);
            $str = <<< end
<script>
window.location.assign("TimeTableBe.php");
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
                <title>Time Table: Level 2</title>
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
                <div class="container-fluid">
                    <!--header-->
                    <div class="navbar-header">
                        <img src="https://daffodilvarsity.edu.bd/template/images/diulogoside.png" style="max-width:150px"/>
                        <a href="homepage.php" class="navbar-brand" style="font-size:25px">EXAM SEATING ARRANGEMENT SYSTEM</a>
                    </div>
                </div>
            </nav>
            <section>
                <div class="container">
                        <div class="col-md-6 col-md-push-3">
                            <div class="row">
                                <header>
                                <p style="padding:20px; font-size:30px">Time Table: Level 2 (Term 1, 2, & 3)</p>
                                </header>
                            </div>
                        <div class="row">
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
                                    <button name="Add" onclick="addRow()" class="btn btn-dark btn-block" style="font-size:12px">Add</button>
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
                                    <select name="RowCount" title="RowCount" class="form-control" style="font-size:12px">
                                        <option value="One" id="one">Level 2 : Term 1</option>
                                        <option value="two" id="two">Level 2 : Term 2</option>
                                        <option value="three" id="three">Level 2 : Term 3</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button name="Add" onclick="addRow()" class="btn btn-dark btn-block" style="font-size:12px">Add</button>
                                </div>
                            </div>
                        </div>
                    <form id="form2" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <br/>
                        <input type="hidden" name="Year" id="year" value="TE"/>
                        <input type="hidden" name="Arrangement" id="Arrangement" value="" title="Arrangement"/>
                        <table class="table table-bordered table-condensed">
                            <tbody id="table" style="font-size:12px">
                            <tr>
                                <th>Date</th>
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
            <?php
        }
    }
    ?>