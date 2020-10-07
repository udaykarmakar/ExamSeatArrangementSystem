<?php
ob_start();
session_start();
// var_dump($_SESSION);exit;
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
require('seatAllot.php');
$seDefaulter = explode(",",trim($_SESSION['seDefaulter']));
$teDefaulter =  explode(",",trim($_SESSION['teDefaulter']));
$beDefaulter = explode(",",trim($_SESSION['beDefaulter']));

$se = array();
$seName = array();
$te = array();
$teName = array();
$be = array();
$beName = array();

$conn = mysqli_connect('localhost','root','') or die();
$db = mysqli_select_db($conn,'seatingarrangement');

$sqlSE = "Select `Roll_No`,CONCAT(`first_name`,\" \", `last_name`) from `secondyear` where `Roll_No` not in (".$_SESSION['seDefaulter'].")";
$sqlTE = "Select `Roll_No`,CONCAT(`first_name`,\" \", `last_name`) from `thirdyear` where `Roll_No` not in (".$_SESSION['teDefaulter'].")";
$sqlBE = "Select `Roll_No`,CONCAT(`first_name`,\" \", `last_name`)from `fourthyear` where `Roll_No` not in (".$_SESSION['beDefaulter'].")";

$sqlResult1 = mysqli_query($conn,$sqlSE);
$sqlResult2 = mysqli_query($conn,$sqlBE);
$sqlResult3 = mysqli_query($conn,$sqlTE);

if($sqlResult1!=false)
{
while ($row = mysqli_fetch_array($sqlResult1)) {
$seName[$row[0]]=$row[1];
}
}
else
echo"Error in Fetching data";

if($sqlResult3!=false)
{
while ($row = mysqli_fetch_array($sqlResult3))
{
$teName[$row[0]]=$row[1];
}
}
else
echo"Error in Fetching data";


if($sqlResult2!=false)
{
 while ($row = mysqli_fetch_array($sqlResult2))
 {
   $beName[$row[0]]=$row[1];
 }
}
else
echo"Error in Fetching data";  
mysqli_close($conn);
$seSlots = array_chunk($seName,34);
$teSlots = array_chunk($teName,34);
$beSlots = array_chunk($beName,34);
seatAllot($seName,$teName,$beName);
?>
