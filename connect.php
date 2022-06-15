<?php

if(isset($_POST['submit']))
    {
    $fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$pnumber = $_POST['pnumber'];
	$email = $_POST['email'];
	$addrs = $_POST['addrs'];

	$couname = $_POST['couname'];
	$uni = $_POST['uni'];
	$grade = $_POST['grade'];
	$pyear = $_POST['pyear'];

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
	
	//Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(fname, mname, lname, pnumber, email, addrs, couname, uni, grade, pyear, compname, job, sdate, edate, jdetail, sone, stwo, sthree, aone, awdetail) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisssssissssssssss", $fname, $mname, $lname, $pnumber, $email, $addrs, $couname, $uni, $grade, $pyear, $compname, $job, $sdate, $edate, $jdetail, $sone, $stwo, $sthree, $aone, $awdetail);
		$stmt->execute();
		echo "Data taken Sucessfully...";
		$stmt->close();
		$conn->close();
	}

?>