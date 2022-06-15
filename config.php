<?php

require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['submit']))
    {
    $fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$pnumber = $_POST['pnumber'];
	$email = $_POST['email'];
	$lnpro = $_POST['lnpro'];
	$addrs = $_POST['addrs'];

	$couname = $_POST['couname'];
	$uni = $_POST['uni'];
	$grade = $_POST['grade'];
	$pyear = $_POST['pyear'];

	$hsc = $_POST['hsc'];
	$hscyear = $_POST['hscyear'];
	$hscper = $_POST['hscper'];

	$ssc = $_POST['ssc'];
	$sscyear = $_POST['sscyear'];
	$sscper = $_POST['sscper'];

	$compname = $_POST['compname'];
	$job = $_POST['job'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$jdetail = $_POST['jdetail'];

	$sone = $_POST['sone'];
	$stwo = $_POST['stwo'];
	$sthree = $_POST['sthree'];

	$aone = $_POST['aone'];
	$awdetail = $_POST['awdetail'];
    }

    $mpdf = new \Mpdf\Mpdf();
	
	//Database connection
	$conn = new mysqli('localhost','root','','test');
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$sql = "INSERT Into engiresume (fname, mname, lname, pnumber, email, lnpro, addrs, couname, uni, grade, pyear, hsc, hscyear, 
hscper, ssc, sscyear, sscper, compname, job, sdate, edate, jdetail, sone, stwo, sthree, aone, awdetail) values('$fname', '$mname', '$lname', '$pnumber', 
'$email', '$lnpro', '$addrs', '$couname', '$uni', '$grade', '$pyear', '$hsc', '$hscyear', '$hscper', '$ssc', '$sscyear', '$sscper', '$compname', '$job', 
'$sdate', '$edate', '$jdetail', '$sone', '$stwo', '$sthree', '$aone', '$awdetail')";
		if($conn->query($sql))
		{
			echo "Data entered Sucessfully";




			$query = "SELECT * FROM engiresume where email = '$email'";
			$result = mysqli_query($conn,$query);
			$data = '';
			while($rows = mysqli_fetch_array($result))
			{
				$data.='<h2><strong>Personal Information</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['fname'].' '.$rows['mname'].' '. $rows['lname']. '<br/>';
				$data.=$rows['pnumber'].'<br>';
				$data.=$rows['email'].'<br>';
				//$data.=$rows['birthdate'].'<br>';
				$data.=$rows['addrs'].'<br>';
				if ($rows['lnpro'] != '\0')
				{
					$data.= $rows['lnpro'].'<br>';
				}
				$data.='<h2><strong>Education</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['couname'].'<br>';
				$data.=$rows['uni'].'<br>';
				$data.=$rows['grade'].'<br>';
				$data.=$rows['pyear'].'<br><br>';
				$data.='<h4><strong>HSC Education</strong></h4>'.'<br>';
				$data.=$rows['hsc'].'<br>';
				$data.=$rows['hscyear'].'<br>';
				$data.=$rows['hscper'].'<br><br>';
				$data.='<h4><strong>SSC Education</strong></h4>'.'<br>';
				$data.=$rows['ssc'].'<br>';
				$data.=$rows['sscyear'].'<br>';
				$data.=$rows['sscper'].'<br>';
				$data.='<h2><strong>Experience</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['compname'].'<br>';
				$data.=$rows['job'].'<br>';
				$data.=$rows['sdate'].' to '.$rows['edate'].'<br>';
				$data.=$rows['jdetail'].'<br>';
				$data.='<h2><strong>Skills</strong></h2>';
				$data.= '<hr><br/>';
				$data.='o'.'  '.$rows['sone'].'<br>';
				$data.='o'.'  '.$rows['stwo'].'<br>';
				$data.='o'.'  '.$rows['sthree'].'<br>';
				$data.='<h2><strong>Other Experience/Project</strong></h2>';
				$data.= '<hr><br/>';
				$data.=$rows['aone'].'<br>';
				if ($rows['awdetail'] != '\0')
				{
					$data.='<br><h2><strong>Award/Certificate</h2>';
					$data.= '<hr><br/>';
					$data.= $rows['awdetail'].'<br>';
				}
				 
				
			}

			$mpdf->WriteHTML($data);

			$mpdf->Output('engipdf.pdf', 'D');
			
		}
		else
		{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
		
	}

?>