<?php 
class Db{
    private $db = "seatingarrangement";
    public function getCon(){
	    $conn=mysqli_connect('localhost','root','', 'seatingarrangement') or die('Something Wrong!');
	    return $conn;
    }
}
$conn=(new Db)->getCon();
?>