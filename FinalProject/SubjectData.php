<?php
session_start();
$conn = mysqli_connect('localhost','root','') or die();
$db = mysqli_select_db($conn,'seatingarrangement');
$yr = $_GET["Year"];
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
   $SemPattern = "[9,10,11,12]";
}
/*
 REGEXP '^[TE].*[2,4,6,8]..$'
*/
$sql = "Select ShortNames from Subject where SubjectCode REGEXP '^[".$_GET["Year"]."].*".$SemPattern."..$'";
$sqlResult = mysqli_query($conn,$sql);
$i=0;
print_r($_GET);
$subject = "subject" . $_GET["subject"];
$department = "department" . $_GET["department"];

if($sqlResult!=false)
{
echo"<select name=".$subject." class=\"form-control\">";
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
