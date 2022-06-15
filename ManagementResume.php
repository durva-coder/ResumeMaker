<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" background-color: rgb(241, 245, 232); content="IE=edge">-->
    <title>Management</title>
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
    <h2><center>Management Resume</center></h2>
    <form action="Managepdf.php" method="POST">
    <fieldset id = "f1">
        <h3>Personal Information <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>First name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "First name" id = "ffname" name ="ffname" required></td></tr>
                <tr><td>Middle name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Middle name" id = "miame" name ="miame" required></td></tr>
                <tr><td>Last name</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Last name" id = "laname" name ="laname" required></td></tr>
                <tr><td>Phone number</td></tr>
                <tr><td><input type = "tel" pattern="[0-9]{10}" placeholder = "0123456789" id = "phnumber" name = "phnumber" required></td></tr>
                <tr><td>E-mail ID</td></tr>
                <tr><td><input type = "email" placeholder = "abc@xyz.pqr" id = "emailid" name ="emailid" required></td></tr>
                <tr><td>Linkedin Profile</td></tr>
                <tr><td><input type = "linkedin" placeholder = "linkedin.com/in/yourporfile" id = "lndin" name ="lndin"></td></tr>
                 <tr><td>Date of Birth</td></tr>
                <tr><td><input type = "date" id = "bdate" name ="bdate" required></td></tr>
                <tr><td>Address</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "addrss" name = "addrss" required></textarea></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Education <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Course/Degree</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Course name" id = "courname" name ="courname" required></td></tr>    
                <tr><td>University</td></tr>
                <tr><td><textarea rows = "2" cols = "50" id = "univer" name = "univer" required></textarea></tr>
                <tr><td>Grade</td></tr>
                <tr><td><input type = "text" size = 2 id = "grades" name ="grades" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "year" pattern="[0-9]{4}" name ="year" required></td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>HSC Education</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>Board</td></tr>
                <tr><td><input type = "text" size = 30 id = "h" name ="h" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "hyear" pattern="[0-9]{4}" name ="hyear" required></td></tr>
                <tr><td>Percentile/CGPA</td></tr>
                <tr><td><input type = "text" size = 6 id = "hper" name ="hper" required></td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>SSC Education</td></tr>
                <tr><td style="color: white">.</td></tr>
                <tr><td>Board</td></tr>
                <tr><td><input type = "text" size = 30 id = "s" name ="s" required></td></tr>
                <tr><td>Year</td></tr>
                <tr><td><input type = "number" id = "syear" pattern="[0-9]{4}" name ="syear" required></td></tr>
                <tr><td>Percentile/CGPA</td></tr>
                <tr><td><input type = "text" size = 6 id = "sper" name ="sper" required></td></tr>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Experience <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Company Name</td></tr>
                <tr><td><textarea rows = "2" cols = "50" id = "comname1" name = "comname1" required></textarea></tr>
                <tr><td>Job Title</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Job title" id = "jo1" name ="jo1" required></td></tr>
                <tr><td>Start Date</td></tr>
                <tr><td><input type = "date" id = "stdate1" name ="stdate1" required></td></tr>
                <tr><td>End Date</td></tr>
                <tr><td><input type = "date" id = "endate1" name ="endate1" required></td></tr>
                <tr><td>Details</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "detail1" name = "detail1" required></textarea></tr>  
            </table>
            <table style="margin: 2px 20px 20px 60px;">
                <tr><td>Company Name</td></tr>
                <tr><td><textarea rows = "2" cols = "50" id = "coname2" name = "coname2" required></textarea></tr>
                <tr><td>Job Title</td></tr>
                <tr><td><input type = "text" size = 30 placeholder = "Job title" id = "j2" name ="j2" required></td></tr>
                <tr><td>Start Date</td></tr>
                <tr><td><input type = "date" id = "date2" name ="date2" required></td></tr>
                <tr><td>End Date</td></tr>
                <tr><td><input type = "date" id = "datee2" name ="datee2" required></td></tr>
                <tr><td>Details</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "det2" name = "det2" required></textarea></tr> </br> </br>
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Skills <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "son" name ="son" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "sonrange" name ="sonrange" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "two" name ="two" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "stwrange" name ="stwrange" style="width: 200px" required></td></tr>-->
                <tr><td><input type = "text" size = 30 placeholder = "Skill name" id = "three" name ="three" required></td></tr>
                <!--<tr><td><input type = "range" min = "0" max = "5" id = "sthrerange" name ="sthrerange" style="width: 200px" 
required></td></tr>-->
            </table>
    </fieldset>
    <br>
    <fieldset id = "f1">
        <h3>Award/Certificate <img src="logonew.png" alt="" height="6%" width="6%" align="right"></h3>
    </fieldset>
    <fieldset>
            <table style="margin: 20px 20px 20px 60px;">
                <tr><td>Detail</td></tr>
                <tr><td><textarea rows = "4" cols = "50" id = "awdet" name = "awdet"></textarea></tr>
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