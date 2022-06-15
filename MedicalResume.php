<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" background-color: rgb(241, 245, 232);  content="IE=edge">-->
    <title>Medical</title>
    <!--<link rel="stylesheet" href="">-->
    <style type="text/css">
        fieldset
        {
            width: 1000px;
            float: center;
            margin: auto;
            border-radius: 0px 0px 20px 20px;
            border-width: 2px; 
            border-color: white; 
            box-shadow: 5px 10px 5px rgb(241, 241, 241);
        }
        #f1
        {
            width: 1000px;
            float: center;
            margin: auto;
            border-width: 2px; 
            border-color: rgb(0, 0, 100); 
            border-radius: 20px 20px 0px 0px;
            background-color: rgb(0, 0, 100);
            color: white;
            box-shadow: 5px 10px 5px rgb(241, 241, 241);
        }
        input
        {
            width: 850px;
        }
        textarea
        {
            width: 850px;
        }
        body
        {
            color: rgb(0, 0, 141);
            font-size: 21px;
            font-weight: bold;
        }
        input
        {
            padding:11px 20px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            background-color: rgb(241, 241, 241);
            border-top: 0px;
            border-bottom: 2px solid rgb(200, 200, 200);
            border-right: 0px;
            border-left: 0px;
            border-radius: 0px 0px 0px 0px;
        }
        textarea
        {
            padding:11px 20px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            background-color: rgb(241, 241, 241);
            border-top: 0px;
            border-bottom: 2px solid rgb(200, 200, 200);
            border-right: 0px;
            border-left: 0px;
            border-radius: 0px 0px 0px 0px;
        }
        img
        {
            margin-right: 0px;
        }
        h2
        {
            color: rgb(0, 0, 100);
            font-weight: bold;
            text-shadow: 1px 1px 1px rgb(80, 44, 248, 0.5);
        }
        input[type = submit]
        {
            background-color: rgb(0, 0, 100);
            color: white;
            border: none;
            width: 130px;
            padding:16px 20px;
            font-size: 18px;
            border-radius: 8px;
        }
        input[type = reset]
        {
            background-color: rgb(0, 0, 100);
            color: white;
            border: none;
            width: 130px;
            margin-left: 20px;
            padding:16px 20px;
            font-size: 18px;
            border-radius: 8px;
        }
        #tbl
        {
            margin: auto;
        }
    </style>
</head>
<body>
    <table id="tbl">
    <tr>
    <td>
        <div id="div1">
            
        </div>
    </td>
    <td>
        <div id="div3">
            <h1 style="color: white">1</h1>
        </div>
    </td>
    <td>
    <h2><center>Medical Resume</center></h2>
    <form action="medicalpdf.php" method="POST">
    <fieldset id = "f1">
        <h3>Personal Information <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>First name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "First name" id = "fir" name ="fir" required></td></tr>
                <tr><td>Middle name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Middle name" id = "mid" name ="mid" required></td></tr>
                <tr><td>Last name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Last name" id = "last" name ="last" required></td></tr>
                <tr><td>Phone number</td></tr>
                <tr><td><input type = "tel" pattern="[0-9]{10}" placeholder = "0123456789" id = "phno" name = "phno" required></td></tr>
                <tr><td>E-mail ID</td></tr>
                <tr><td><input type = "email" placeholder = "abc@xyz.pqr" id = "emid" name ="emid" required></td></tr>
                <tr><td>Linkedin Profile</td></tr>
                <tr><td><input type = "linkedin" placeholder = "linkedin.com/in/yourporfile" id = "lndn" name ="lndn"></td></tr>
                 <tr><td>Date of Birth</td></tr>
                <tr><td><input type = "date" id = "bthdate" name ="bthdate" required></td></tr>
                <tr><td>Address</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "a" name = "a" required></textarea></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Career Objective <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Career Objective</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "carr" name = "carr" required></textarea></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Education <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Course/Degree</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Course name" id = "cou" name ="cou" required></td></tr>    
                <tr><td>University</td></tr>
                <tr><td><textarea rows = "2" cols = "50" id = "u" name = "u" required></textarea></tr>
                <tr><td>Grade</td></tr>
                <tr><td><input type = "text" size = 2 id = "gr" name ="gr" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "yr" pattern="[0-9]{4}" name ="yr" required></td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>HSC Education</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>Board</td></tr>
                <tr><td><input type = "text" size = 30 id = "hs" name ="hs" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "hsyear" pattern="[0-9]{4}" name ="hsyear" required></td></tr>
                <tr><td>Percentile/CGPA</td></tr>
                <tr><td><input type = "text" size = 6 id = "hsper" name ="hsper" required></td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>SSC Education</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>Board</td></tr>
                <tr><td><input type = "text" size = 30 id = "ss" name ="ss" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "ssyear" pattern="[0-9]{4}" name ="ssyear" required></td></tr>
                <tr><td>Percentile/CGPA</td></tr>
                <tr><td><input type = "text" size = 6 id = "ssper" name ="ssper" required></td></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Experience <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Company Name</td></tr>
                <tr><td><textarea rows = "2" cols = "50" id = "cname" name = "cname" required></textarea></tr>
                <tr><td>Job Title</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Job title" id = "job1" name ="job1" required></td></tr>
                <tr><td>Start Date</td></tr>
                <tr><td><input type = "date" id = "d1" name ="d1" required></td></tr>
                <tr><td>End Date</td></tr>
                <tr><td><input type = "date" id = "d2" name ="d2" required></td></tr>
                <tr><td>Details</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "jdl" name = "jdl" required></textarea></tr>
            </table>
        <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Company Name</td></tr>
                <tr><td><textarea rows = "2" cols = "50" id = "cname22" name = "cname22"></textarea></tr>
                <tr><td>Job Title</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Job title" id = "job122" name ="job122"></td></tr>
                <tr><td>Start Date</td></tr>
                <tr><td><input type = "date" id = "d122" name ="d122"></td></tr>
                <tr><td>End Date</td></tr>
                <tr><td><input type = "date" id = "d222" name ="d222"></td></tr>
                <tr><td>Details</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "jdl22" name = "jdl22"></textarea></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Languages Known <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td><input type = "text" size = 30 placeholder = "language" id = "lang" name ="lang" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "lang1" name ="lang1" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "language" id = "l2" name ="l2" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "lang2" name ="lang2" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "language" id = "l3" name ="l3" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "lang3" name ="lang3" style="width: 200px" required></td></tr>-->
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Technical Skills <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "s1" name ="s1" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "soran" name ="soeran" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "s2" name ="s2" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "s2ran" name ="s2ran" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "s3" name ="s3" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "s3ran" name ="s3ran" style="width: 200px" required></td></tr>-->
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Professtional Skills <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "sk1" name ="sk1" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "soran" name ="soeran" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "sk2" name ="sk2" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "s2ran" name ="s2ran" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "sk3" name ="sk3" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "s3ran" name ="s3ran" style="width: 200px" required></td></tr>-->
            </table>
    </fieldset>
    <br>
     <center>
    <div>
        <input type="submit" name = "submit">
        <input type="reset" name = "reset">
    </div>
    </center>
    </form>
    </td>
    <td>
        <div id="div4">
            <h1 style="color: white">1</h1>
        </div>
    </td>
    <td>
        <div id="div2">
            
        </div>
    </td>
    </tr>
    </table>
</body>
</html>