<?php
ob_start();
// var_dump($_SESSION['Details']);exit;
for($i = 0;$i<$_SESSION['Details']['noClass'];$i++)
    unset($_SESSION['class_'.$i]);
require_once('fpdf.php');
$roll1 =array();
$roll2 =array();

class pdf extends fpdf
{
   public $roll1 = array();
   public $roll2 = array();
   function Header()
   {
      $this->SetMargins(2,2,2);
      $this->Ln();
      $this->SetFont('Times','B',24);
      $this->Cell(0,1,"Daffodil International University",0,1,'C');
      $this->SetFont('Times','B',14);
      $this->Cell(0,1,"Department Of Computer Science & Engineering",0,1,'C');
      $this->Cell(0,1,"Seating Arrangement",0,1,'C');
      $this->SetFont('Times','B',12);
      $date = Date("d/m/Y");
      $this->Cell(0,1,"Date: $date",0,1,'C');
      $this->Ln();
   }

   /* Printing Roll No. Together */
   function frontToBack($x,$PreFix1,$PreFix2,$noBench=9)
   {
   	for($i=0;$i<$noBench;$i++)
   	{
         $this->SetY($this->GetY()+1);
   		$this->SetX($x);
         // var_dump(count($this->roll1));
         if(count($this->roll1)==0)
         {
            $this->Cell(2,1," ",1,0,'C');
         }
         else
         {
          $this->Cell(2,1,$PreFix1." ".array_shift($this->roll1),1,0,'C'); 
         }
         if(count($this->roll2)==0)
         {
            $this->Cell(2,1,"",1,0,'C'); 
         }
         else
         {
            $this->Cell(2,1,$PreFix2." ".array_shift($this->roll2),1,0,'C');
         }

   	}
   }

   function BackToFront($x,$PreFix1,$PreFix2,$noBench=8)
   {
   	for($i=0;$i<$noBench;$i++)	
   	{
   	$this->SetX($x);
      if(count($this->roll1)==0)
      {
        $this->Cell(2,1,"",1,0,'C'); 
      }
      else
      {
        $this->Cell(2,1,$PreFix1." ".array_shift($this->roll1),1,0,'C'); 
      }
      if(count($this->roll2)==0)
      {
         $this->Cell(2,1,"",1,0,'C'); 
      }
      else
      {
        $this->Cell(2,1,$PreFix2." ".array_shift($this->roll2),1,0,'C');  
      }
   	$this->SetY($this->GetY()-1);
   	}
   }

   function Footer()
   {
   	$this->SetY(-3);
   	$this->	Cell(10,0,"____________________");
   	$this->SetX(-(6));
   	$this->Cell(0,0,"____________________");
   	$this->SetY(-2);
   	$this->	Cell(4.2,1,"Exam Controller",0,0,'C');
   	$this->SetX(-5.8);
   	$this->Cell(4,1,"Head Of the Department",0,0,'C');
   	
   }
}

function seatAllot($se,$te,$be)
{
   $roomNo =$_SESSION['Details']['noClass'];
   $seSlots = array_chunk(array_keys($se),34);
   $seSlotCount = count($seSlots);
   $sePreFix="SE";
   $teSlots = array_chunk(array_keys($te),34);
   $teSlotCount = count($teSlots);
   $tePreFix="TE";
   $beSlots = array_chunk(array_keys($be),34);
   $beSlotCount = count($beSlots);
   $bePreFix="BE";
   $page = new pdf('P','cm','A4');
   // echo $roomNo;exit;
   $roomNo=102;
   for($i=101;$i<=$roomNo;$i++)
   {
      $page->AddPage('P','A4',0);
      if($i%3 == 0)
      {
      $PreFix1 = $sePreFix;
      $PreFix2 = $tePreFix;
      $page->roll1 = array_shift($seSlots);
      $page->roll2 = array_shift($teSlots);
      $str = "YOU ARE HERE";
          if(count($page->roll1)>0)
              $_SESSION['class_'.$i][]=$PreFix1;
          if(count($page->roll2)>0)
              $_SESSION['class_'.$i][]=$PreFix2;
      $page->SetX(15.5);
      $page->Cell(4,1,$str,0,1,'C');
      $page->frontToBack($x=2,$PreFix1,$PreFix2,9);
      $page->BackToFront($x=6.5,$PreFix1,$PreFix2,8);
      $page->frontToBack($x=11,$PreFix1,$PreFix2,8);
      $page->BackToFront($x=15.5,$PreFix1,$PreFix2,9);
      }
      
      if($i%3 == 1)
      {
      $PreFix1 = $tePreFix;
      $PreFix2 = $bePreFix;
      $page->roll1 = array_shift($teSlots);
      $page->roll2 = array_shift($beSlots); 
      $str = "YOU ARE HERE";
          if(count($page->roll1)>0)
              $_SESSION['class_'.$i][]=$PreFix1;
          if(count($page->roll2)>0)
              $_SESSION['class_'.$i][]=$PreFix2;
      $page->SetX(15.5);
      $page->Cell(4,1,$str,0,1,'C');
      $page->frontToBack($x=2,$PreFix1,$PreFix2,9);
      $page->BackToFront($x=6.5,$PreFix1,$PreFix2,8);
      $page->frontToBack($x=11,$PreFix1,$PreFix2,8);
      $page->BackToFront($x=15.5,$PreFix1,$PreFix2,9);
      }
      
      if($i%3 == 2)
      {
      $PreFix1 = $bePreFix;
      $PreFix2 = $sePreFix;
      $page->roll1 = array_shift($beSlots);
      $page->roll2 = array_shift($seSlots);
      $str = "YOU ARE HERE";
      if(count($page->roll1)>0)
         $_SESSION['class_'.$i][]=$PreFix1;
      if(count($page->roll2)>0)
         $_SESSION['class_'.$i][]=$PreFix2;
      $page->SetX(15.5);
      $page->Cell(4,1,$str,0,1,'C');
      $page->frontToBack($x=2,$PreFix1,$PreFix2,9);
      $page->BackToFront($x=6.5,$PreFix1,$PreFix2,8);
      $page->frontToBack($x=11,$PreFix1,$PreFix2,8);
      $page->BackToFront($x=15.5,$PreFix1,$PreFix2,9);
      }
   }
   $page->Output('D','SeatingArrangement.pdf');
}

?>