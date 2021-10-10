<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validateradio="";
$v1=$v2=$v3="";
$validatecheckbox="";
$p1=$p2=$p3="";
$validatepassword="";
if(isset($_POST[Registration]))
{
    $name=$_REQUEST["fname"];
    $name=$_REQUEST["lname"];
    $name=$_REQUEST["age"];
    $name=$_REQUEST["email"];
    $name=$_REQUEST["designation"];
    $name=$_REQUEST["preferredlanguage"];
    $name=$_REQUEST["password"];
}
if(empty($_REQUEST[fname]))
{
    $validatefname= enter your first name;
}
else{
    echo "your name is .$fname";
}

if(empty($lname))
{
    $validatefname= enter your last name;
}
else{
    echo "your name is .$lname";
}

if(empty$age)
{
    $validatefage= enter your age;
}
else{
    echo "your age is .$age";
}
if(empty$email)
{
    $validatefname= enter your email;
}
else{
    echo "your mail is .$email";
}

if(isset($_REQUEST["designation1"])&&!isset($_REQUEST["designation2"])&&!($_REQUEST["designation3"])
{
    $validateradio= please select atleast one radio;
}

else{
    if(isset($_REQUEST["designation1"]))
    {
        $d1= $_REQUEST["designation1"];
    }
    if(isset($_REQUEST["designation2"]))
    {
        $d2= $_REQUEST["designation2"];
    }
    if(isset($_REQUEST["designation3"]))
    {
        $d3= $_REQUEST["designation3"];
    }
}if(isset($_REQUEST["preferredlanguage1"])&&!isset($_REQUEST["preferredlanguage2"])&&!($_REQUEST["preferredlanguage3"])
{
    $validatecheckbox= please select atleast one checkbox;
}

else{
    if(isset($_REQUEST["preferredlanguage1"]))
    {
        $p1= $_REQUEST["preferredlanguage1"];
    }
    if(isset($_REQUEST["preferredlanguage2"]))
    {
        $p2= $_REQUEST["preferredlanguage2"];
    }
    if(isset($_REQUEST["preferredlanguage3"]))
    {
        $p3= $_REQUEST["preferredlanguage3"];
    }
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>profile</h2>
<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];POST['preferredlanguage'];
        $password =$_POST['password'];
        $pleasechooseafile = $_POST['pleasechooseafile'];
        echo "<hr>";
        echo "First name: ". $fname."<br>";
        echo "Last name: ". $lname."<br>";
        echo "Age: ". $age."<br>";
        echo "Designation: ". $designation."<br>";
        echo "Preferred language: ". $preferredlanguage."<br>";
        echo "Email: ". $email."<br>";
        echo "Password: ". $password."<br>";
        echo "Pleasechooseafile: ". $pleasechooseafile."<br>";
    }
        $email = $_POST['email'];
        $age = $_POST['age'];
        $designation = $_POST['designation'];
        $preferredlanguage = $_
 
 
    ?>
    </body>
</html>