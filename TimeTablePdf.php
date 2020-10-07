<?php

session_start();
// var_dump($_SESSION);exit;
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
require_once('fpdf.php');
require('Db.php');
	// SELECT `Classroom_ID`, `Classroom_Name`, `Available_Seat`, `Assigned_At` FROM `classroom` WHERE 1
$sql = "Select Classroom_ID,Available_Seat from classroom";
$sqlResult = mysqli_query($conn,$sql);
$classRoomsArr=$sqlResult->fetch_all();
foreach ($classRoomsArr as $key => $value) {
	$classRooms[$value[0]]=$value[1];
}
// print_r($classRooms);exit;
class timeTable extends fpdf
{
	var $term;
	var $level;
	var $capacity;
	public function setCapacity($capacity="Deafult"){
		$this->capacity=$capacity;
	}
	public function setTermAndLevel($term="Deafult Term",$level="Default Level"){
		$this->term=$term;
		$this->level=$level;
	}
	function Header()
	{
		$this->SetMargins(3,3,3);
		$this->Ln();
		$this->SetFont('Times','B',24);
		$this->Cell(0,10,"Daffodil International University",0,1,'C');
		$this->SetFont('Times','B',14);
		$this->Cell(0,10,"Department Of Computer Science & Engineering",0,1,'C');
		switch ($GLOBALS['Year']){
			case "SE":
			$GLOBALS['Year']="Level 1";
			break;
			case "TE":
			$GLOBALS['Year']="Level 2";
			break;
			case "BE":
			$GLOBALS['Year']="Level 3";
			break;
		}
		$this->Cell(0,10,"Level-".$this->level." || Term-".$this->term,0,1,'C');
		$this->Cell(0,10,$GLOBALS['Exam'],0,1,'C');
		$this->SetFont('Times','B',12);
		$date = Date("d/m/Y");
	    $this->SetLeftMargin(15);
		$this->Cell(0,10,"Date: $date",0,1,'L');
		// $this->Cell(0,10,"Classroom: ".$GLOBALS['classroomCode'],0,1,'L');
		$this->Ln();
	}

	function Footer()
	{
	$this->SetY(-30);
	$this->	Cell(10,0,"____________________");
	$this->SetX(-(70));
	$this->Cell(0,0,"____________________");
	$this->SetY(-25);
	$this->	Cell(40.2,10,"Exam Controller",0,0,'C');
	$this->SetX(-90);
	$this->Cell(90,10,"Head Of the Department",0,0,'C');
	}
	function SingleDataBlock($Date,$from,$to,$duration,$sub,$class)
	{
		$this->Cell(30,15,"$Date",1,0,'C');
		$this->Cell(30,15,"$from",1,0,'C');
		$this->Cell(30,15,"$to",1,0,'C');
		$this->Cell(30,15,"$duration",1,0,'C');
		$this->Cell(30,15,"$sub",1,0,'C');
		$x = $this->GetX();
		$y = $this->GetY();
		$this->Cell(30,15,"$class",1,0,'C');
		$this->SetY($y+4);
		$this->SetX($x);
		$this->SetFont('Times','',10);
		$this->Cell(30,15,"(".$this->capacity.")",0,0,"C");
		$this->SetY($this->GetY()-4);
		$this->SetX($this->GetX());
		$this->SetFont('Times','',14);
		$this->Ln();
	}

	function DoubleDataBlock($Date,$from1,$to1,$duration1,$sub1,$from2,$to2,$duration2,$sub2)
	{
		$this->Cell(30,20,"$Date",1,0,'C');

		$this->Cell(30,10,"$from1",1,0,'C');
		$this->Cell(30,10,"$to1",1,0,'C');
		$this->Cell(30,10,"$duration1",1,0,'C');
		$this->Cell(30,10,"$sub1",1,0,'C');

		$this->Ln();
		$this->SetX(($this->GetX())+3);

		$this->Cell(30,10,"$from2",1,0,'C');
		$this->Cell(30,10,"$to2",1,0,'C');
		$this->Cell(30,10,"$duration2",1,0,'C');
		$this->Cell(30,10,"$sub2",1,0,'C');

		$this->Ln();

	}

	function Title()
	{
		$this->SetFont('Times','B',14);
		$this->Cell(30,20,"Date",1,0,"C");
		$x = $this->GetX();
		$y = $this->GetY();
		$this->Cell(60,10,"Time",1,0,"C");
		$this->Cell(30,20,"Duration",1,0,"C");
		$this->Cell(30,20,"Subject",1,0,"C");
		$x1 = $this->GetX();
		$y1 = $this->GetY();
		$this->Cell(30,20,"Class",1,0,"C");
		$this->SetY($y+10);
		$this->SetX($x);
		$this->SetFont('Times','I',14);
		$this->Cell(30,10,"From",1,0,"C");
		$this->Cell(30,10,"To",1,0,"C");
		$this->SetY($y1+10);
		$this->SetX($x1);
		$this->SetFont('Times','B',10);
		$this->Cell(30,10,"(Capacity)",0,0,"C");
		$this->SetFont('Times','',14);
		$this->Ln();
	}
}
try {
       // var_dump($_SESSION);exit;

        $DETAILS = $_SESSION['Details'];
        unset($_SESSION['SE']['Arrangement'],$_SESSION['TE']['Arrangement'],$_SESSION['BE']['Arrangement']);
        $TimeTableData  = array('SE' =>$_SESSION['SE'],'TE'=>$_SESSION['TE'],'BE'=>$_SESSION['BE']);
//var_dump($TimeTableData);
        $GLOBALS['Exam'] = $DETAILS['Exam'];
        // $GLOBALS['classroomCode']=$DETAILS['classroomCode'];
        /*$Start1 = $DETAILS['startTime1'];
        $Start2 = $DETAILS['startTime2'];
        $Finish1 = $DETAILS['endTime1'];
        $Finish2 = $DETAILS['endTime2'];
//unset($_SESSION[$_POST['Year']]['Arrangement']);
        $Duration1 = (int)$Finish1 - (int)$Start1;
        $Duration2 = (int)$Finish2 - (int)$Start2;*/
//var_dump($_SESSION);

        	$levelCount=1;//1 for SE(Level 1), 2 for TE(Level 2) .....
        	$level1=$level2=$level3=array();
        	$level1['term1']=
        	$level1['term2']=
        	$level1['term3']=

        	$level2['term1']=
        	$level2['term2']=
        	$level2['term3']=

        	$level3['term1']=
        	$level3['term2']=
        	$level3['term3']=array();

        	$level1['term1']['Arrangement']=
        	$level1['term2']['Arrangement']=
        	$level1['term3']['Arrangement']=

        	$level2['term1']['Arrangement']=
        	$level2['term2']['Arrangement']=
        	$level2['term3']['Arrangement']=

        	$level3['term1']['Arrangement']=
        	$level3['term2']['Arrangement']=
        	$level3['term3']['Arrangement']="";
        foreach ($TimeTableData as $year => $yearTimeTable) {//$year=SE
            try {                
            	$GLOBALS['Year'] = $year;
                unset($_SESSION[$year]['Year']);
            	foreach ($yearTimeTable as $key => $value) {
            		$lt="level{$levelCount}";
            		$ts="term".$value['termVal'];
            		$$lt[$ts]['Arrangement'].=" 1 ";
            		$$lt[$ts][]=array_values($value);
            		// print_r($value);echo PHP_EOL;
            	}
	            $levelCount++;

            } catch (ErrorException $e) {
                //echo $e;
                header('Location:homepage.php');
            }
    }

            	/*echo "---------Term 1-----------";
            	var_dump($term1);
            	echo "---------Term 2-----------";
            	var_dump($term2);
            	echo "---------Term 3-----------";
            	var_dump($term3);*/

            	/*echo "---------Level 1-----------";
            	var_dump($level1);*/
            	/*echo "---------Level 2-----------";
            	var_dump($level2);
            	echo "---------Level 3-----------";
            	var_dump($level3);*/
            	// exit;


}
catch(Exception $e)
{
    header('Location: homepage.php');
}

$tt = new timeTable("P", "mm", "A4");

for ($k=1; $k <= 3; $k++) { //3 level
	for ($ter=1; $ter <=3 ; $ter++) { //3 Term
		generatePageAndTable(${"level{$k}"}["term{$ter}"],$tt,$k);
	}
}

// var_dump($level1['term1']);exit;

function generatePageAndTable(array $infoArray,$tt,$term){
	// var_dump($infoArray);exit;
    $Arrange = explode("  ",trim($infoArray['Arrangement']));
    unset($infoArray['Arrangement']);
	// print_r($infoArray);exit;
    if(!empty($infoArray)){
	    $arrIndex=0;
    	$tt->setTermAndLevel($infoArray[$arrIndex][0], $term);
		$tt->AddPage();
	    $tt->SetLeftMargin(15);
	    $tt->Title();
	    $i = 0;
	    foreach ($Arrange as $value) {
	        //var_dump($yearTimeTable);
	        //var_dump($i);
	        if ($value == 1) {
	            $Dt = $infoArray[$arrIndex][1];//date
	           // echo $Dt."<br/>";
	            $sub = $infoArray[$arrIndex][5];
	            //echo $sub."<br/>";
	            $tt->setCapacity($GLOBALS['classRooms'][$infoArray[$arrIndex][4]]);
	            $tt->SingleDataBlock($Dt, $infoArray[$arrIndex][2], $infoArray[$arrIndex][3], ((int)$infoArray[$arrIndex][3]-(int)$infoArray[$arrIndex][2]), $sub, $infoArray[$arrIndex][4]);
	        }
	        if ($value == 2) {
	            $Dt = $infoArray[$arrIndex][$i++];
	            //echo $Dt."<br/>";
	            $sub1 = $infoArray[$arrIndex][$i++];
	            //echo $sub1."<br/>";
	            $sub2 = $infoArray[$arrIndex][$i++];
	            //echo $sub2."<br/>";
	            $tt->DoubleDataBlock($Dt, $Start1, $Finish1, $Duration1, $sub1, $Start2, $Finish2, $Duration2, $sub2);
	        }
	        $i=0;
	       $arrIndex++;
	    }
    }
}
$tt->output('D','TimeTable.pdf');
$tt->Close();
end;

?>