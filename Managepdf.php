<?php

require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['submit']))
    {
    $ffname = $_POST['ffname'];
	$miame = $_POST['miame'];
	$laname = $_POST['laname'];
	$phnumber = $_POST['phnumber'];
	$emailid = $_POST['emailid'];
	$lndin = $_POST['lndin'];
	$bdate = $_POST['bdate'];
	$addrss = $_POST['addrss'];

	$courname = $_POST['courname'];
	$univer = $_POST['univer'];
	$grades = $_POST['grades'];
	$year = $_POST['year'];

	$h = $_POST['h'];
	$hyear = $_POST['hyear'];
	$hper = $_POST['hper'];

	$s = $_POST['s'];
	$syear = $_POST['syear'];
	$sper = $_POST['sper'];

	$comname1 = $_POST['comname1'];
	$jo1 = $_POST['jo1'];
	$stdate1 = $_POST['stdate1'];
	$endate1 = $_POST['endate1'];
	$detail1 = $_POST['detail1'];

	$coname2 = $_POST['coname2'];
	$j2 = $_POST['j2'];
	$date2 = $_POST['date2'];
	$datee2 = $_POST['datee2'];
	$det2 = $_POST['det2'];

	$son = $_POST['son'];
	$two = $_POST['two'];
	$three = $_POST['three'];

	
	$awdet = $_POST['awdet'];
    }

    $mpdf = new \Mpdf\Mpdf();
	
	//Database connection
	$conn = new mysqli('localhost','root','','test');
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$sql = "INSERT Into manageresume (ffname, miame, laname, phnumber, emailid, lndin, bdate, addrss, courname, univer, grades, year, h, hyear, hper, s, syear, sper, comname1, jo1, stdate1, endate1, detail1, coname2, j2, date2, datee2, det2, son, two, three, awdet) values('$ffname', '$miame', '$laname', '$phnumber', '$emailid', '$lndin','$bdate', '$addrss', '$courname', '$univer', '$grades', '$year', '$h', '$hyear', '$hper', '$s', '$syear', '$sper', '$comname1', '$jo1', '$stdate1', '$endate1', '$detail1', '$coname2', '$j2', '$date2', '$datee2', '$det2', '$son', '$two', '$three', '$awdet')";
		if($conn->query($sql))
		{
			echo "Data entered Sucessfully";


			$query = "SELECT * FROM manageresume where emailid = '$emailid'";
			$result = mysqli_query($conn,$query);
			$data = '';
			while($rows = mysqli_fetch_array($result))
			{
				$data.='<h2><strong>Personal Information</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['ffname'].' '.$rows['miame'].' '. $rows['laname']. '<br/>';
				$data.=$rows['phnumber'].'<br>';
				$data.=$rows['emailid'].'<br>';
				$data.=$rows['bdate'].'<br>';
				$data.=$rows['addrss'].'<br>';
				if ($rows['lndin'] != '\0')
				{
					$data.= $rows['lndin'].'<br>';
				}
				$data.='<h2><strong>Education</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['courname'].'<br>';
				$data.=$rows['univer'].'<br>';
				$data.=$rows['grades'].'<br>';
				$data.=$rows['year'].'<br><br>';
				$data.='<h4><strong>HSC Education</strong></h4>'.'<br>';
				$data.=$rows['h'].'<br>';
				$data.=$rows['hyear'].'<br>';
				$data.=$rows['hper'].'<br><br>';
				$data.='<h4><strong>SSC Education</strong></h4>'.'<br>';
				$data.=$rows['s'].'<br>';
				$data.=$rows['syear'].'<br>';
				$data.=$rows['sper'].'<br>';
				$data.='<h2><strong>Experience</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['comname1'].'<br>';
				$data.=$rows['jo1'].'<br>';
				$data.=$rows['stdate1'].' to '.$rows['endate1'].'<br>';
				$data.=$rows['detail1'].'<br><br>';
				$data.= $rows['coname2'].'<br>';
				$data.=$rows['j2'].'<br>';
				$data.=$rows['datee2'].' to '.$rows['endate1'].'<br>';
				$data.=$rows['det2'].'<br>';
				$data.='<h2><strong>Skills</strong></h2>';
				$data.= '<hr><br/>';
				$data.='o'.'  '.$rows['son'].'<br>';
				$data.='o'.'  '.$rows['two'].'<br>';
				$data.='o'.'  '.$rows['three'].'<br>';
				
				if ($rows['awdet'] != '\0')
				{
					$data.='<br><h2><strong>Award/Certificate</h2>';
					$data.= '<hr><br/>';
					$data.= $rows['awdet'].'<br>';
				}			 
				
			}

			$mpdf->WriteHTML($data);

			$mpdf->Output('mangpdf.pdf', 'D');
			
		}
		else
		{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
		
	}

?>