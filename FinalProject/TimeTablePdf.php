<?php

session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
require_once('fpdf.php');

class timeTable extends fpdf
{
	function Header()
	{
	$this->SetMargins(3,3,3);
	$this->Ln();
	$this->SetFont('Times','B',24);
	$this->Cell(0,1,"Daffodil International University",0,1,'C');
	$this->SetFont('Times','B',14);
	$this->Cell(0,1,"Department Of Computer Science & Engineering",0,1,'C');
	$this->Cell(0,1,$GLOBALS['Year'],0,1,'C');
	$this->Cell(0,1,$GLOBALS['Exam'],0,1,'C');
	$this->SetFont('Times','B',12);
	$date = Date("d/m/Y");
	$this->Cell(0,1,"Date: $date",0,1,'L');
	$this->Ln();
	}

	function Footer()
	{
	$this->SetY(-3);
	$this->	Cell(10,0,"____________________");
	$this->SetX(-(9));
	$this->Cell(0,0,"____________________");
	$this->SetY(-2);
	$this->	Cell(4.2,1,"Professor incharge",0,0,'C');
	$this->SetX(-9);
	$this->Cell(4,1,"HOD",0,0,'C');
	}
	function SingleDataBlock($Date,$from,$to,$duration,$sub)
	{
		$this->Cell(3,1,"$Date",1,0,'C');
		$this->Cell(3,1,"$from",1,0,'C');
		$this->Cell(3,1,"$to",1,0,'C');
		$this->Cell(3,1,"$duration",1,0,'C');
		$this->Cell(3,1,"$sub",1,0,'C');
		$this->Ln();
	}

	function DoubleDataBlock($Date,$from1,$to1,$duration1,$sub1,$from2,$to2,$duration2,$sub2)
	{
		$this->Cell(3,2,"$Date",1,0,'C');

		$this->Cell(3,1,"$from1",1,0,'C');
		$this->Cell(3,1,"$to1",1,0,'C');
		$this->Cell(3,1,"$duration1",1,0,'C');
		$this->Cell(3,1,"$sub1",1,0,'C');

		$this->Ln();
		$this->SetX(($this->GetX())+3);

		$this->Cell(3,1,"$from2",1,0,'C');
		$this->Cell(3,1,"$to2",1,0,'C');
		$this->Cell(3,1,"$duration2",1,0,'C');
		$this->Cell(3,1,"$sub2",1,0,'C');

		$this->Ln();

	}

	function Title()
	{
	$this->SetFont('Times','B',14);
	$this->Cell(3,2,"Date",1,0,"C");
	$x = $this->GetX();
	$y = $this->GetY();
	$this->Cell(6,1,"Time",1,0,"C");
	$this->Cell(3,2,"Duration",1,0,"C");
	$this->Cell(3,2,"Subject",1,0,"C");
	$this->SetY($y+1);
	$this->SetX($x);
	$this->SetFont('Times','I',14);
	$this->Cell(3,1,"From",1,0,"C");
	$this->Cell(3,1,"To",1,0,"C");
	$this->Ln();
	}
}
try {
     //   var_dump($_SESSION);

        $DETAILS = $_SESSION['Details'];
        $TimeTableData  = array('SE' =>$_SESSION['SE'],'TE'=>$_SESSION['TE'],'BE'=>$_SESSION['BE']);
//var_dump($TimeTableData);
        $GLOBALS['Exam'] = $DETAILS['Exam'];
        $Start1 = $DETAILS['startTime1'];
        $Start2 = $DETAILS['startTime2'];
        $Finish1 = $DETAILS['endTime1'];
        $Finish2 = $DETAILS['endTime2'];
//unset($_SESSION[$_POST['Year']]['Arrangement']);
        $Duration1 = $Finish1 - $Start1;
        $Duration2 = $Finish2 - $Start2;
//var_dump($_SESSION);

        $tt = new timeTable("P", "cm", "A4");
        foreach ($TimeTableData as $year => $yearTimeTable) {
            try {
                $GLOBALS['Year'] = $year;
                unset($_SESSION[$year]['Year']);
                //	var_dump($_SESSION[$year]["Arrangement"]);
                $Arrange = explode("  ",trim($_SESSION[$year]['Arrangement']));
                unset($yearTimeTable['Arrangement']);
                $yearTimeTable = array_values($yearTimeTable);
                $tt->AddPage();
                $tt->Title();
                $i = 0;
                foreach ($Arrange as $value) {
                    //var_dump($yearTimeTable);
                    //var_dump($i);
                    if ($value == 1) {
                        $Dt = $yearTimeTable[$i++];
                       // echo $Dt."<br/>";
                        $sub = $yearTimeTable[$i++];
                        //echo $sub."<br/>";
                        $tt->SingleDataBlock($Dt, $Start1, $Finish1, $Duration1, $sub);
                    }
                    if ($value == 2) {
                        $Dt = $yearTimeTable[$i++];
                        //echo $Dt."<br/>";
                        $sub1 = $yearTimeTable[$i++];
                        //echo $sub1."<br/>";
                        $sub2 = $yearTimeTable[$i++];
                        //echo $sub2."<br/>";
                        $tt->DoubleDataBlock($Dt, $Start1, $Finish1, $Duration1, $sub1, $Start2, $Finish2, $Duration2, $sub2);
                    }
                }
            } catch (ErrorException $e) {
                //echo $e;
                header('Location:homepage.php');
            }
    }
}
catch(Exception $e)
{
    header('Location: homepage.php');
}
$tt->output('D','TimeTable.pdf');
$tt->Close();
end;

?>