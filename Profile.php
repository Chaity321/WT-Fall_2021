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
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $designation = $_POST['designation'];
        $password =$_POST['password'];
        echo "<hr>";
        echo "First name: ". $fname."<br>";
        echo "Last name: ". $lname."<br>";
        echo "Age: ". $age."<br>";
        echo "Designation: ". $designation."<br>";
        echo "Email: ". $email."<br>";
        echo "Password: ". $password."<br>";
    }
 
 
    ?>
    </body>
</html>