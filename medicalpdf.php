<?php

require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['submit']))
    {
    $fir = $_POST['fir'];
	$mid = $_POST['mid'];
	$last = $_POST['last'];
	$phno = $_POST['phno'];
	$emid = $_POST['emid'];
	$lndn = $_POST['lndn'];
	$bthdate = $_POST['bthdate'];
	$a = $_POST['a'];

	$carr = $_POST['carr'];
	$cou = $_POST['cou'];
	$u = $_POST['u'];
	$gr = $_POST['gr'];
	$yr = $_POST['yr'];

	$hs = $_POST['hs'];
	$hsyear = $_POST['hsyear'];
	$hsper = $_POST['hsper'];

	$ss = $_POST['ss'];
	$ssyear = $_POST['ssyear'];
	$ssper = $_POST['ssper'];

	$cname = $_POST['cname'];
	$job1 = $_POST['job1'];
	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];
	$jdl = $_POST['jdl'];

	$cname22 = $_POST['cname22'];
	$job122 = $_POST['job122'];
	$d122 = $_POST['d122'];
	$d222 = $_POST['d222'];
	$jdl22 = $_POST['jdl22'];

	$lang = $_POST['lang'];
	$l2 = $_POST['l2'];
	$l3 = $_POST['l3'];

	$s1 = $_POST['s1'];
	$s2 = $_POST['s2'];
	$s3 = $_POST['s3'];

	$sk1 = $_POST['sk1'];
	$sk2 = $_POST['sk2'];
	$sk3 = $_POST['sk3'];

    }

    $mpdf = new \Mpdf\Mpdf();
	
	//Database connection
	$conn = new mysqli('localhost','root','','test');
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$sql = "INSERT Into medicalresume (fir, mid, last, phno, emid, lndn, bthdate, a, cou, u, gr, yr, hs, hsyear, 
hsper, ss, ssyear, ssper, cname, job1, d1, d2, jdl, cname22, job122, d122, d222, jdl22, lang, l2, l3, s1, s2, s3, sk1, sk2, sk3 )

 values('$fir', '$mid', '$last', '$phno', '$emid', '$lndn','$bthdate', '$a', '$cou', '$u', '$gr', '$yr', '$hs', '$hsyear', '$hsper', '$ss', '$ssyear', '$ssper', '$cname', '$job1', '$d1', '$d2', '$jdl','$cname22', '$job122', '$d122', '$d222', '$jdl22', '$lang', '$l2', '$l3', '$s1', '$s2', '$s3', '$sk1' , '$sk2' , '$sk3')";
		if($conn->query($sql))
		{
			echo "Data entered Sucessfully";


			$query = "SELECT * FROM medicalresume where emid = '$emid'";
			$result = mysqli_query($conn,$query);
			$data = '';
			while($rows = mysqli_fetch_array($result))
			{
				$data.='<h2><strong>Personal Information</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['fir'].' '.$rows['emid'].' '. $rows['last']. '<br/>';
				$data.=$rows['phno'].'<br>';
				$data.=$rows['emid'].'<br>';
				$data.=$rows['bthdate'].'<br>';
				$data.=$rows['a'].'<br>';
				if ($rows['lndn'] != '\0')
				{
					$data.= $rows['lndn'].'<br>';
				}
				$data.='<h2><strong>Education</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['cou'].'<br>';
				$data.=$rows['u'].'<br>';
				$data.=$rows['gr'].'<br>';
				$data.=$rows['yr'].'<br><br>';
				$data.='<h4><strong>HSC Education</strong></h4>'.'<br>';
				$data.=$rows['hs'].'<br>';
				$data.=$rows['hsyear'].'<br>';
				$data.=$rows['hsper'].'<br><br>';
				$data.='<h4><strong>SSC Education</strong></h4>'.'<br>';
				$data.=$rows['ss'].'<br>';
				$data.=$rows['ssyear'].'<br>';
				$data.=$rows['ssper'].'<br>';
				$data.='<h2><strong>Experience</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['cname'].'<br>';
				$data.=$rows['job1'].'<br>';
				$data.=$rows['d1'].' to '.$rows['d2'].'<br>';
				$data.=$rows['jdl'].'<br>';
				if ($rows['coname2'] != '\0')
				{
					$data.= $rows['cname22'].'<br>';
					$data.=$rows['job122'].'<br>';
					//$data.=$rows['d122'].' to '.$rows['d222'].'<br>';
					$data.=$rows['jdl22'].'<br>';
				}
				$data.='<h2><strong>Technical Skills</strong></h2>';
				$data.= '<hr><br/>';
				$data.='o'.'  '.$rows['s1'].'<br>';
				$data.='o'.'  '.$rows['s2'].'<br>';
				$data.='o'.'  '.$rows['s3'].'<br>';
				$data.='<h2><strong>Professtional Skills</strong></h2>';
				$data.= '<hr><br/>';
				$data.='o'.'  '.$rows['sk1'].'<br>';
				$data.='o'.'  '.$rows['sk2'].'<br>';
				$data.='o'.'  '.$rows['sk3'].'<br>';				 
				
			}

			$mpdf->WriteHTML($data);

			$mpdf->Output('medpdf.pdf', 'D');
			
		}
		else
		{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
		
	}

?>