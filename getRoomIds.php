<?php 
	session_start();
	require('Db.php');
	// SELECT `Classroom_ID`, `Classroom_Name`, `Available_Seat`, `Assigned_At` FROM `classroom` WHERE 1
$sql = "Select Classroom_ID from classroom";
$sqlResult = mysqli_query($conn,$sql);
if($sqlResult!=false)
{
echo"<select name=termVal{$_GET['classRoomPostfix']}[classRoom".$_GET['classRoomPostfix']."] class=\"form-control\">";
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