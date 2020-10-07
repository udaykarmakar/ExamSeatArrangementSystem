<?php
session_start();
require('Db.php');
$Sem = $_SESSION['Details']["Semester"];
$SemPattern;
if($Sem =="spring")
{
   $SemPattern = "[1,2,3,4]";
}
if($Sem == "summer")
{
   $SemPattern = "[5,6,7,8]";
}
if($Sem == "fall")
{
   $SemPattern = "[8,9,10,11,12]";
}

/*
 REGEXP '^[TE].*[2,4,6,8]..$'
*/
 // SELECT `SubjectCode`, `Name`, `ShortNames`, `program_ID`, `level_ID`, `term_ID`, `Lecturer_Id` FROM `subject` WHERE 1
$sql = "Select ShortNames from subject where program_ID='".$_GET['program']."' AND level_ID='".$_GET['level']."' AND term_ID='".$_GET['term']."'";
$sqlResult = mysqli_query($conn,$sql);
$i=0;
$subject = "subject" . $_GET["subject"];

if($sqlResult!=false)
{
echo"<select name=termVal{$_GET['subject']}[".$subject."] class=\"form-control\">";
 while ($row = mysqli_fetch_array($sqlResult)) {
print <<<end
<option value="$row[0]">$row[0]</option>
end;
}
echo"</select>";  
}

else
echo"Error in Fetching data";

mysqli_close($conn);
?>
