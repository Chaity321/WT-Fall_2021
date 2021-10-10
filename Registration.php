<?php include "control/profile.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labtask1</title>
</head>
<body>
<h2>Registration Form</h2>
<form action="profile.php" method="post">
 
 <label for="name">
 First Name:<input type="text" name="fname" placeholder="Enter your first Name" required="">
 <?php echo $validatefirstname; ?>
 </label><br><br>

 <label for="name">
 Last Name:<input type="text" name="lname" placeholder="Enter your last name" required="">
 <?php echo $validatelastname; ?>
 </label><br><br>
 <label for="name">
 Age:<input type="number" name="age" placeholder="Enter your age" required="">
 <?php echo $validateage; ?>
 </label><br><br>
 <label for="name">
 Designnation:<input type="radio" name="designnation 1" placeholder="Enter your designnation" value="Junior programmer"> Junior programmer
 </label>
 <label for="name">
<input type="radio" name="designnation 2" placeholder="Enter your designnation" value="Senior officer"> Senior officer
 </label>
 <input type="radio" name="designnation 3" placeholder="Enter your designnation" value="Project lead"> Project lead
 </label><br><br>
 <?php echo $validateradio; ?>
 <label for="name">
 Preferred language:<input type="checkbox" name="preferred language 1" placeholder="Enter your preferred language" value="JAVA"> JAVA
 </label>
 <input type="checkbox" name="preferred language" placeholder="Enter your preferred language 2" value="PHP"> PHP
 </label>
 <input type="checkbox" name="preferred language" placeholder="Enter your preferred language 3" value="C++"> C++
 </label><br><br>
 <?php echo $validatecheckbox; ?>
 <label for="name">
 Email:<input type="email" name="email" placeholder="Enter your email" required="">
 <?php echo $validateemail; ?>
 </label><br><br>
<label for="name">
 Password:<input type="password" name="password" placeholder="Enter your password" required="">
 <?php echo $validatepassword; ?>
 </label><br><br>
 <label for="name">
 Please choose a file:<input type="file" name="my file" placeholder=" choose file" required="">
 </label><br><br>
<input type="Submit" name="submit">
<input type="Reset" name="reset">

</body>
</html>