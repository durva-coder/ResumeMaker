<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" background-color: rgb(241, 245, 232); content="IE=edge">-->
    <title>Engineering</title>
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
        <!--
    <td>
        <div id="div1">
            
        </div>
    </td>
    <td>
        <div id="div3">
            <h1 style="color: white">1</h1>
        </div>
    </td>-->
    <td>
    <h2><center>Engineering Resume</center></h2>
    <form action="config.php" method="POST">
    <fieldset id = "f1">
        <h3>Personal Information <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>First name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "First name" id = "fname" name ="fname" required></td></tr>
                <tr><td>Middle name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Middle name" id = "mname" name ="mname" required></td></tr>
                <tr><td>Last name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Last name" id = "lname" name ="lname" required></td></tr>
                <tr><td>Phone number</td></tr>
                <tr><td><input type = "tel" pattern="[0-9]{10}" placeholder = "0123456789" id = "pnumber" name = "pnumber" required></td></tr>
                <tr><td>E-mail ID</td></tr>
                <tr><td><input type = "email" placeholder = "abc@xyz.pqr" id = "email" name ="email" required></td></tr>
                <tr><td>Linked in</td></tr>
                <tr><td><input type = "text" size = 200 id = "lnpro" name ="lnpro"></td></tr>
                <tr><td>Date of Birth</td></tr>
                <tr><td><input type = "date" id = "birthdate" name ="birthdate" required></td></tr>
                <tr><td>Address</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "addrs" name = "addrs" required></textarea></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Education <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Course/Degree</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Course name" id = "couname" name ="couname" required></td></tr>    <tr><td>University</td></tr>
                <tr><td><textarea rows = "2" cols = "50" id = "uni" name = "uni" required></textarea></tr>
                <tr><td>Grade</td></tr>
                <tr><td><input type = "text" size = 2 id = "grade" name ="grade" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "pyear" pattern="[0-9]{4}" name ="pyear" required></td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>HSC Education</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>Board</td></tr>
                <tr><td><input type = "text" size = 30 id = "hsc" name ="hsc" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "hscyear" pattern="[0-9]{4}" name ="hscyear" required></td></tr>
                <tr><td>Percentile/CGPA</td></tr>
                <tr><td><input type = "text" size = 6 id = "hscper" name ="hscper" required></td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>SSC Education</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>Board</td></tr>
                <tr><td><input type = "text" size = 30 id = "ssc" name ="ssc" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "sscyear" pattern="[0-9]{4}" name ="sscyear" required></td></tr>
                <tr><td>Percentile/CGPA</td></tr>
                <tr><td><input type = "text" size = 6 id = "sscper" name ="sscper" required></td></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Experience <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Company Name</td></tr>
                <tr><td><textarea rows = "2" cols = "50" id = "compname" name = "compname" required></textarea></tr>
                <tr><td>Job Title</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Job title" id = "job" name ="job" required></td></tr>
                <tr><td>Start Date</td></tr>
                <tr><td><input type = "date" id = "sdate" name ="sdate" required></td></tr>
                <tr><td>End Date</td></tr>
                <tr><td><input type = "date" id = "edate" name ="edate" required></td></tr>
                <tr><td>Details</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "jdetail" name = "jdetail" required></textarea></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Skills <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "sone" name ="sone" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "sonerange" name ="sonerange" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "stwo" name ="stwo" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "stworange" name ="stworange" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "sthree" name ="sthree" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "sthreerange" name ="sthreerange" style="width: 200px" required></td></tr>-->
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Other Experience/Project <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Experience/Project</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "aone" name = "aone" required></textarea></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Award/Certificate <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Detail</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "awdetail" name = "awdetail"></textarea></tr>
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
    <!--
    <td>
        <div id="div4">
            <h1 style="color: white">1</h1>
        </div>
    </td>
    <td>
        <div id="div2">
            
        </div>
    </td>
-->
    </tr>
    </table>
</body>
</html>