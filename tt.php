<?php
   session_start();
   $DateSe=$DateTe=$DateBe=array();
     // var_dump($_SESSION);
      $classVector = array_splice($_SESSION,4);
      //arrayClass
      // var_dump($classVector);
      //se
    $seTimeTable = $_SESSION['SE'];
    // var_dump($seTimeTable);
    $slot = explode("  ",trim(array_shift($seTimeTable)));
    // var_dump($slot);
    foreach ($slot as $s)
    {
        $dateD =array_shift($seTimeTable);
        for($i = 1;$i<=$s;$i++)
        {
            $DateSe[$dateD][] = array_shift($seTimeTable);
        }
    }
    // var_dump($DateSe);

$teTimeTable = $_SESSION['TE'];
// var_dump($seTimeTable);
$slot = explode("  ",trim(array_shift($teTimeTable)));
// var_dump($slot);
foreach ($slot as $s)
{
    $dateD =array_shift($teTimeTable);
    for($i = 1;$i<=$s;$i++)
    {
        $DateTe[$dateD][] = array_shift($teTimeTable);
    }
}
// var_dump($DateTe);

$beTimeTable = $_SESSION['BE'];
// var_dump($beTimeTable);
$slot = explode("  ",trim(array_shift($beTimeTable)));
// var_dump($slot);
foreach ($slot as $s)
{
    $dateD =array_shift($beTimeTable);
    for($i = 1;$i<=$s;$i++)
    {
        $DateBe[$dateD][] = array_shift($beTimeTable);
    }
}
// var_dump($DateBe);


	error_reporting( E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING );

	
	
	$tt; 
	
	//echo "Subject codes<br><br>SE<br>21.MathsIV 22.CN 23.COA 24.AT 25.WP 26.ITC<br><br>TE<br>31.ST 32.DS 33.SWS 34.DMBI 35.AIT<br><br>BE<br>41.SNMR 42.BDS 43.CSM 44.elective<br><br>";
		
	$tt[0][0][0]=$_POST["SUB21"];
	$tt[0][0][1]=$_POST["SUB22"];
	$tt[0][1][0]=$_POST["SUB23"];
	$tt[0][1][1]=$_POST["SUB24"];
	$tt[0][2][0]=$_POST["SUB25"];
	$tt[0][2][1]=$_POST["SUB26"];

	$tt[1][0][0]=$_POST["SUB31"];
	$tt[1][0][1]=$_POST["SUB32"];
	$tt[1][1][0]=$_POST["SUB33"];
	$tt[1][1][1]=$_POST["SUB34"];
	$tt[1][2][0]=$_POST["SUB35"];
	$tt[1][2][1]=0;

	$tt[2][0][0]=$_POST["SUB41"];
	$tt[2][0][1]=$_POST["SUB42"];
	$tt[2][1][0]=$_POST["SUB43"];
	$tt[2][1][1]=$_POST["SUB44"];
	$tt[2][2][0]=0;
	$tt[2][2][1]=0;
	

	/*$var=21;
	//print_r($var);

		for($j=0;$j<3;$j++) 
		{
			for($k=0;$k<2;$k++)
			{
				$tt[0][$j][$k]=$var++;
			}
		}
	$var=31;
		for($j=0;$j<3;$j++)  // the for loop will run 5 times ie number of subjects for TE since TE has 5 subjects, output:-31 32 33 34 35
		{
			for($k=0;$k<2;$k++)
			{
				if($var<36)
				{
				$tt[1][$j][$k]=$var++;
				}
				else
				{
					$tt[1][$j][$k]=0;
				}
			}
		}
	$var=41;
	for($j=0;$j<3;$j++)
		{
				
			for($k=0;$k<2;$k++) // the for loop will run 4 times ie number of subjects for BE since BE has 4 subjects ,output:-41 42 43 44
			{
				if($var<45)
				{
					$tt[2][$j][$k]=$var++;
				}
				else
				{
					$tt[2][$j][$k]=0; // the array is of size 6 so if the year doesnt have less than 6 subjects than we initialize those part of array as 0
				}
			}
		}*/
	/*for($i=0;$i<3;$i++)    //we have 3 years ie SE TE BE
	{
		printf("<br>for year : %d<br>",$i+2);
		for($j=0;$j<3;$j++)  // Three classes ie IT CLASSROOM-2 IT CLASSROOM-3  IT CLASSROOM -4
		{
			printf("Day %d: ",$i+1);	
			for($k=0;$k<2;$k++)
			{	
					printf("%d ",$tt[$i][$j][$k]);	//two sessions of paper ie morning and afternoon
			}
				printf("<br>");	
		}
	}*/
	
	
	class teacher  //teacher struct to store name and subject
	{
		public $name;
		public $sub;
	};
	$n;
	$v;
	$te[] = new teacher;
	
	$yearinclass;
	
	$yearinclass[0][0]=$_POST["class11"];
	$yearinclass[0][1]=$_POST["class12"];
	$yearinclass[1][0]=$_POST["class21"];
	$yearinclass[1][1]=$_POST["class22"];
	$yearinclass[2][0]=$_POST["class31"];
	$yearinclass[2][1]=$_POST["class32"];
	
	$total=30;
	
	

	$lectures;
	$k=0;$j=0;
	for($i=0;$i<10;$i++)
	{

	
		if($i==0)
		{
		$te[$i]->name="Prof. Dr. Syed Akhter Hossain";
		$te[$i]->sub[0]="43";
		$te[$i]->sub[1]="31";
		}
		if($i==1)
		{
		$te[$i]->name="Dr. Sheak Rashed Haider Noori";

		$te[$i]->sub[0]="26";
		$te[$i]->sub[1]="33";
		}
		if($i==2)
		{
		$te[$i]->name="Dr. Md. Mustafizur Rahman";
		$te[$i]->sub[0]="22";
		$te[$i]->sub[1]="34";
		}
		if($i==3)
		{
		$te[$i]->name="Dr. S. M. Aminul Haque";
		$te[$i]->sub[0]="41";
		$te[$i]->sub[1]="0";
		}
		if($i==4)
		{
		$te[$i]->name="Professor Dr. Md. Ismail Jabiullah";
		$te[$i]->sub[0]="25";
		$te[$i]->sub[1]="0";
		}
		if($i==5)
		{
		$te[$i]->name="Dr. S.R.Subramanya";
		$te[$i]->sub[0]="35";
		$te[$i]->sub[1]="0";
		}
		if($i==6)
		{
		$te[$i]->name="Dr. Neil Perez Balba";
		$te[$i]->sub[0]="42";
		$te[$i]->sub[1]="32";
		}
		if($i==7)
		{
		$te[$i]->name= "Dr. Bibhuti Roy";
		$te[$i]->sub[0]="24";
		$te[$i]->sub[1]= "44" ;
		}
		if($i==8)
		{
		$te[$i]->name="Mr. Anisur Rahman";
		$te[$i]->sub[0]="31";
		$te[$i]->sub[1]="0";
		}
		if($i==9)
		{
		$te[$i]->name="Mr. Gazi Zahirul Islam";
		$te[$i]->sub[0]="21";
		$te[$i]->sub[1]="0";
		}
			
			if($te[$i]->sub[0]==0 || $te[$i]->sub[1]==0) //for teacher having only one subject
			{
			 // the first four will get 4 duties
				
				$lectures[$i]=5;
				$total=$total-5;
				$k++;
				
			}
			else
			{
				if($j<4) // the first four will get 2 duties
				{
					$lectures[$i]=2;
					$total=$total-2;
					$j++;
				}
				else // fifth will get 1 duty
				{
					$lectures[$i]=1;
					$total=$total-1;
					$j++;
				}
			}
			
	}
	/*printf("<br> total = %d<br>",$total);
	for($i=0;$i<10;$i++)
	{
		printf("name : %s<br> duties: %d",$te[$i]->name,$lectures[$i]);//this simply prints the teachers name and number of duties assigned to it for cross check
		printf("<br><br>")	;
	}
	printf("<br><br><br><br>")	;
	$l=0;$flag=0;$x;$y;$z;$m;
	$subjectinclass; */
	
	for($i=0;$i<3;$i++) //automated version of above
	{
		for($j=0;$j<3;$j++)
		{
			for($k=0;$k<2;$k++)
			{
				for($m=0;$m<2;$m++)
				{
					$l=$yearinclass[$j][$m];
					$l=$l-2;
					$x=$tt[$l][$i][$k];
					$subjectinclass[$i][$j][$k][$m]=$x;
					/*printf("subjectinclass[%d][%d][%d][%d]=%d<br>",$i,$j,$k,$m,$subjectinclass[$i][$j][$k][$m]);*/
				}
			}
		}
	}
	
	$teacherinclass; //an array to store  the teacher assigned to each class.3 days, 3 class, 2 papers,2 duties per paper
	$total=30; 
	$l=0;//l is used to repeat the teacher structure
	$year;
	//printf("works<br><br>")	;
	for($i=0;$i<3;$i++)
	{
		
		for($j=0;$j<3;$j++)
		{
			for($k=0;$k<2;$k++)
			{
				for($m=0;$m<2;$m++)
				{
					$flag=0; 
					do
					{
						if($l==10)
						{
							$l=0;
						}
						else if($subjectinclass[$i][$j][$k][$m] ==0)//if this condtion is true then it means the class has no subject hence we can skip the assignment for this class
						{
							$teacherinclass[$i][$j][$k][$m]=100;// a random number is assigned so that we can later skip it during printing
		
							$flag=1;
						}
						else if($lectures[$l]==0)//if number of duties left for the teacher is 0 then go to the next teacher
						{
							$l++;
						}
						else if($subjectinclass[$i][$j][$k][$m]!=$te[$l]->sub[0] && $subjectinclass[$i][$j][$k][$m]!=$te[$l]->sub[1] && $lectures[$l]!=0) 
						{
							$teacherinclass[$i][$j][$k][$m]=$l;//the teacher is assigned for that subject
							$lectures[$l]--;// duties for that teacher is removed by 1
							$l++;
							
							$flag=1;//since teacher is assigned flag is set 1 to get out of the loop
						}
						else//if no condition is satisfied we jump to the next teacher
						{
							$l++;
						}
					}while($flag==0);	//loop will run till teacher is not assigned ie flag=0
				}
			}			
		}
	}
	//printf("<br>works<br><br>")	;
	echo "<table border =\"1\" style='border-collapse: collapse;width:80%;margin-left:10%;height:50%;text-align: center;'>"; 
	echo "<tr> \n";
	echo "<th> </td>\n";
	echo "<th colspan='2'>DT 101</td> \n";
	echo "<th colspan='2'>DT 102</td> \n";
	echo "<th colspan='2'>DT 103</td> \n";
	echo "</tr> \n";
	
	for($i=0;$i<3;$i++)
	{
		
		$lk=$i+1;
					echo "<tr> ";
	
				echo "<th >Roster $lk</th> ";
		
		
			
	
		for($j=0;$j<3;$j++)
		{ 
		
			
		
			for($k=0;$k<2;$k++)
			{
				
					echo "<td>";
				
				for($m=0;$m<2;$m++)	
				{
					
					
					$l=$teacherinclass[$i][$j][$k][$m];
					
					if($l!=100)
					{	$z=$te[$l]->name;
						echo " $z,";
					}
					else
					{
						echo " ";
					}
					;
					
				}
				;
				
				
			};
			
			
			
		};echo "</tr>";
		
	};echo "</table>";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br>
<center><button onclick="window.print()">PRINT</button></center>
</body>
</html>